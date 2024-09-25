// freelnacer dashboard Popup

$.ajaxSetup({
    headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    },
});
if ($(".window_error_open").length > 0) {
    setTimeout(function(){
        $( ".best_matches_result" ).trigger( "click" );
            $('#sideModal').modal('show'); 
    }, 100)
    
}
$(document).on("click", ".best_matches_result", function (e) {
    e.preventDefault();
    $('#sideModal').modal('show');
    var id = $(this).attr("data-id");
    var title = $(this).attr("data-title");
    var url = $(this).attr('data-action');
    var baseUrl = $('#baseUrl').val();
    $("#job_apply_btn").removeAttr("disabled").text("Apply");
    $(".job_skills").html("");
    $('.job_attachments').html('');
    $('#client_state').html("");
    $('#project_count').html("");
    $('#timezone').html("");
    $.ajax({
        url: url,
        method: "GET",
        data: { id: id, title: title },
        dataType: "json",
        success(response) {
            if (response.response == "true") {
                var time    = response.data.updated_at;
                var budget  = response.data.budget;
                var duration = response.data.duration;
                var saveJob = response.data.save_jobs;
                var level = '';
                if(response.data.level !== null){
                    level = response.data.level.charAt(0).toUpperCase() + response.data.level.slice(1);
                }
                var date = $.timeago(time);
                var budgetType = '';
                var Duration = '';
                var slug = response.data.slug;
               if(budget == 'project'){
                    budgetType = 'Fixed-price';
                    $("#modal_price").html("$" + response.data.project_budget);
                    $("#charged_amount").html(response.data.project_budget);
               }else{
                    budgetType = 'Hourly';
                    $("#modal_price").html("$" + response.data.hourly_from + ".00- $" + response.data.hourly_to+'.00');
                    $("#charged_amount").html(response.data.hourly_from);
               }
               $(".side_job_btn").find(".fa-heart").toggleClass("fa", saveJob != null);
                if (duration == "more_than_6") {
                    Duration = "More Than 6";
                } else if (duration == "month_3_to_6") {
                    Duration = "Month 3 to 6";
                } else if (duration == "month_1_to_3") {
                    Duration = "Month 1 to 3";
                } else if (duration == "less_1") {
                    Duration = "Less than a month";
                }
                $("#modal_title").html(response.data.title);
                $("#modal_specialities").html(response.data.specialities.title);
                $("#modal_time").html(date);
                $("#modal_description").html(response.data.description);
                $("#modal_budget").html(budgetType);
                $("#modal_level").html(level + " Level");
                $("#modal_duration").html(Duration);
                $("#popup_job_save_btn_id").val(id);
                $("#project_id").val(id);
                if (slug && slug.trim() !== "") {
                    $('#jobLink').val(baseUrl + "/freelance-jobs/apply/" + slug);
                    $('.job-link-container').show(); // Show the div if slug is not empty
                } else {
                    $('.job-link-container').hide(); // Hide the div if slug is null or empty
                }
                $("#receiver_id").val(response.data.user_id);

                var sel = $('<p class="up_skill" id="job_skills_data">');
                $.each(response.data.project_skill, function (key, value) {
                    sel.append(
                        '<a href="javascript:void(0)">' +
                            value.skill.skills_sub +
                            "</a>"
                    );
                });
                $(".job_skills").append(sel);

                if (response.status == "true") {
                    $("#job_apply_btn").attr("disabled", response.status).text("Applied");
                }
                $("#job_apply_btn").attr("href", "proposals/job/" + response.data.id);
                var newRoviBalance      = parseFloat(response.userBalance.rovi_balance).toFixed(2); 
                var newSmartdev3Balance = parseFloat(response.userBalance.dev3_balance).toFixed(2); 
                var newUsdtBalance      = parseFloat(response.userBalance.usdt_balance).toFixed(2); 
                $('#available_rovi_user_balance').html(newRoviBalance);
                $('#available_dev3_user_balance').html(newSmartdev3Balance);
                $('#available_usdt_user_balance').html(newUsdtBalance);
                $('#client_name').html(response.data.user.firstname+' '+response.data.user.lastname);
                $('#client_country').html(response.data.user.country.name);
                if(response.data.user.states != null && response.data.user.states.name) {
                    $('#client_state').html(response.data.user.states.name);
                }
                if(response.project_count){
                    $('#project_count').html(response.project_count + " jobs posted");
                }
                if(response.timezone){
                    $('#timezone').html(" - " + response.timezone);
                }
                if (response.data.user.created_at) {
                    $('#member_since').html('Member Since ' + new Date(response.data.user.created_at).toLocaleDateString('en-US', { year: 'numeric', month: 'short', day: 'numeric' }));
                }
                if (response && response.questions && response.questions.length > 0) {
                    var questionsList = $('#questions-list');
                    questionsList.empty(); // Clear any existing content
    
                    $.each(response.questions, function(index, question) {
                        var questionItem = `
                            <li class="py-1">
                                <span class="font_14 color_grey me-1">${index + 1}. </span>
                                <span class="font_14 color_black">${question.question}</span>
                            </li>
                        `;
                        questionsList.append(questionItem);
                    });
    
                    $('#questions-section').show(); // Show the section if there are questions
                } else {
                    $('#questions-section').hide(); // Hide the section if there are no questions
                }
                if (response.data.images.length != 0) {
                    var sel1 = $('<ul class="list-unstyled">');
                    $.each(response.data.images, function (key, value) {
                        sel1.append(
                            '<li><div class="up-icon d-flex" data-test="up-c-icon"><i class="fas fa-paperclip color_green me-2 font_12"></i><a href="/'+value.filename+'" target="_blank">' +
                                value.attachment +
                                "</a></div></li>"
                        );
                    });
                    $(".job_attachments").append(sel1);
                }else{
                    $(".job_attachments").append('No Files');
                }
            }
        },
        error(error) {
            console.log(error);
        },
    });
});

