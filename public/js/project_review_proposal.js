jQuery(document).on(
    "click",
    ".review_application .proposal_item",
    function (event) {
        event.stopPropagation();
        if (jQuery(".proposal_user_content").hasClass("dismiss")) {
            jQuery(".proposal_user_content")
                .removeClass("dismiss")
                .addClass("selected")
                .show();
            jQuery("body").addClass("show_proposal_popup");
        }
    }
);

$('#budget').on('input', function() {
    var inputVal = $(this).val(); // Get the value of the input field
    if (inputVal === '') {
      inputVal = '0.00'; // If the input field is empty, set the input value to '0.00'
    } else {
      inputVal = parseFloat(inputVal).toFixed(2); // Otherwise, format the input value to two decimal places
    }
    $('#fixed_price_show').text(inputVal);
});

$('input[name="fixedType"]').on('change', function() {
    if ($(this).val() === '1') {
      $('.hide_milestones').addClass('d-none'); // Remove the "d-none" class from the div if option 1 is selected
    } else {
      $('.hide_milestones').removeClass('d-none'); // Otherwise, add the "d-none" class to the div
    }
});

function close_proposal_item() {
    if (jQuery(".proposal_user_content").hasClass("selected")) {
        jQuery(".proposal_user_content")
            .removeClass("selected")
            .addClass("dismiss")
            .hide();
        jQuery("body").removeClass("show_proposal_popup");
    }
}
jQuery(".proposal_user_popoup_bg").click(function () {
    close_proposal_item();
});
jQuery(".proposal_user_content .proposal_user_header i").click(function () {
    close_proposal_item();
});
jQuery(".proposal_item .proposal_user_btn a ").click(function (event) {
    event.stopPropagation();
});
jQuery(".proposal_item .proposal_user_btn button").click(function (event) {
    event.stopPropagation();
});
jQuery(".proposal_item .hire_job a").click(function (event) {
    event.stopPropagation();
});
// show freelancer complete proposal
jQuery(document).on(
    "click",
    ".review_application .proposal_item",
    function (event) {
        var proposalId = $(this).attr("data-id");
        $.ajax({
            url: "/client/freelancer-proposal",
            method: "GET",
            data: {
                proposalId: proposalId,
            },
            success(response) {
                if (response.status == "true") {
                    $('#attachment').html('');
                    $('#all_freelancer_skills').html('');
                    $("#education-list").html('');
                    $(".freelancerExperiencedetail").html('');
                    var time = $.timeago(response.data.created_at);
                    var firstName = response.data.users.firstname;
                    var lastName = response.data.users.lastname;
                    var coverLetter = response.data.cover_letter;
                    
                    if(response.data.freelancer_rate != null){
                        var hourlyRate = "$" + response.data.freelancer_rate.hourly_rate + "/hr";
                    }
                    if(response.data.freelancer_profile != null){

                        var fullTitle =
                            response.data.freelancer_profile.title +
                            ", " +
                            response.data.users.country.name +
                            " - " +
                            time;
                    }
                    var projectTitle = response.data.projects.title;

                    var freelancerName = firstName + " " + lastName;
                    var freelancerEducation = response.data.freelancer_education;
                    if(freelancerEducation != ''){
                        $('#education_title').html('Education');
                        var educationAppedData = '<li class="mb-2">\
                           <div>\
                            <h5 class="font_16 color_black font_weight_500 mb-0" id="school">\
                            </h5>\
                            <div class="font_14 color_black" id="degree"></div>\
                            <div class="font_14 color_grey" id="start_end_date"></div>\
                            </div>\
                        </li>';
                        $('#education-list').html(educationAppedData);
                        $.each(freelancerEducation, function(key, value) {
                            $('#education-list').find('#school').html(value.school);
                            $('#education-list').find('#degree').html(value.degree);
                            var start_end_date = value.start_date+'-'+value.end_date;
                            $('#education-list').find('#start_end_date').html(start_end_date);
                        });
                    }else{
                        $('#education_title').html('');
                        $('#education-list').html('');
                    }
                    var freelancerSkills = response.data.freelancer_skills;
                    $.each(freelancerSkills, function(key, value) {
                        var skillSpan = '<span>'+value.skill.skills_sub +'</span>';
                        $('#all_freelancer_skills').append(skillSpan);
                    });
                    $("#freelancer_name").html(freelancerName);
                    $("#fullTitle").html(fullTitle);
                    $("#hourly_rate").html(hourlyRate);
                    $("#cover_letter").html(coverLetter);
                    if (response.data.attachments.length != 0) {
                        var sel1 = $('<ul class="list-unstyled">');
                        $.each(response.data.attachments, function (key, value) {
                            var filename = value.attachment.split('/').pop();

                            sel1.append(
                                '<li><div class="up-icon d-flex" data-test="up-c-icon"><i class="fas fa-paperclip color_green me-2 font_12"></i><a href="/'+value.attachment+'" target="_blank">' +
                                filename +
                                    "</a></div></li>"
                            );
                        });
                        $("#attachment").append(sel1);
                    }else{
                        $("#attachment").append('No Files');

                    }


                    $("#applicant").html(
                        firstName +
                            " has applied to or been invited to your or your company's job"
                    );
                    $("#projectName").html(projectTitle);
                    $("#freelancer_hours").html('More than '+response.data.freelancer_rate.hourly_rate+' hrs/week');
                    $("#freelancer_title_detail").html(response.data.freelancer_profile.title);
                    $("#freelancer_bio_detail").html(response.data.freelancer_profile.bio);

                    if (response.data.freelancer_experience.length!= 0) {
                        var sel2 ='';
                        $.each(response.data.freelancer_experience, function (key, value) {
                            if(value.end_date == '' || value.end_date == null){
                                var end_date = 'Present'
                            }else{
                                var end_date = value.end_date
                            }
                            sel2 +=
                                '<div class="mt-3"><h6 class="font_weight_600">'+value.title+' | ' +value.company+'</h6><p class="text-muted font_12 mb-0">'+value.start_date+' - '+end_date+'</p></div>';``
                        });  
                        $(".freelancerExperiencedetail").append(sel2);
                    }else{
                        $(".freelancerExperiencedetail").append('No Data Found');
                    }
                    
                }
            },
        });
    }
);
setTimeout(function () {
    var $elements = jQuery(".popover-icon");
    $elements.each(function () {
        var $element = $(this);
        $element.popover({
            html: true,
            placement: "top",
            container: $element,
            content: function () {
                var content = $(this).attr("data-popover-content");
                return $(content).html();
            },
            trigger: "hover",
            offset: "1",
            fallbackPlacement: "flip",
        });
    });
}, 1000);
$(document).on("click", ".popover-header i", function (e) {
    e.stopPropagation();
    $(".popover-icon").popover("hide");
});

