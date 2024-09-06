// previewImage
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



// add new row
$(document).ready(function () {
    let rowIndex = 0;
    let isEditing = false;
    let currentRow;

    // Open modal for adding new experience
    $('#addRowBtn').on('click', function () {
        isEditing = false;
        // $('#editTitle').val('');
        // $('#editDescription').val('');
        $('#editModal').modal('show');
    });

    $('#addEduRowBtn').on('click', function () {
        isEditing = false;
        $('#educationModal').modal('show');
    });
    
    // Edit experience row button click event
    $(document).on('click', '.editRowBtn', function () {
        isEditing = true;
        currentRow = $(this).closest('tr');
        $('#editModal').modal('show');
    });

    // Edit experience row button click event
    $(document).on('click', '.addEduRowBtn', function () {
        isEditing = true;
        currentRow = $(this).closest('tr');
        $('#educationModal').modal('show');
    });
});


$(document).on("click", ".showDataExp", function (e) {
    e.preventDefault();

    var entry = this.getAttribute("data-id");
    getExpData(entry);
});


function getExpData(entryId) {
    $(".error").html("");
    $("#editModalLabel").html("Edit Work Experience");
    $.ajax({
        url: "/create-profile/getexperienceData/" + entryId,
        type: "get",
        dataType: "json",
        success: function (response) {
            console.log(response[0].id);
            if (response.length == 0) {
                console.log("Datensatz-ID nicht gefunden.");
            } else {
                // set values
                $("#hiddenId").val(response[0].id);
                $("#expTitle").val(response[0].title);
                $("#company").val(response[0].company);
                $("#description").val(response[0].description);
                $("#start_date").val(response[0].start_date);
                $("#ExpCountryId").val(response[0].country_id);
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

$(document).on("click", ".showDataEdu", function (e) {
    e.preventDefault();
    var entry = this.getAttribute("data-id");
    getEduData(entry);
});

function getEduData(entryId) {
    $("#educationModalLabel").html("Edit Education History");
    $.ajax({
        url: "/create-profile/geteducationData/" + entryId,
        type: "get",
        dataType: "json",
        success: function (response) {
            if (response.length == 0) {
                console.log("Datensatz-ID nicht gefunden.");
            } else {
                // set values
                $("#hiddenEduId").val(response[0].id);
                $("#school").val(response[0].school);
                $("#degree").val(response[0].degree);
                $("#fieldOfStudy").val(response[0].fieldOfStudy);
                $("#start_year").val(response[0].start_date);
                $("#end_year").val(response[0].end_date);
                $("#educationDescription").val(response[0].description);
            }
        },
    });
}




jQuery(function() {
    jQuery('#start_datepicker').datepicker();
    jQuery('#end_datepicker').datepicker();
    // education year's date-picker
    $("#start_year_datepicker").datepicker({
        format: "yyyy",
        viewMode: "years",
        minViewMode: "years",
    });
    $("#end_year_datepicker").datepicker({
        format: "yyyy",
        viewMode: "years",
        minViewMode: "years",
    });
});
jQuery(function() {
    jQuery('[name="end_date_check"]').change(function() {
        if (jQuery(this).is(':checked')) {
            jQuery(".end_date_input").hide();
        } else if (!jQuery(this).is(':checked')) {
            jQuery(".end_date_input").show();
        };
    });
});


// save data of the model
$("#experienceForm,#educationForm").on("submit", function (e) {
    e.preventDefault();
    $(".error").text("");
    var formID = $(this).closest("form").attr("id");
    var hiddenId = $("#hiddenId").val();
    var hiddenEduId = $("#hiddenEduId").val();
    var formData = new FormData($("#" + formID)[0]);
    // Add the user_id variable to formData
    var user_id = $("#user_id").val();
    console.log($(this).attr("action"));
    formData.append("user_id", user_id);
    $.ajax({
        url: $(this).attr("action"),
        method: $(this).attr("method"),
        data: formData,
        dataType: "json",
        processData: false,
        contentType: false,
        success(response) {
            if (response.status == "true") {
                jQuery(".btn-close").trigger("click");
                if (formID === "experienceForm") {
                    if (hiddenId === "") {
                        // Adding a new row
                        let rowHtml = `
                            <tr>
                                <td class="title">${response.data.title}</td>
                                <td class="description">${response.data.description}</td>
                                <td>
                                    <button type="button" class="btn btn-sm editRowBtn showDataExp" data-id="${response.data.id}">
                                        <i class="fas fa-pen"></i>
                                    </button>
                                    <button type="button" class="btn btn-sm deleteRowBtn delete-confirm" data-id="${response.data.id}" action="{{route('deleteExperience')}}">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        `;

                        // Append the new row to the table body
                        $("#rowContainer").append(rowHtml);
                    } else {
                        // Updating an existing row
                        let updatedRow = `
                            <td class="title">${response.data.title}</td>
                            <td class="description">${response.data.description}</td>
                            <td>
                                <button type="button" class="btn btn-sm editRowBtn showDataExp" data-id="${response.data.id}">
                                    <i class="fas fa-pen"></i>
                                </button>
                                <button type="button" class="btn btn-sm deleteRowBtn delete-confirm" data-id="${response.data.id}" action="{{route('deleteExperience')}}">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </td>
                        `;

                        // Find and replace the row with the matching hiddenId
                        $("#rowContainer tr").each(function () {
                            if ($(this).find(".editRowBtn").data("id") === parseInt(hiddenId)) {
                                $(this).html(updatedRow);
                                return false; // Exit loop once the row is found and updated
                            }
                        });
                    }
                }
                else if (formID === "educationForm") {
                    if (hiddenEduId === "") {
                        // Adding a new row
                        let rowHtml = `
                            <tr>
                                <td class="title">${response.data.school}</td>
                                <td class="description">${response.data.description}</td>
                                <td>
                                    <button type="button" class="btn btn-sm addEduRowBtn showDataEdu" data-id="${response.data.id}">
                                        <i class="fas fa-pen"></i>
                                    </button>
                                    <button type="button" class="btn btn-sm deleteRowBtn delete-confirm" data-id="${response.data.id}" action="{{route('deleteEducation')}}">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        `;

                        // Append the new row to the table body
                        $("#educationRow").append(rowHtml);
                    } else {
                        // Updating an existing row
                        let updatedRow = `
                            <td class="title">${response.data.school}</td>
                            <td class="description">${response.data.description}</td>
                            <td>
                                <button type="button" class="btn btn-sm addEduRowBtn showDataEdu" data-id="${response.data.id}">
                                    <i class="fas fa-pen"></i>
                                </button>
                                <button type="button" class="btn btn-sm deleteRowBtn delete-confirm" data-id="${response.data.id}" action="{{route('deleteEducation')}}">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </td>
                        `;

                        // Find and replace the row with the matching hiddenId
                        $("#educationRow tr").each(function () {
                            if ($(this).find(".addEduRowBtn").data("id") === parseInt(hiddenEduId)) {
                                $(this).html(updatedRow);
                                return false; // Exit loop once the row is found and updated
                            }
                        });
                    }
                }
                else {
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

$(document).ready(function(){
    $("#addRowBtn").on("click", function(){

        $('#editModalLabel').html("Add Work Experience");
        $('#expTitle').val('');
        $("#hiddenId").val('');
        $("#expTitle").val('');
        $("#company").val('');
        $("#description").val('');
        $("#start_date").val('');
        $("#ExpCountryId").val('');
        $("#end_date").val('');
        $("#location").val('');
        $("#end_date_check").prop("checked", false);
        $(".end_date_input").show();
    });
});

$(document).ready(function(){
    $("#addEduRowBtn").on("click", function(){

        $('#educationModalLabel').html("Add Education History");
        $("#hiddenEduId").val('');
        $("#school").val('');
        $("#degree").val('');
        $("#fieldOfStudy").val('');
        $("#start_year").val('');
        $("#end_year").val('');
        $("#educationDescription").val('');
        $("#end_date_check").prop("checked", false);
        $(".end_date_input").show();
    });
});



// delete row functionality
$(document).on("click", ".delete-confirm", function (e) {
    e.preventDefault();
    var postID = $(this).attr("data-id");
    var action = $(this).attr("action");
    var token = $('#csrfToken').val();
    var row = $(this).closest('tr');
    console.log(action);

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
                    _token: token
                },
                dataType: "json",
                success: function (response) {
                    swal.fire(
                        "success!",
                        "Deleted!",
                        "Your eductaion has been deleted."
                    );
                    row.remove();
                    // location.reload();
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

// freelancer skill

document.addEventListener('DOMContentLoaded', function () {
    const selectElement = $('.skills_select');
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
});



// Services section

$(document).on("change", ".service_checkbox", function (e) {
    var specialtyName = $(this).attr("data-cy");
    var specialtyId = $(this).attr("data-speciality-id");
    $('.selected_services p').html('Selected Services');
    if($('input[name="services[]"]:checked').length == 0){
        $('.selected_services p').html('');
    }
    var html =
        '<span class="service_badge remove_services" data-cy="' +
        specialtyName +
        '"  data-speciality-id="' +
        specialtyId +
        '" id="' +
        specialtyId +
        '">' +
        specialtyName +
        '<i class="fas fa-times ms-2"></i></i></span>';
    if ($(this).prop("checked")) {
        $(".selected_services_show").append(html);
    } else {
        var uncheck_value = $(this).val();
        $("#" + uncheck_value).remove();
    }
});

// Remove services
$(document).on("click", ".remove_services .fa-times", function () {
    var checkedService = $(this)
        .parent(".remove_services")
        .attr("data-speciality-id");
    $("#speciality_id_" + checkedService).prop("checked", false);
    $(this).parent(".remove_services").remove();
});

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


// freelancer Rates
$("#hourly_rate").keyup(function(){
    var hourlyRate = parseFloat($(this).val());
    var serviceFee = parseFloat((hourlyRate/100)*20);
    var receiveFee = parseFloat(hourlyRate-serviceFee);
    $('#service_fee').val(serviceFee.toFixed(2));
    $('#receive_fee').val(receiveFee);
});

$("#receive_fee").keyup(function(){
    var receive_fee = parseFloat($(this).val());
    var serviceFee =  parseFloat((receive_fee/100)*25);
    var hourlyRate =   parseFloat(receive_fee + serviceFee);
    $('#hourly_rate').val(hourlyRate);
    $('#service_fee').val(serviceFee.toFixed(2));
});