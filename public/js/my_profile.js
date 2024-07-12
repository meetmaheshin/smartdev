
getSkills(specialityId);
$('#speciality').on('change', function(e) {
    var specialityId = $('#speciality').val();
    $('.development_group_selector').html('');
    $('.selected_specialized_skills').html('');

    getSkills(specialityId);
});


// project preference
$('select[name="project_preference"]').on("change", function () {
    $(".user_project_preference .loader").show();
    $('#project_preference').attr('disabled','disabled')
    var project_preference = $(this).val();
    $.ajax({
        type: "POST",
        url: "/freelancer/profile-preference",
        data: {
            _token: $("#_token").val(),
            project_preference: project_preference,
        },
        success: function (response) {
            setTimeout(function () {
                $(".user_project_preference .loader").hide();
                $('#project_preference').removeAttr('disabled')
            }, 1000);
        },
    });
});

// Experience level
jQuery(".user_profile_setting_block .btn_box").click(function () {
    var experience_level = jQuery(this).find("input").val();
    var project_preference = $("#project_preference :selected").val();
    jQuery(this).parents(".experience_btn_block").find(".loader").show();
    jQuery(this).parents(".experience_btn_box").css("opacity", "0.1");
    $.ajax({
        type: "POST",
        url: "/freelancer/profile-preference",
        data: {
            _token: $("#_token").val(),
            experience_level: experience_level,
            project_preference: project_preference,
        },
        success: function (response) {
            console.log(response);
            setTimeout(function () {
                jQuery(".experience_btn_box").css("opacity", "1");
                jQuery(".experience_btn_block .loader").hide();
            }, 1500);
        },
    });
});

// Add Categories
$(document).on("click", ".test_checkbox", function () {
    var skillName = $(this).attr("data-cy");
    var skillId = $(this).attr("id");
    var category_id = $(this).attr("data-category_id");
    console.log("cat" + category_id);
    var html = "";
    var html =
        '<div data-category-id="' +
        category_id +
        '" id="selected_skills_sub_' +
        skillId +
        '">\
                        <input type="hidden" name="skill_id[]" value="' +
        skillId +
        '">\
                        <span class="posting_add_feature font_12 font_weight_500 color_grey px-3 py-2 d-inline-block skill_sub"  data-id ="' +
        skillId +
        '">' +
        skillName +
        '\
            <i id= "abc_' +
        skillId +
        '"  class=" fas fa-solid fa-times"></i></span></div>';
    let isChecked = $(this).prop("checked");
    let checkbocValue = $(this).val();
    if (isChecked == false) {
        jQuery("#selected_skills_sub_check_id_" + checkbocValue).remove();
    } else {
        $(".selected_skills").append(html);
    }
});

jQuery(document).on("click", ".posting_add_feature .fa-times", function () {
    jQuery(this).parent(".posting_add_feature").remove();
    var posting_data_ID = jQuery(this)
        .parent(".posting_add_feature")
        .attr("data-id");
    console.log(posting_data_ID);
    jQuery("#" + posting_data_ID).prop("checked", false);
});

// save categories
$("#add_categories").on("click", function (e) {
    e.preventDefault();
    var specialities = [];
    $(":checkbox:checked").each(function (i) {
        specialities.push($(this).val());
    });
    console.log(specialities);
    $.ajax({
        type: "POST",
        url: "/freelancer/profile-category",
        data: {
            _token: $("#_token").val(),
            specialities: specialities,
        },
        success: function (response) {
            console.log(response);
            location.reload();
        },
        error(error) {
            console.log(error);
            let errors = error.responseJSON.errors;
            for (let key in errors) {
                let errorDiv = $(`.error[data-error="${key}"]`);
                if (errorDiv.length) {
                    errorDiv.text(errors[key][0]);
                }
            }
        },
    });
});

// Specialized profiles JS Start

// Step -1 Selecte Skills
$(document).on("click", ".specialized_skills", function () {
    var skillName = $(this).children("span").attr("data-cy");
    var skillId = $(this).children("span").attr("data-id");
    var speciality_id = $(this).children("span").attr("data-skill");

    var html =
        '<span "' +
        '" class="posting_remove_feature font_12 font_weight_500 color_grey px-3 py-2 d-inline-block skill_sub"\
                     data-speciality-id="' +
        speciality_id +
        '"  data-id ="' +
        skillId +
        '">' +
        skillName +
        '\
            <i class="fas fa-solid fa-times cursor_pointer"></i></span>';
    $(".selected_specialized_skills").append(html);
    $(".skill_subcat_" + skillId).css({
        "background-color": "green",
        color: "white",
        "pointer-events": "none",
    });
});

// remove skills
$(document).on("click", ".posting_remove_feature .fa-times", function () {
    var skillId = $(this).parent(".posting_remove_feature").attr("data-id");
    console.log(skillId);
    $(".skill_subcat_" + skillId).css({
        "background-color": "#e4ebe4",
        color: "black",
        "pointer-events": "initial",
    });
    $(this).parent(".posting_remove_feature").remove();
    $("#main_skill_subcat_" + skillId).removeClass("checked_skillId");
});

// save skills
$("#save_skill").click(function (e) {
    var skillIds = [];
    var speId = $("#speciality_id_profile").val();
    var speciality_id_hidden = $("#speciality_id").val();

    $.each($(".posting_remove_feature"), function () {
        skillIds.push($(this).attr("data-id"));
    });

    $.ajax({
        type: "POST",
        url: "/freelancer/specialized-profiles",
        data: {
            _token: $("#_token").val(),
            skillIds: skillIds,
            specialityId: speId,
            speciality_id_hidden:speciality_id_hidden
        },
        success: function (response) {
            console.log(response);
            location.reload();

        },
        error(error) {
            console.log(error);
            let errors = error.responseJSON.errors;
            for (let key in errors) {
                let errorDiv = $(`.error[data-error="${key}"]`);
                if (errorDiv.length) {
                    errorDiv.text(errors[key][0]);
                }
            }
        },
    });
});

$('.specialized_profile_modal').on('click',function(e){
    e.preventDefault();
    var id = $(this).attr('data-specialityid');
    $('#speciality [value="'+id+'"]').attr('selected', 'true');
    // hidden field
    $('#speciality_id').val(id);
    // end
    $('#speciality').val(id);
    $('#addspecializedpopup').modal('show');


});
// $('#addspecializedpopup').on('hidden.bs.modal', function (){
//     console.log("VLSOE");
//     location.reload();
// }); 

  function getSkills(specialityId) {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });
    $.ajax({
        url: "/freelancer/getSkillsByID",
        method: 'POST',
        data: {
            'specialityId': specialityId
        },
        dataType: "json",

        success(response) {
            $('.development_group_selector').append(response.data);
            $('.selected_specialized_skills').append(response.view);

        },

    });
}