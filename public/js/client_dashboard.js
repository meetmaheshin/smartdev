 //  edit project by client
 $(".edit_draft,.view_proposals").on("click", function (e) {
    e.preventDefault();
    var id = $(this).attr("data-id");
    var url = $(this).attr("data-action");

    $.ajax({
        url: url,
        method: "GET",
        data: { id: id },
        dataType: "json",
        success(response) {
            if (response.response == "true") {
                location.href = response.url;
            }
        },
        error(error) {
            console.log(error);
        },
    });
});

// status change of  projects and delete drafts project
$(".remove_posting,.reuse_posting,.remove_draft").on("click", function (e) {
    e.preventDefault();
    var id = $(this).attr("data-id");
    var url = $(this).attr("data-action");
    var status = $(this).attr("data-status");
    var job= 'delete';
    if(status =='Repost'){
        var job = 'new';
    }
    swal.fire({
        title: "Are you sure?",
        text: "You want to "+status+" this project",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Yes, "+job+" it!",
        closeOnConfirm: false,
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: url,
                type: "POST",
                data: {
                    id: id,status:job
                },
                dataType: "json",
                success: function (response) {
                    swal.fire(status, status, "success");
                    notify.show('success', 'Project Successfully '+status)
                    setTimeout(function(){
                        location.reload();
                    },3000);
                    
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    swal.fire(
                        "Cancelled",
                        "Please try again",
                        "error"
                    );
                },
            });
        } else if (result.isDenied) {
            swal.fire("Cancelled", "", "error");
        }
    });
});

$('#send_invitation_form').on("submit", function (e) {
    e.preventDefault();
    // var modalDown = document.getElementById("inviteJob");
    $.ajax({
        url: '/client/send_invitation',
        data : $(this).serialize(),
        method: 'POST',
        dataType: "json",
        success : function (response){
            if(response.status == true){
                socket.emit("sendNotification", {
                    notifiable_id: response.notification.notifiable_id,
                    message: response.notification,
                });
                console.log("hideeeeeeee");
                $('#inviteJob').modal('hide');
                notify.show("success", "Success! Invitation Sent Successfully");
                setTimeout(function () {
                    location.href = response.url;
                }, 500);
            }
        },error(err){
            console.log("error"+err);
        }
    });
});

$('.dashboard-user-postings.blank_posting .user_post').last().addClass('border-0');
$('.user_post_content .user_post').last().addClass('border-0');
$('.dashboard-user-postings .user_post').last().addClass('border-0');