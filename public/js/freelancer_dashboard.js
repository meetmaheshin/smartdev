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
    $("#job_apply_btn").removeAttr("disabled").text("Apply");
    $(".job_skills").html("");
    $('.job_attachments').html('');
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
                $('#client_state').html(response.data.user.states.name);
                $('#project_count').html(response.project_count);
                $('#timezone').html(response.timezone);
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
                            response.data.title
                        );
                        $("#show_prev_company_" + response.data.id).text(
                            response.data.company
                        );
                        $("#show_prev_location_" + response.data.id).text(
                            response.data.location
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

