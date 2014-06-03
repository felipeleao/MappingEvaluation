/**
 *
 *    Simple script that enables the methods to
 *    show and hide the loading message
 *
 */


var messages;

messages = messages || (function () {
    var pleaseWaitDiv = $('<div class="modal" id="pleaseWaitDialog" data-backdrop="static" data-keyboard="false">'+
                                '<div class="modal-dialog">'+
                                    '<div class="modal-content">'+
                                        '<div class="modal-header">'+
                                            '<h2 class="less-margin">Processing...</h2>'+
                                        '</div>'+
                                        '<div class="modal-body">'+
                                            '<div class="progress progress-striped active">'+
                                                '<div class="progress-bar" style="width: 100%;"></div>'+
                                            '</div>'+
                                        '</div>'+
                                    '</div>'+
                                '</div>'+
                            '</div>');

    var errorDivBegin = '<div class="modal">'+
                            '<div class="modal-dialog">'+
                                '<div class="modal-content">'+
                                    '<div class="modal-header">'+
                                        '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>'+
                                        '<h3 class="modal-title" id="modaltitle">Ops! bumped into an error...</h3>'+
                                    '</div>'+
                                    '<div class="modal-body" id="modalbody">'+
                                        '<p id="modalmessage">';

    var errorDivEnd =                   '</p>'+
                                    '</div>'+
                                    '<div class="modal-footer">'+
                                        '<button type="button" class="btn btn-sm btn-modal" data-dismiss="modal">Close</button>'+
                                    '</div>'+
                                '</div>'+
                            '</div>'+
                        '</div>';

    return {
        showPleaseWait: function() {
            pleaseWaitDiv.modal();
        },
        hidePleaseWait: function () {
            pleaseWaitDiv.modal('hide');
        },
        showError: function ($message) {
            $(errorDivBegin+$message+errorDivEnd).modal();
        },


    };
})();
