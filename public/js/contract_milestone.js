$(document).ready(function(){
    // Toggle the divs on edit button
    $(".mile_edit").hide();
    $('.milestone_edit_btn').click(function(){
        var toggleDivs = $(this).closest('.milestone_head').find('.mile_edit, .milestone_new');
        toggleDivs.toggle(200);
        $(this).closest('.milestone_head').find('.milestone_edit_btn,.milestone_delete').addClass('d-none');
    });
    $('.close_editMile').click(function(){
        var cancelDiv = $(this).closest('.milestone_head').find('.mile_edit, .milestone_new');
        cancelDiv.toggle(200);
        $(this).closest('.milestone_head').find('.milestone_edit_btn,.milestone_delete').removeClass('d-none');
    });
    
    // update button action 
    $('.update_milestones').on('click',function(){
        var milestoneId = $(this).attr('data-milestoneId');
        var milestoneAmount = $('#update_amount_'+milestoneId).val();
        var toggleDivs2 = $(this).closest('.milestone_head').find('.mile_edit, .milestone_new');
        var editBack = $(this).closest('.milestone_head').find('.milestone_edit_btn,.milestone_delete');
        var spinner = $(this).closest('.milestone_head').find('.update_spinner');
        var updated_val = $(this).closest('.milestone_head').find('.updated_val');
        spinner.removeClass('d-none');
        jQuery.ajax({
            type: "post",
            dataType : "json",
            url: '/client/update_milestone',
            data : {milestoneAmount:milestoneAmount,milestoneId:milestoneId},
            success: async function(response){
                notify.setup({
                    title: true,
                    icon: true,
                    timeout: "3000",
                    position: "right",
                });
                notify.show("success", "Amount Updated");
                if (milestoneAmount === '') {
                milestoneAmount = '0.00'; 
                } else {
                milestoneAmount = parseFloat(milestoneAmount).toFixed(2);
                }
                $(updated_val).text('$' + milestoneAmount);
                toggleDivs2.toggle(200);
                editBack.removeClass('d-none');
                spinner.addClass('d-none');
            },
            error: function(error) {
                Swal.fire({
                    icon: 'error',
                    text: error,
                    showCancelButton: true,
                    showConfirmButton: false,
                });
            }
        });
    });
    $('.milestone_delete').on('click',function(){
        var milestoneId = $(this).attr('data-id');
            Swal.fire({
            text: "Are you sure ! you want to delete this milestone",
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'COnfirm'
        }).then((result) => {
            if (result.isConfirmed) {
                jQuery.ajax({
                    type: "post",
                    dataType : "json",
                    url: '/client/delete_milestone',
                    data : {milestoneId:milestoneId},
                    success: async function(response){
                        notify.setup({
                            title: true,
                            icon: true,
                            timeout: "3000",
                            position: "right",
                        });
                        notify.show("success", "Milestone Deleted"); 
                    },
                    error: function(error) {
                        Swal.fire({
                            icon: 'error',
                            text: error,
                            showCancelButton: true,
                            showConfirmButton: false,
                        });
                    }
                });
            }
        });
    })
});
