$('.seeoffer').click(function(){
    var projectId = $(this).attr('data-id');
    $.ajax({
        type: "POST",
        url: "/freelancer/offer-accept-detail",
        data: {
            'projectId' : projectId
        },
        success: function (response) {
            if(response.status == true){
                const projectSkill = $('#project_skills').empty();
                const milestone = $('#milestone').empty();
                const level = response.data.level.charAt(0).toUpperCase() + response.data.level.slice(1);
                const duration = response.data.duration;
                if (duration == "more_than_6") {
                    var Duration = "More Than 6";
                } else if (duration == "month_3_to_6") {
                    var Duration = "Month 3 to 6";
                } else if (duration == "month_1_to_3") {
                    var Duration = "Month 1 to 3";
                } else if (duration == "less_1") {
                    var Duration = "Less than a month";
                }

                $('#modal_title').html(response.data.title);
                $('#modal_specialities').html(response.data.categories.title);
                $('#modal_description').html(response.data.description);
                $('#contract_title').html('Contract: ' +response.data.client_hire[0].contract_title);
                $('#contract_description').html(response.data.client_hire[0].contract_description);
                $("#modal_level").html(level + " Level");
                $('#modal_duration').html(Duration);
                $('#job_accept_btn, #job_decline_btn').attr('data-id',response.hire[0].id);
                $('#job_accept_btn, #job_decline_btn').attr('data-project-id',projectId);


                $.each(response.data.project_skill, function (key, value) {
                    var skill = '<a href="javascript:void(0)" class="up_skill">'+value.skill.skills_sub +'</a>';
                    projectSkill.append(skill);
                });
                if(response.data.client_hire[0].milestone != ''){
                    $.each(response.data.client_hire[0].milestone, function (key, value) {
                        var milestoneContract = 
                        '<tr>'+
                            '<th scope="row">'+ ++key +'</th>'+
                            '<td colspan="2">'+value.description+'</td>'+
                            '<td class="text-end font_weight_600">$'+value.deposit_amount +'</td>'+
                        '</tr>';
                        milestone.append(milestoneContract);
                    });
                }
                
            }
        }
    });
});
$(document).on("click","#job_accept_btn,#job_decline_btn",function (e) {
    e.preventDefault();
    var hireId = $(this).attr('data-id');
    var status = $(this).attr('data-status')
    $.ajax({
        type: "POST",
        url: "/freelancer/offer-accepted",
        data: {
            'hireId' : hireId,'status':status
        },
        success: (response) => response.status==true ? location.reload() : console.log(response),
        error: (error) => console.log(error)
    });
});

$('.finished').on('click',function (e) {
    e.preventDefault();
    var hireId = $(this).attr('data-id');
    swal.fire({
        title: "Are you sure?",
        text: "You want to finish the work",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Yes!",
        closeOnConfirm: false,
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: "/freelancer/contract-finshed",
                type: "POST",
                data: {
                    id: hireId,
                },
                dataType: "json",
                success: function (response) {
                    socket.emit("sendNotification", {
                        notifiable_id: response.notification.notifiable_id,
                        message: response.notification,
                    });
                    swal.fire("Saved!", "", "success");
                    location.reload();
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    swal.fire("Error deleting!!", "Please try again", "error");
                },
            });
        } else {
            swal.fire("Changes are not saved", "", "info");
        }
    });
});
$('.invite_row .row').last().addClass('border-0');
$('.accept_row .row').last().addClass('border-0');