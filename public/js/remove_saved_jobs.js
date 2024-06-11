$('.job_saved_btn').click(function(e){
    e.preventDefault();
    var savedId = $(this).find("#job_save_btn_id").val();
    var blankDiv = "<div class='job_blank_item_body d-flex justify-content-center align-items-center'><p class='color_green font_22 font_weight_500 m-0 p-4'>Keep track of jobs you're interested in. Select the heart icon on a job post to save it for later.</p></div>"
    $.ajax({
        url: "/freelancer/remove-saved-jobs",
        type: "post",
        data: {
            'savedId': savedId,
        },
        dataType: "json",
        success: function (response) {
            console.log(response);
            $('#count_jobs').html(response.countJobs);
            $('.saved_job_ids_'+savedId).remove();
            if(response.countJobs == 0){
                $('.job_saved_item_header').append(blankDiv);
                $('#nav-save-tab span').hide();
            }
        },
    });
});