$(document).on("click", ".showDataExp", function (e) {
    e.preventDefault();

    var entry = this.getAttribute("data-id");
    getExpData(entry);
});

$(".experienceModal,.educationModal").on("click", function (e) {
    e.preventDefault();
    $("#educationModalLabel").html("Add Work Experience");
    $("#experienceForm,#educationForm").trigger("reset");
    $("#hiddenId").val('');
    $("#educationModal").modal("show");
});

$(document).on("click", ".showDataEdu", function (e) {

    e.preventDefault();
    var entry = this.getAttribute("data-id");
    getEduData(entry);
});

$("#experienceForm,#educationForm").on("submit", function (e) {
    e.preventDefault();
    $(".error").text("");
    var formID = $(this).closest("form").attr("id");
    var hiddenId = $("#hiddenId").val();
    var formData = new FormData($("#" + formID)[0]);
    $.ajax({
        url: $(this).attr("action"),
        method: $(this).attr("method"),
        data: formData,
        dataType: "json",
        processData: false,
        contentType: false,
        success(response) {
            console.log(response);
            if (response.status == "true") {
                jQuery(".btn-close").trigger("click");
                if (hiddenId != "") {
                    if (formID == "experienceForm") {
                        $("#show_prev_title_" + response.data.id).text(
                            response.data.title.length > 45  ? response.data.title.substring(0, 45) + '...' : response.data.title
                        );
                        $("#show_prev_company_" + response.data.id).text(
                            (response.data.company.length > 40 ? response.data.company.substring(0, 40) + '...' : response.data.company) 
                            + " | " + formatDateToMonthYear(response.data.start_date) 
                            + " - " + formatDateToMonthYear(response.data.end_date)
                        );
                        $("#show_prev_location_" + response.data.id).text(
                            response.data.location + " - " + response.data.country.name
                        );
                    } else {
                        $("#show_prev_title_" + response.data.id).text(
                            response.data.school
                        );
                        $("#show_prev_company_" + response.data.id).text(
                            response.data.degree
                        );
                        $("#show_prev_location_" + response.data.id).text(
                            response.data.fieldOfStudy
                        );
                    }
                } else {
                    $("#show_exp").append(response.view);
                    if ($("#show_exp").find(".showDataExp_data").length !== 0) {
                        $(".nothing_add_btn").css("display", "none");
                        $("#next_education_btn").css({
                            "pointer-events": "initial",
                            background: "#108a00",
                            color: "#fff",
                        });
                    } else {
                        $(".nothing_add_btn").css("display", "block");
                    }
                }
                $("#experienceForm,#educationForm").trigger("reset");
            }
        },
        error(error) {
            console.log(error);
            $(".error").text("");
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

$(document).on("click", ".delete-confirm", function (e) {
    e.preventDefault();
    var postID = $(this).attr("data-id");
    var action = $(this).attr("action");

    swal.fire({
        title: "Are you sure?",
        text: "You want to delete this Education",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Yes, delete it!",
        closeOnConfirm: false,
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: action,
                type: "POST",
                data: {
                    id: postID,
                },
                dataType: "json",
                success: function (response) {
                    swal.fire(
                        "success!",
                        "Deleted!",
                        "Your eductaion has been deleted."
                    );
                    location.reload();
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    swal.fire("Error deleting!!", "Please try again", "error");
                },
            });
        } else if (result.isDenied) {
            swal.fire("Changes are not saved", "", "info");
        }
    });
});

function getExpData(entryId) {
    $(".error").html("");
    $("#educationModalLabel").html("Edit Work Experience");
    $.ajax({
        url: "/create-profile/getexperienceData/" + entryId,
        type: "get",
        dataType: "json",
        success: function (response) {
            if (response.length == 0) {
                console.log("Datensatz-ID nicht gefunden.");
            } else {
                // set values
                $("#hiddenId").val(response[0].id);
                $("#title").val(response[0].title);
                $("#company").val(response[0].company);
                $("#description").val(response[0].description);
                $("#start_date").val(response[0].start_date);
                $("#country").val(response[0].country_id);
                $("#end_date").val(response[0].end_date);
                $("#location").val(response[0].location);
                if (response[0].end_date == "") {
                    $("#end_date_check").prop("checked", true);
                    $(".end_date_input").hide();
                } else {
                    $("#end_date_check").prop("checked", false);
                    $(".end_date_input").show();
                }
            }
        },
    });
}

function getEduData(entryId) {
    $.ajax({
        url: "/create-profile/geteducationData/" + entryId,
        type: "get",
        dataType: "json",
        success: function (response) {
            if (response.length == 0) {
                console.log("Datensatz-ID nicht gefunden.");
            } else {
                // set values
                $("#hiddenId").val(response[0].id);
                $("#school").val(response[0].school);
                $("#degree").val(response[0].degree);
                $("#fieldOfStudy").val(response[0].fieldOfStudy);
                $("#start_year").val(response[0].start_date);
                $("#end_year").val(response[0].end_date);
                $("#description").val(response[0].description);
            }
        },
    });
}
$(document).ready(function () {
    $(".dropdown-item,.drop_inner").hover(
        function () {
            $(this).children(".drop_inner").show();
        },
        function () {
            $(this).children(".drop_inner").hide();
        }
    );

    
});


/**
 * Create an arrow function that will be called when an image is selected.
 */
const previewImage = (event) => {
    /**
     * Get the selected files.
     */
    const imageFiles = event.target.files;
    /**
     * Count the number of files selected.
     */
    const imageFilesLength = imageFiles.length;
    /**
     * If at least one image is selected, then proceed to display the preview.
     */
    if (imageFilesLength > 0) {
        /**
         * Get the image path.
         */
        const imageSrc = URL.createObjectURL(imageFiles[0]);
        /**
         * Select the image preview element.
         */
        const imagePreviewElement = document.querySelector(
            "#preview-selected-image"
        );
        /**
         * Assign the path to the image preview element.
         */
        imagePreviewElement.src = imageSrc;
        /**
         * Show the element by changing the display value to "block".
         */
        imagePreviewElement.style.display = "block";
    }
};



function formatDateToMonthYear(dateString) {
    if(dateString === ""){
        return "Present";
    }
    // Convert the input date string into a Date object
    const date = new Date(dateString);
    
    // Check if the date is valid
    if (isNaN(date)) {
        throw new Error('Invalid date format. Please use MM/DD/YYYY.');
    }

    // Format the date to 'Month YYYY' using Intl.DateTimeFormat
    const formattedDate = new Intl.DateTimeFormat('en-US', { month: 'long', year: 'numeric' }).format(date);
    
    return formattedDate;
}


// freelancer skill

document.addEventListener('DOMContentLoaded', function () {
    const selectElement = $('.skills_select');
    const suggestedSkillsContainer = document.querySelector('.posting_accordion_inner_content');

    // Add suggested skill to the select element
    suggestedSkillsContainer.addEventListener('click', function (e) {
        let skillElement;

        // Check if the clicked element is the icon or the skill span
        if (e.target.classList.contains('fa-plus')) {
            skillElement = e.target.closest('.main_skills');
        } else if (e.target.classList.contains('main_skills')) {
            skillElement = e.target;
        }

        if (skillElement) {
            const skillId = skillElement.getAttribute('data-id');
            const skillText = skillElement.getAttribute('data-cy');

            // Add the skill to the select element
            const option = new Option(skillText, skillId, true, true);
            selectElement.append(option).trigger('change');

            // Remove the skill span from suggested skills
            skillElement.remove();
        }
    });

    // Remove skill from the select element and add it back to suggested skills
    selectElement.on('select2:unselect', function (e) {
        const removedSkillId = e.params.data.id;
        const removedSkillText = e.params.data.text;

        // Re-add skill to the suggested skills container
        const skillSpan = document.createElement('span');
        skillSpan.setAttribute('data-skill', '1');
        skillSpan.setAttribute('class', 'posting_add_feature font_14 font_weight_500 color_grey px-3 py-2 d-inline-block skill_sub main_skills');
        skillSpan.setAttribute('id', `skill_subcat_${removedSkillId}`);
        skillSpan.setAttribute('data-cy', removedSkillText);
        skillSpan.setAttribute('data-id', removedSkillId);
        skillSpan.innerHTML = `${removedSkillText} <i class="fas fa-solid fa-plus"></i>`;

        suggestedSkillsContainer.appendChild(skillSpan);
    });

    // Initialize Select2 without tags creation and filtering selected items
    selectElement.select2({
        tags: false,  // Disable tag creation from search input
        width: '100%',
        placeholder: "Enter skills here",
        // Custom matcher to filter out selected items
        matcher: function(params, data) {
            // Check if the item is already selected
            if (selectElement.val() && selectElement.val().includes(data.id)) {
                return null; // Exclude already selected items
            }

            // Default matcher for search term
            if ($.trim(params.term) === '' || data.text.toLowerCase().indexOf(params.term.toLowerCase()) > -1) {
                return data;
            }

            return null;
        }
    });

    // Handle skill selection from search (removing from suggested if found)
    selectElement.on('select2:select', function (e) {
        const selectedSkillId = e.params.data.id;
        // Find the skill in the suggested section
        const suggestedSkillElement = document.querySelector(`#skill_subcat_${selectedSkillId}`);
        if (suggestedSkillElement) {
            // Remove the skill from the suggested section
            suggestedSkillElement.remove();
        }
    });
});


// Location Form validation function
function LocationValidateForm() {
    let isValid = true;

    // Get form elements
    const country = document.getElementById("country");
    const state = document.getElementById("country_states");
    const city = document.getElementById("country_state_city");
    const street = document.getElementById("streetAdressesWontShowOnProfile");
    const phone = document.getElementById("fornumber");
    const filename = document.getElementById("file-upload");

    // Clear previous errors
    clearErrors();

    // Country validation
    if (country.value === "") {
        document.getElementById("country-error").innerText = "Country is required.";
        isValid = false;
    }

    // State validation
    if (state.value === "") {
        document.getElementById("state-error").innerText = "State is required.";
        isValid = false;
    }

    // City validation
    if (city.value === "") {
        document.getElementById("city-error").innerText = "City is required.";
        isValid = false;
    }

    // Street Address validation
    if (street.value.trim() === "") {
        document.getElementById("street-error").innerText = "Street address is required.";
        isValid = false;
    }

    // Phone validation
    const phonePattern = /^\d{10}$/;
    if (!phonePattern.test(phone.value)) {
        document.getElementById("phone-error").innerText = "Phone must be 10 digits.";
        isValid = false;
    }

    // File validation
    if (filename.files.length > 0) {
        const file = filename.files[0];
        const allowedExtensions = /(\.jpg|\.jpeg|\.png)$/i;
        if (!allowedExtensions.exec(file.name)) {
            document.getElementById("filename-error").innerText = "Only .jpg, .jpeg, .png files are allowed.";
            isValid = false;
        } else if (file.size > 5000000) { // 5MB file size limit
            document.getElementById("filename-error").innerText = "File size must be less than 5MB.";
            isValid = false;
        }
    }
    return isValid;
}

// Clear all error messages
function clearErrors() {
    document.getElementById("country-error").innerText = "";
    document.getElementById("state-error").innerText = "";
    document.getElementById("city-error").innerText = "";
    document.getElementById("street-error").innerText = "";
    document.getElementById("phone-error").innerText = "";
    document.getElementById("filename-error").innerText = "";
}