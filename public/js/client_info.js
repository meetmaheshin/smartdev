// store client info
$("#storeAccountInfo").on("submit", function (e) {
    e.preventDefault();
    var formData = new FormData(this);
    var formData = new FormData();
    var files = $("#client-user-file-upload")[0].files;
    // Check file selected or not
    if (files.length > 0) {
        formData.append("filename", files[0]);
    }
    var other_data = $("#storeAccountInfo").serializeArray();
    $.each(other_data, function (key, input) {
        formData.append(input.name, input.value);
    });

    $.ajax({
        type: "POST",
        url: "/client/store-account-info",
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        success: (response) => {
            $(".error").html("");
            if (response.status == "true") {
                notify.show("success", "User Info Updated");
            }
            if ($("#client-user-file-upload").prop("disabled")) {
                $("#client-user-file-upload").prop("disabled", false);
            } else {
                $("#client-user-file-upload").prop("disabled", true);
            }
            $("#client-user-preview-selected-image").toggleClass(
                "green_edit cursor-pointer"
            );
            $(".client_user_details, .client_user_details_edit").toggle(200);
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

// store client company details
$("#companyDetails").on("submit", function (e) {
    e.preventDefault();
    var formData = new FormData(this);

    $.ajax({
        type: "POST",
        url: "/client/company-details",
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        success: (data) => {
            notify.show("success", "Company Details Successfully Updated");
            $(".error").text("");
            if ($("#client-company-file-upload").prop("disabled")) {
                $("#client-company-file-upload").prop("disabled", false);
            } else {
                $("#client-company-file-upload").prop("disabled", true);
            }
            $("#client-company-preview-selected-image").toggleClass(
                "green_edit cursor-pointer"
            );
            $(".client_company_details, .client_company_details_edit").toggle(
                200
            );
        },
        error(error) {
            console.log(error);
            $(".error").text("");
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

// store client company contact
$("#companyContact").click(function (e) {
    e.preventDefault();
    var data = {
        firstNameContact: $("#firstNameContact").val(),
        phone: $("#phone").val(),
        timeZone: $("#timeZone").val(),
        country: $("#country").val(),
        state: $("#country_states").val(),
        city: $("#country_state_city").val(),
        address: $("#address").val(),
        zip: $("#zip").val(),
    };
    $.ajax({
        type: "POST",
        url: "/client/company-contact",
        data: data,
        success: function (response) {
            notify.show("success", "Contact Information Updated");
            console.log(response);
            $(".timezone").html(response.time_zone);
            $(".address").html(response.address);
            $(".error").text("");
            $(".client_company_contacts, .c_contacts_contacts_edit").toggle(
                200
            );
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

// freelancer info
$(document).on("click", ".freelancer_details_show", function (e) {
    e.preventDefault();
    var id = $(this).attr("data-id");
    var url = $(this).attr('data-action');
    $.ajax({
        url: url,
        method: "GET",
        data: { id: id },
        dataType: "json",
        success(response) {
            if (response.status == "true") {   
                $("#education").html('');
                $(".job_skills").html('');
                $(".freelancerExperience").html('');
                if(response.data.profile_photo_path != null){
                    $('.user_image').attr('src','/storage/images/client_profile/'+response.data.profile_photo_path)  ;       
                }

                $("#user_name").html(response.data.firstname+ ' '+response.data.lastname);
                $("#user_country").html(response.data.cities.name+', '+response.data.country.name);
                $("#hours").html('More than '+response.data.freelancer_rate.hourly_rate+' hrs/week');
                $("#freelancer_title").html(response.data.freelancer_profile.title);
                $("#freelancer_bio").html(response.data.freelancer_profile.bio);
                
                if (response.data.freelancer_education.length!= 0) {
                    var sel = '<ul class="list-unstyled">';
                    $.each(response.data.freelancer_education, function (key, value) {
                        sel +=
                            '<li class="mb-3">'+value.school+'<p class="mb-0">'+value.fieldOfStudy+'</p>'+ '<p class="mb-0">'+value.start_date+'-'+value.end_date+'</p>'+'</li>' 
                    });
                    $("#education").append(sel);
                }else{
                    $("#education").append('No Data Found');
                }


                if (response.data.freelancer_skills.length!= 0) {
                    var sel1 = $('<p class="up_skill" id="job_skills_data">');
                    $.each(response.data.freelancer_skills, function (key, value) {
                        sel1.append(
                            '<a href="javascript:void(0)">' +
                                value.skill.skills_sub +
                                "</a>"
                        );
                    });  
                    $(".job_skills").append(sel1);
                }

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
                    $(".freelancerExperience").append(sel2);
                }else{
                    $(".freelancerExperience").append('No Data Found');
                }


            }
        },
        error(error) {
            console.log(error);
        },
    });
});