$(".invite_to_job").click(function (e) {
    e.preventDefault();
    var userId = $(this).attr("data-user_id");
    var url = $(this).attr("data-url");
    var projectId = $(this).attr("data-project_id");
    $.ajax({
        url: url,
        method: "GET",
        data: { userId: userId, url: url, projectId: projectId },
        dataType: "json",
        success(response) {
            console.log(response.data);
            console.log(response.project);
            if (response.status == "true") {
                var options = new Array();
                $("#user_id").val(response.data.id);
                $("#project_id").val(projectId);

                $("#user_title").html(response.data.firstname);
                $.each(response.data.freelancer_skills, function (key, value) {
                    options.push(value.skill.skills_sub);
                });
                $("#user_skill").append(options.join("|"));
                var message =
                    "Hello!" +
                    "\n" +
                    "I'd like to invite you to take a look at the job I've posted. Please submit a proposal if you're available and interested." +
                    "\n" +
                    "\n" +
                    response.project.firstname;

                $("#message").html(message);
                if (response.data.profile_photo_path != null) {
                    var image =
                        base_url + "/storage/thumbnail/client_profile/" + response.data.profile_photo_path;
                    $("#user_image").attr("src", image);
                }
            }
        },
        error(error) {
            console.log(error);
        },
    });

    // $("#inviteJob").modal("show");
});
// Define variables to hold the selectors for the labels and inputs
var $contactLabel = $(".contact_label");
var $contactLabelInput = $(".contact_label_input");
var $workDescription = $(".work_description");
var $workDescriptionInput = $(".work_description_input");

// Use event delegation to handle click events on parent container
$(document).on("click", ".contact_label, .work_description", function() {
    var $this = $(this); // Get the clicked element

    // Determine which element was clicked and toggle the corresponding label and input
    if ($this.is($contactLabel)) {
        $contactLabel.hide();
        $contactLabelInput.show();
    } else if ($this.is($workDescription)) {
        $workDescription.hide();
        $workDescriptionInput.show();
    }
});

