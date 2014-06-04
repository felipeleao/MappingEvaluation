



$(window).ready(function(){
    updateActiveNavbar();
});




//========================================================
//    GLOBAL VARIABLES
//========================================================

var $current_synset_id = 0;

//========================================================



/**
*  Retrieves a mapping not yet evaluated by the user
*  along with the updated amount of evaluations conducted
*  by the user already and the total number of evaluations.
*  If there are no more evaluations to be conducted, a
*  message is displayed.
*/
function loadMapping(){
    $.ajax({
        type:'POST',
        dataType: 'JSON',
        url: application_root+'/dynamic/load_mapping.php',
        data: {},
        cache: false,
        success:function(data){
            if(data.noMoreEvaluations){
                finishEvaluation();
            }else{
                var synset =
                    "<dt>Words:</dt>"+
                    "<dd>"+data.synset.words+"</dd>"+
                    "<dt>Gloss:</dt>"+
                    "<dd>"+data.synset.gloss+"</dd>";
                $('#synset > .panel-body > .content').html(synset);

                var semtypes= "";
                $.each(data.semtypes, function(name, definition){
                    semtypes +=
                        "<dt>Name:</dt>"+
                        "<dd>"+name+"</dd>"+
                        "<dt>Definition:</dt>"+
                        "<dd>"+definition+"</dd>"+
                        "<hr/>";
                });
                $('#semantic_type > .panel-body > .content').html(semtypes.slice(0,-5));
                $current_synset_id = data.synset.id;
            }
            //Update progressbar
            var percentage = (Math.floor((data.synsetsEvaluated / data.totalSynsets)*10000))/100;
            $('#evaluated').html(data.synsetsEvaluated);
            $('#totalSynsets').html(data.totalSynsets);
            $('#percentage').html(percentage+"%");
            $('#progressbar').css("width",percentage+"%");

        },
        error: function(){
            messages.showError("Error while trying to load mapping. \nPelase, reload the page and try again.");
        }
    });
}




/**
*  Saves the evaluation based on the user's click on one of the buttons.
*  Once the server responds informing that the evaluation has been
*  successfully saved, the method loads another mapping for the user
*  to evaluate
*/
function sendEvaluation($eval){
    //Show loading message
    messages.showPleaseWait();

    //save user answer
    $.ajax({
        type:'POST',
        dataType: 'JSON',
        url: application_root+'/dynamic/save_evaluation.php',
        data: {synset:$current_synset_id, evaluation : $eval},
        cache: false,
        success:function(data){
            //if successfuly saved the evaluation, loads another mapping
            loadMapping();
            messages.hidePleaseWait();

        },
        error: function(){
            messages.hidePleaseWait();
            messages.showError("Error while trying to save evaluation. \nPelase, reload the page and try again.");
        }
    });

}



/**
*  Called to change the evaluation page content for a big
*  jumbotron informing that there are currently no more
*  mappings to evaluate.
*/
function finishEvaluation(){
    var finishMessage =
            "<div class=\"jumbotron\">"+
                "<h1><span class=\"text-success\"><strong>We're done! :)</strong></span></h1>"+
                "<p>There are no more mappings for you to evaluate. Thank you very much for your participation.</p>"+
            "</div>";
    $('#main_content').html(finishMessage);
}




/**
*  Loads the click functions for buttons on the page
*/
function loadButtonActions(){
    $('#btn_wrong').click(function(){
        sendEvaluation(false);
    });

    $('#btn_correct').click(function(){
        sendEvaluation(true);
    });
}


/**
*  submits the user evaluation of the mapping
*/
function saveEvaluation($synset, $evaluation){

}
