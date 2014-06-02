



$(window).ready(function(){
    updateActiveNavbar();
});




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
            }
            //Update progressbar
            var percentage = (Math.floor((data.synsetsEvaluated / data.totalSynsets)*10000))/100;
            $('#evaluated').html(data.synsetsEvaluated);
            $('#totalSynsets').html(data.totalSynsets);
            $('#percentage').html(percentage+"%");
            $('#progressbar').css("width",percentage+"%");

        },
        error: function(){
            alert("error while trying to load mapping.");
        }
    });
}


function finishEvaluation(){
    var finishMessage =
            "<div class=\"jumbotron\">"+
                "<h1><span class=\"text-success\"><strong>You did it!</strong></span></h1>"+
                "<p>There are no more mappings for you to evaluate. Thank you very much for your participation.</p>"+
            "</div>";
    $('#main_content').html(finishMessage);
}



/**
*  submits the user evaluation of the mapping
*/
function saveEvaluation($synset, $evaluation){

}
