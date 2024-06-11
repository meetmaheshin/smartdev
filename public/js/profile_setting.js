$(document).ready(function () {
    var current_fs, next_fs, previous_fs; //fieldsets
    var opacity;
    var current = 1;
    var steps = $("fieldset").length;
    console.log(steps)
    setProgressBar(current);
    function nextBlock() {
        //Add Class Active
        $("#progressbar li")
            .eq($("fieldset").index(next_fs))
            .addClass("active");

        //show the next fieldset
        next_fs.show();
        //hide the current fieldset with style
        current_fs.animate(
            { opacity: 0 },
            {
                step: function (now) {
                    // for making fielset appear animation
                    opacity = 1 - now;

                    current_fs.css({
                        display: "none",
                        position: "relative",
                    });
                    next_fs.css({ opacity: opacity });
                },
                duration: 500,
            }
        );
        setProgressBar(++current);
    }
    function backBlock() {
        //Remove class active
        $("#progressbar li")
            .eq($("fieldset").index(current_fs))
            .removeClass("active");

        //show the previous fieldset
        previous_fs.show();

        //hide the current fieldset with style
        current_fs.animate(
            { opacity: 0 },
            {
                step: function (now) {
                    // for making fielset appear animation
                    opacity = 1 - now;

                    current_fs.css({
                        display: "none",
                        position: "relative",
                    });
                    previous_fs.css({ opacity: opacity });
                },
                duration: 500,
            }
        );
        setProgressBar(--current);
    }
    $(".next").click(function () {
        current_fs = $(this).parents("fieldset");
        next_fs = $(this).parents("fieldset").next();
        if (
            current_fs
                .find(".speciality_description")
                .hasClass("speciality_professional_skills")
        ) {
            var title = $("#title").val();
            $.ajax({
                type: "POST",
                url: "/freelancer/title",
                data: {
                    _token: $("#_token").val(),
                    title: title,
                },
                success: function (response) {
                    console.log(response);
                    $(".error").html("");
                    nextBlock();
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
        } else {
            nextBlock();
        }
    });

    $(".previous").click(function () {
        current_fs = $(this).parents("fieldset");
        previous_fs = $(this).parents("fieldset").prev();
        backBlock();
    });

    function setProgressBar(curStep) {
        var percent = parseFloat(100 / steps) * curStep;
        percent = percent.toFixed();
        $(".progress-bar").css("width", percent + "%");
    }
    $(".see_all_btn").click(function (argument) {
        $(".all_specialty").show();
        $(this).hide();
    });
    $(".save_btn").click(function (argument) {
        $("#addspecializedpopup").modal('hide');
    });
    // Edit name details client settings
    $(".client_user_details_edit").hide();
    $(".change_c_details,.details_cancel_btn").on("click", function () {
        if ($("#client-user-file-upload").prop("disabled")) {
            $("#client-user-file-upload").prop("disabled", false);
        } else {
            $("#client-user-file-upload").prop("disabled", true);
        }
        $("#client-user-preview-selected-image").toggleClass(
            "green_edit cursor-pointer"
        );
        $(".client_user_details, .client_user_details_edit").toggle(200);
    });

    // // Edit company details client settings
    $(".client_company_details_edit").hide();
    $(".change_c_company,.company_details_cancel_btn").on("click", function () {
        if ($("#client-company-file-upload").prop("disabled")) {
            $("#client-company-file-upload").prop("disabled", false);
        } else {
            $("#client-company-file-upload").prop("disabled", true);
        }
        $("#client-company-preview-selected-image").toggleClass(
            "green_edit cursor-pointer"
        );
        $(".client_company_details, .client_company_details_edit").toggle(200);
    });

    // // Edit Company contacts client settings
    $(".c_contacts_contacts_edit").hide();
    $(".c_company_contacts,.c_contacts_cancel_btn").on("click", function () {
        console.log("sd");
        $(".client_company_contacts, .c_contacts_contacts_edit").toggle(200);
    });
});

// client user profile pic edit
const clientUserPreviewImage = (event) => {
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
        const clientUserImagePreviewElement = document.querySelector(
            "#client-user-preview-selected-image"
        );
        /**
         * Assign the path to the image preview element.
         */
        clientUserImagePreviewElement.src = imageSrc;
        /**
         * Show the element by changing the display value to "block".
         */
        clientUserImagePreviewElement.style.display = "block";
    }
};
// client company profile pic edit
const clientCompanyPreviewImage = (event) => {
    const companyImageFiles = event.target.files;
    const companyImageFilesLength = companyImageFiles.length;
    if (companyImageFilesLength > 0) {
        const companyImageSrc = URL.createObjectURL(companyImageFiles[0]);
        const clientCompanyImagePreviewElement = document.querySelector(
            "#client-company-preview-selected-image"
        );
        clientCompanyImagePreviewElement.src = companyImageSrc;
        clientCompanyImagePreviewElement.style.display = "block";
    }
};