$(document).ready(function() {
    $(function() {
        // Initialize datepicker on page load
        $(".mile_datepicker").datepicker({
            autoclose: true, 
            todayHighlight: true,
            startDate: new Date()
        }).datepicker('update', new Date());

        // Attach click event handler to open the datepicker
        $(document).on("click", ".mile_datepicker", function () {
            $(this).datepicker("show");
        });
    });

    //add milestone functionality 
    var i=0; 
    $("#add_milestone").click(function(){
        i++;  
        var count=$('.newrow').length + 1;
        var errorcount = $('.newrow').length ;
        $("#multi_mile").append(
        '<div class="row mb-2 newrow" id="row'+count+'">'+
            '<div class="col-lg-6">'+
                '<label for="milestone_description" class="col-form-label font_weight_600">Milestone Description <span class="asterisk">*</span></label>'+
                    '<div class="input-group mb-3">'+
                    '<span class="input-group-text count" id="basic-addon'+count+'">'+count+'</span>'+
                        '<input type="text" class="form-control" name="milestone_description[]" placeholder="What is the task ?">'+
                        '</div><div class="text-danger error" data-error="milestone_description.'+errorcount+'"></div></div>'+
            '<div class="col-md-6 col-lg-3 col-12">'+
                '<div class="mb-3">'+
                    '<label for="due_date" class="col-form-label font_weight_600">Due Date</label>'+
                    '<div class="input-group date" id="due_datepicker'+count+'">'+
                    '<input type="text" name="due_date[]"  placeholder="mm-dd-yyyy" class="form-control date mile_datepicker bg-transparent cursor_pointer" readonly />'+
                    '<span class="input-group-append position-absolute top-0 end-0">'+
                        '<span class="input-group-text bg-light d-block">'+
                            '<i class="fa fa-calendar"></i>'+
                        '</span>'+
                        '</span>'+
                        '</div>'+
                '<div class="text-danger error" data-error="due_date"></div>'+
                '</div></div>'+
                '<div class="col-md-6 col-lg-3 col-12">'+
                    '<label for="deposit_amount" class="col-form-label font_weight_600">Deposit Amount <span class="asterisk">*</span></label>'+
                    '<div class="main_rate depo_amount d-flex align-items-center text-end position-relative">'+
                    '<i class="fas fa-dollar-sign me-2"></i>'+
                    '<input class="text-end" placeholder="0.00" type="number" name="deposit_amount[]" value="">'+
                    '<button type="button" class="delete_mile font_weight_600 bg-transparent color_green border-0 ms-2" id="'+count+'"><i class="fas fa-times"></i></button>'+
                '</div><div class="text-danger error" data-error="deposit_amount.'+errorcount+'"></div></div></div>'+
        '</div></div>');
         $(".mile_datepicker").datepicker({
            autoclose: true, 
            todayHighlight: true,
            startDate: new Date()
        });
    });
});
//  milestone creation and deletion optimized version 
$(document).on('click', '.delete_mile', function() {
    var buttonId = $(this).attr("id");
    var $row = $('#row' + buttonId);
    if ($row.next().length) {
        var updateRow = $row.next().find('.count').text();
        console.log("updateRow: " + updateRow);
        $row.remove();
        check(updateRow);
    } else {
        console.log("else condition");
        $row.remove();
    }
});

function check(updateRow) {
    var $obj = $('.newrow span.count');
    var newId = updateRow; 
    updateRow--;
    $obj.each(function() {
        var id = this.id;
        if (id === "basic-addon" + newId) {
            var $basicId = $('#' + id);
            $basicId.html(updateRow);
            $basicId.attr('id', 'basic-addon' + updateRow);
            $('#row' + newId).attr('id', 'row' + updateRow);
            $('#' + newId + '.delete_mile').attr('id', updateRow);
            updateRow++;
            newId++;
        }
    });
}
$('#send_offer').on('submit', function(e) {
    e.preventDefault(); 
    var formID = $(this).closest("form").attr("id");
    var formData = new FormData($("#" + formID)[0]);
    $.ajax({
        type: $(this).attr("method"),
        url: $(this).attr("action"),
        data: formData,
        dataType: "json",
        processData: false,
        contentType: false,
        beforeSend: function () {
            $("#offer_submit_form").prop("disabled", true);
            $(".loading").removeClass("d-none");
        },
        success: function( response ) {
           if(response.status == true){
                location.href = response.url;
           }else{
                Swal.fire({
                    icon: 'error',
                    text: 'Something went wrong',
                    showCancelButton: true,
                    showConfirmButton: false,
              });
              return false;
           }
        },
        error(error) {
            $(".error").text("");
            let errors = error.responseJSON.errors;
            for (let key in errors) {
                let errorDiv = $(`.error[data-error="${key}"]`);
                if (errorDiv.length) {
                    errorDiv.text(errors[key][0]);
                }
                let errorfrom = $(`.form-control[data-name="${key}"]`);
                if (errorfrom.length) {
                    errorfrom.addClass("is-invalid");
                }
            }
            $("#offer_submit_form").prop("disabled", false);
            $(".loading").addClass("d-none");
        },
    });
});

