// $(".edit_account_icon").click(function (e) {
//     e.preventDefault();
//     $(this).parents(".user_contact_block").find(".user_contact_edit").show();
//     $(this).parents(".user_contact_block").find(".user_contact_edited").hide();
//     $(this).removeClass("d-flex").hide();
// });
// $(".user_contact_btn .cancel_btn").click(function (e) {
//     e.preventDefault();
//     $(this).parents(".user_contact_block").find(".user_contact_edit").hide();
//     $(this).parents(".user_contact_block").find(".user_contact_edited").show();
//     $(this)
//         .parents(".user_contact_block")
//         .find(".edit_account_icon")
//         .addClass("d-flex")
//         .show();
// });

$(".user_contact_edit").hide();
$(".fuser_account .edit_account_icon,.fuser_account .cancel_btn").on("click", function () {
    if ($("#freelancer-user-file-upload").prop("disabled")) {
        $("#freelancer-user-file-upload").prop("disabled", false);
    } else {
        $("#freelancer-user-file-upload").prop("disabled", true);
    }
    $("#freelance-user-preview-selected-image").toggleClass(
        "green_edit cursor-pointer"
    );
    $(
        ".fuser_account .user_contact_edited,.fuser_account .user_contact_edit"
    ).toggle(200);
});

//location hide show
$(".user_location .user_contact_edit").hide();
$(".user_location .edit_account_icon,.user_location .cancel_btn").on("click", function () {
    $(
        ".user_location .user_contact_edited,.user_location  .user_contact_edit"
    ).toggle(200);
});

$(".mobile_back_btn").click(function (e) {
    e.preventDefault();
    $(".up_setting_container").show();
    $(".up_setting_container ul li a")
        .removeClass("color_grey")
        .addClass("color_black");
    $(".title_mobile_hide").show();
    $(this).removeClass("d-flex").hide();
});

// var url = window.location.href.split("/");
// var lastSegment = url.pop();
// if (lastSegment == "contact-info") {
//     $(".up_setting_container ul li").eq(0).find("a").addClass("active");
// }

// freelance profile photo preview
const freelancerProfilePreviewImage = (event) => {
    const freelancerProfileImageFiles = event.target.files;
    const freelancerProfileImageFilesLength =
        freelancerProfileImageFiles.length;
    if (freelancerProfileImageFilesLength > 0) {
        const companyImageSrc = URL.createObjectURL(
            freelancerProfileImageFiles[0]
        );
        const clientCompanyImagePreviewElement = document.querySelector(
            "#freelance-user-preview-selected-image"
        );
        clientCompanyImagePreviewElement.src = companyImageSrc;
        clientCompanyImagePreviewElement.style.display = "block";
    }
};

// accountInfo
$("#accountInfo,#locationInfo").on("submit", function (e) {
    e.preventDefault();
    console.log(":ccc");
    var formID = $(this).closest("form").attr("id");
    var formData = new FormData(this);
    if(formID == "accountInfo"){
        var formData = new FormData();
        var files = $("#freelancer-user-file-upload")[0].files;
        // Check file selected or not
        if (files.length > 0) {
            formData.append("filename", files[0]);
        }
    
        var other_data = $("#accountInfo").serializeArray();
        $.each(other_data, function (key, input) {
            formData.append(input.name, input.value);
        });
    }

    $.ajax({
        type: "post",
        url: "/freelancer/update-contact-info",
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        success: (data) => {
            $(".error").html("");
            if (data.freelancerInfo == "locationInfo") {
                notify.show(
                    "success",
                    "Successfully Account Location Details Updated"
                );
                $(".user_location .user_contact_edited,.user_location  .user_contact_edit").toggle(200);
            } else {
                notify.show(
                    "success",
                    "Successfully AccountInfo Details Updated"
                );
                if ($("#freelancer-user-file-upload").prop("disabled")) {
                    $("#freelancer-user-file-upload").prop("disabled", false);
                } else {
                    $("#freelancer-user-file-upload").prop("disabled", true);
                }
                $("#freelance-user-preview-selected-image").toggleClass(
                    "green_edit cursor-pointer"
                );
                $(".fuser_account .user_contact_edited,.fuser_account .user_contact_edit"
                ).toggle(200);
            }
            var fullName = data.data.firstname + " " + data.data.lastname;
            var phoneNo = data.data.phone_no;
            $(".user_name").html(fullName);
            $("#user_id_phone").html(phoneNo);
            $('.location_timezone').html(data.data.time_zone)
            
        },
        error(error) {
            $(".error").html("");
            let errors = error.responseJSON.errors;
            for (let key in errors) {
                let errorDiv = $(`.error[data-error="${key}"]`);
                if (errorDiv.length) {
                    errorDiv.text(errors[key][0]);
                } else {
                    errorDiv.text("");
                }
            }
        },
    });
});
