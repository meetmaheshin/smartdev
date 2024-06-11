$('.contract_details').on('click' , function (){
    var projectId = $(this).attr("data-project-id");

    $.ajax({
        type: "POST",
        url: "/client/show-contract-details",
        data: {
            'projectId' : projectId
        },
        success: function (response) {
            if(response.status == true){
                var projectSkill = $('.job_skills').html('');
                $('#modal_title').html(response.data.title);
                $('#modal_specialities').html(response.data.categories.title);
                $('#modal_description').html(response.data.description);
                $('#modal_budget').html(response.data.budget);
    
                var budget = response.data.budget;
                if (budget == "project") {
                    $("#modal_price").html("$" + response.data.project_budget);
                } else {
                    $("#modal_price").html("$" + response.data.hourly_from);
                }
                
                var level = response.data.level.charAt(0).toUpperCase() + response.data.level.slice(1);
                $("#modal_level").html(level + " Level");
    
                var duration = response.data.duration;
                if (duration == "more_than_6") {
                    var Duration = "More Than 6";
                } else if (duration == "month_3_to_6") {
                    var Duration = "Month 3 to 6";
                } else if (duration == "month_1_to_3") {
                    var Duration = "Month 1 to 3";
                } else if (duration == "less_1") {
                    var Duration = "Less than a month";
                }
                $('#modal_duration').html(Duration);
                $.each(response.data.project_skill, function (key, value) {
                    var skill = '<a href="#" class="px-2">'+value.skill.skills_sub +'</a>';
                    projectSkill.append(skill);
                });
            }
        }
    });
});
