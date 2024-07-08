// Listen for the receiveNotification event
socket.on("new_notification", function(data) {
    $('.newnoti_'+data.notifiable_id).addClass('red');
    var html='';
    let message = '';
    if(data.message.type.includes('NewJobPosted')){
         message = 'You posted the job "'+data.message.data.title +'" in "'+receiverDataName ;
    }else if(data.message.type.includes('SendInvitation')){
        message = 'You have received an invitation to interview for the job "'+data.message.data.title ;
    }else if(data.message.type.includes('UnsendInvitation')){
          message = 'the invitation has been retracted.Please contact the client for further information "'+data.message.data.title ;
     }
    else if(data.message.type.includes('FinishedWork')){
         message = 'Your milestone work has finished "'+data.message.data.title ;
    }else if(data.message.type.includes('PaymentReceived')){
         message = 'Your milestone has Ended and payment received "'+data.message.data.title  ;
    }else if(data.message.type.includes('AcceptInterview')){
        if(data.message.data.status == 2){
             message = data.message.data.freelancer_id+' declined your invitation to interview for the job "'+data.message.data.title  ;
        }else if(data.message.data.status == 1){
             message = data.message.data.freelancer_id+' accepted your invitation to interview for the job "'+data.message.data.title  ;
        }
    }else{

    }
    html += '<li>\
                <div class="inner_notification font_14 p-3 pe-5 d-flex position-relative font_weight_600 border_bottom">\
                    <i class="fas fa-rocket me-2"></i>\
                    <p class="m-0">\
                        <a class="text-decoration-none color_black" href="'+data.message.data.url+'">'+message+'</a>\
                   </p>\
                    <span class="position-absolute"><i class="fas fa-times notificatin_delete" data-id="'+data.message.id+'"></i></span>\
                </div>\
            </li>';
            $('.notification_'+data.notifiable_id).append(html);
            $('.text-center').addClass('d-none');

});
