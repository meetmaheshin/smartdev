jQuery(document).ready(function () {
    var signup_join_btn = jQuery(".join_btn a");
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });

    notify.setup({
        title: true,
        icon: true,
        timeout: "3000",
        position: "right",
    });
    jQuery(".btn_box").click(function () {
        var btn_text = jQuery(this).attr("data-text");
        jQuery(".btn_box").removeClass("active");
        jQuery(".btn_box").find("input").prop("checked", false);
        jQuery(this).addClass("active");
        jQuery(this).find("input").prop("checked", true);
        if (btn_text === "client") {
            // signup_join_btn.text("Join as a Client").prop('disabled', false);
            signup_join_btn.text("Join as a Client");
            signup_join_btn.removeAttr("disabled");
            jQuery(".sign_up_form").find("h4").text("I'm a client, hiring for a project");
            jQuery("#is_admin").val("1");
        } else if (btn_text === "freelancer") {
            // signup_join_btn.text("Apply as a Freelancer").prop('disabled', false);

            signup_join_btn.text("Apply as a Web3 Professional");
            signup_join_btn.removeAttr("disabled");
            jQuery(".sign_up_form").find("h4").text(
                "I'm a Web3 Professional, looking for work"
            );
            jQuery("#is_admin").val("0");
            jQuery(".header_right a").text("Join as a Client");
        } else if (btn_text === "hourly_rate") {
            jQuery(".project_hour_budget").show();
            jQuery(".project_max_budget").hide();
        } else if (btn_text === "project_budget") {
            jQuery(".project_max_budget").show();
            jQuery(".project_hour_budget").hide();
        }
    });
    signup_join_btn.click(function () {
        jQuery(".signup_content").hide();
        jQuery(".sign_up_form").show();
        jQuery(".header_right").show();
        jQuery(".signup-screen header")
            .removeClass("d-flex")
            .addClass("d-sm-flex");
        return false;
    });

    jQuery(".header_right a").click(function () {
        var test = jQuery("#is_admin").val();
        if (test == 0) {
            jQuery(".signup_heading").text(
                "I'm a client, hiring for a project"
            );
            jQuery("#is_admin").val("1");
            jQuery(this).text("Apply as talent");
        } else if (test == 1) {
            jQuery(".signup_heading").text(
                "I'm a Web3 Professional, looking for work"
            );
            jQuery("#is_admin").val("0");
            jQuery(this).text("Join as a Client");
        }
        return false;
    });

    //
    $(".talent_dropdown button").on("click", function (e) {
        e.preventDefault();
        $(this).parent(".talent_dropdown").toggleClass("open");
    });
    $(".talent_dropdown_menu li").click(function () {
        var block_heading = $(this).find(".block_heading").text();
        $(".talent_dropdown button").text(block_heading);
        $(".talent_dropdown").removeClass("open");
    });
    $(".toggle_switch_btn button").click(function () {
        $(".toggle_switch_btn button").removeClass("active");
        $(this).addClass("active");
    });
    $(".user_icon > a").click(function (e) {
        e.preventDefault();
        $(this).parent(".user_icon").toggleClass("active");
    });
    $(".create_post_block .btn_box").click(function () {
        $(".getting_started_btn button:last-of-type").removeAttr("disabled");
    });
    $(".job_btn").click(function () {
        $(".posting_block").hide();
        $(this).next().show();
        var job_btn = $(this).find("label").attr("for");
        if (job_btn == "existing_job") {
            console.log('dgggggggggggg'+projectsDetails);
            $(".getting_started_btn button:last-of-type").removeAttr(
                "disabled"
            );
            jQuery("#project_id").val(projectsDetails);
        } else {
            if (
                $(this)
                    .siblings(".create_post_block")
                    .find(".btn_box")
                    .hasClass("active")
            ) {
                $(".getting_started_btn button:last-of-type").removeAttr(
                    "disabled"
                );
            } else {
                $(".getting_started_btn button:last-of-type").attr(
                    "disabled",
                    "disabled"
                );
            }
        }
    });

    var formID = $(".create_post").find("div").find("form").attr("id");
    var categoryModal = $(".client_job_post")
        .find(".edit_category_popup")
        .attr("id");
    var scopeModal = $(".client_job_post_category_block")
        .find(".editscope_popup")
        .attr("id");
    if (formID == "project_scope" || scopeModal == "editscope") {
        var project_term_length =
            '<p class="font_13 font_weight_500 color_black block_des">How long will your work take?</p>\
                                        <div class="custom_radio_btn project_term_radio">\
                                            <label for="term_length_1" class="position-relative d-flex mb-3 align-items-center">\
                                                <input type="radio" name="duration" id="term_length_1" value="more_than_6"  ' +
            (projectDuration == "more_than_6" ? "checked" : "") +
            '><span class="mid_dot_parent"></span><p class="label_text m-0">More than 6 months</p>\
                                            </label>\
                                        </div>\
                                        <div class="custom_radio_btn project_term_radio">\
                                            <label for="term_length_2" class="position-relative d-flex mb-3 align-items-center">\
                                                <input type="radio" name="duration" id="term_length_2" value="month_3_to_6" ' +
            (projectDuration == "month_3_to_6" ? "checked" : "") +
            '><span class="mid_dot_parent"></span><p class="label_text m-0">3 to 6 months</p>\
                                            </label>\
                                        </div>\
                                        <div class="custom_radio_btn project_term_radio">\
                                            <label for="term_length_3" class="position-relative d-flex mb-3 align-items-center">\
                                                <input type="radio" name="duration" id="term_length_3" value="month_1_to_3" ' +
            (projectDuration == "month_1_to_3" ? "checked" : "") +
            '><span class="mid_dot_parent"></span><p class="label_text m-0">1 to 3 months</p>\
                                            </label>\
                                        </div>';
        var project_user_experience =
            '<p class="font_13 font_weight_500 color_black m-0 block_des">What level of experience will it need?</p><span class="font_11 fw-normal color_grey mb-4 block_des">This won&apos;t restrict any proposals, but helps match expertise to your budget.</span>\
                                        <div class="project_term_radio custom_radio_btn">\
                                            <label for="project_level_1" class="position-relative d-flex mb-3">\
                                                <input type="radio" name="level" value="entry" id="project_level_1" ' +
            (projectLevel == "entry" ? "checked" : "") +
            '>\
                                                <span class="mid_dot_parent"></span>\
                                                <div class="label_content">\
                                                    <p class="font_14 color_black font_weight_500">Entry</p>\
                                                    <p class="m-0 font_11 color_black">Looking for someone relatively new to this field</p>\
                                                </div>\
                                            </label>\
                                        </div>\
                                        <div class="project_term_radio custom_radio_btn">\
                                            <label for="project_level_2" class="position-relative d-flex mb-3">\
                                                <input type="radio" name="level" value="expert" id="project_level_2" ' +
            (projectLevel == "expert" ? "checked" : "") +
            '>\
                                                <span class="mid_dot_parent"></span>\
                                                <div class="label_content">\
                                                    <p class="font_14 color_black font_weight_500">Expert</p>\
                                                    <p class="m-0 font_11 color_black">Looking for comprehensive and deep expertise in this field</p>\
                                                </div>\
                                            </label>\
                                        </div>\
                                        <div class="project_term_radio custom_radio_btn">\
                                            <label for="project_level_3" class="position-relative d-flex mb-3"> \
                                                <input type="radio" name="level" id="project_level_3"  value="level_small" ' +
            (projectLevel == "level_small" ? "checked" : "") +
            '><span class="mid_dot_parent"></span>\
                                                <div class="label_content">\
                                                    <p class="font_14 color_black font_weight_500">Small</p>\
                                                    <p class="m-0 font_11 color_black">Quick and straightforward tasks (ex. update text and images on a webpage)</p>\
                                                </div>\
                                            </label>\
                                        </div>';

        jQuery(document).on("click", ".project_term_radio input", function () {
            let input_change = jQuery(this);
            let input_val = jQuery(this).val();
            let = input_name = jQuery(this).attr("name");
            input_change.hide();
            input_change
                .parents(".project_term_radio")
                .siblings(".project_term_radio")
                .hide();
            input_change.siblings("span").hide();
            input_change.parents(".project_term_radio").show();
            input_change.parents(".project_term_radio").addClass("d-flex");
            input_change
                .parents(".project_term_length")
                .find(".block_des")
                .hide();
            input_change
                .parents(".project_level_experience")
                .find(".block_des")
                .hide();
            input_change.parent().css("pointer-events", "none");
            if (
                input_change
                    .parents(".project_term_radio")
                    .find(".project_term_edit").length > 0
            ) {
                input_change
                    .parents(".project_term_radio")
                    .find(".project_term_edit")
                    .remove();
            } else {
                input_change
                    .parents(".project_term_radio")
                    .append(
                        '<div class="project_term_edit ms-auto pe-5"><i class="font_16 fa-solid fa-pen fas"></i></div>'
                    );
            }
            if (
                input_val == "small" ||
                input_val == "large" ||
                input_val == "medium"
            ) {
                jQuery(".project_term_length")
                    .empty()
                    .append(project_term_length);
                jQuery(".project_level_experience").empty();
                jQuery(".back-fwd-btn button").attr("disabled", "disabled");
            } else if (
                input_val == "more_than_6" ||
                input_val == "month_3_to_6" ||
                input_val == "month_1_to_3" ||
                input_val == "month_3_to_6" ||
                input_val == "month_1_to_3" ||
                input_val == "less_1"
            ) {
                jQuery(".project_level_experience")
                    .empty()
                    .append(project_user_experience);
                jQuery(".back-fwd-btn button").attr("disabled", "disabled");
            }
            if (input_val == "small") {
                jQuery(".project_term_length .custom_radio_btn")
                    .eq(0)
                    .find("label")
                    .find(".label_text")
                    .text("3 to 6 months");
                jQuery(".project_term_length .custom_radio_btn")
                    .eq(0)
                    .find("label")
                    .find("input")
                    .attr("value", "month_3_to_6");
                jQuery(".project_term_length .custom_radio_btn")
                    .eq(1)
                    .find("label")
                    .find(".label_text")
                    .text("1 to 3 months");
                jQuery(".project_term_length .custom_radio_btn")
                    .eq(1)
                    .find("label")
                    .find("input")
                    .attr("value", "month_1_to_3");
                jQuery(".project_term_length .custom_radio_btn")
                    .eq(2)
                    .find("label")
                    .find(".label_text")
                    .text("Less than 1 month");
                if (projectDuration == "less_1") {
                    jQuery(".project_term_length .custom_radio_btn")
                        .eq(2)
                        .find("label")
                        .find("input")
                        .attr("value", "less_1")
                        .attr("checked", "checked");
                } else {
                    jQuery(".project_term_length .custom_radio_btn")
                        .eq(2)
                        .find("label")
                        .find("input")
                        .attr("value", "less_1");
                }
            }
            if (input_name == "duration") {
                jQuery(".project_term_length .custom_radio_btn")
                    .eq(0)
                    .find("label")
                    .find(".label_text")
                    .addClass("font_14 color_black font_weight_500");
                jQuery(".project_term_length .custom_radio_btn")
                    .eq(1)
                    .find("label")
                    .find(".label_text")
                    .addClass("font_14 color_black font_weight_500");
                jQuery(".project_term_length .custom_radio_btn")
                    .eq(2)
                    .find("label")
                    .find(".label_text")
                    .addClass("font_14 color_black font_weight_500");
            }
            if (
                jQuery("input[name='type']").is(":checked") &&
                jQuery("input[name='duration']").is(":checked") &&
                jQuery("input[name='level']").is(":checked")
            ) {
                jQuery(".back-fwd-btn button").removeAttr("disabled");
            }
        });
        jQuery(document).on("click", ".project_term_edit", function () {
            let edit_button = jQuery(this);
            if (edit_button.parents().hasClass("project_term_length")) {
                jQuery(".project_term_length .custom_radio_btn")
                    .find("label")
                    .find(".label_text")
                    .removeClass("font_14 color_black font_weight_500");
            }
            edit_button.parents(".project_term_radio").removeClass("d-flex");
            edit_button.parent().siblings().show();
            edit_button.parent().show();
            edit_button.parent().find("label").find("input").show();
            edit_button.parent().find("label").find("span").show();
            edit_button.parent().find("label").css("pointer-events", "inherit");
            edit_button.remove();
        });

        if (jQuery("input[name='type']").is(":checked")) {
            jQuery("input[name='type']:checked").trigger("click");
            jQuery("input[name='duration']:checked").trigger("click");
        }
    }
    if (jQuery('input[name="budget"]').is(":checked")) {
        var budgetValue = $('input[name="budget"]:checked').val();
        if (budgetValue == "project") {
            jQuery(".project_hour_budget").hide();
            jQuery(".project_max_budget").show();
            $("#hourly_from").val("");
            $("#hourly_to").val("");
        } else {
            jQuery(".project_hour_budget").show();
            jQuery(".project_max_budget").hide();
            $("#project_budget").val("");
        }
    }

    if (formID == "project_title") {
        specialityDropdown(1);
        web3SpecialityDropdown(11);

    }
    if (categoryModal == "editcategory") {
        specialityDropdown(catgeory_id);
        web3SpecialityDropdown(catgeory_id);
    }

    if (formID == "project_skill") {
        var selectedId = [];
        var searchId = jQuery(".posting_seach_item")
            .siblings(".selected_skills")
            .find("div")
            .find("input");
        $(searchId).each(function () {
            selectedId.push($(this).val());
        });

        if (selectedId.length != 0) {
            jQuery(".continue").removeAttr("disabled");
        } else {
            jQuery(".continue").attr("disabled", "disabled");
        }
    }

    $('#existing_project').on('click',function(){
        var projectId = $(this).val();
        jQuery("#project_id").val(projectId);
    })

    // project started
    $("#project_started,#project_title,#project_skill,#project_scope,#project_budget").on("submit", function (e) {
        e.preventDefault();
        console.log("kkkkk");
        const formID = $(this).closest("form").attr("id");
        const job = $("input[name=job]:checked").val();
        const existing_project = $("#existing_project").val();
        const formData = new FormData($("#" + formID)[0]);
        if (job == "draft") {
            jQuery("#project_id").val(existing_project);
        } else if (job == "new") {
            jQuery("#project_id").val(0);
        }
        if (formID == "project_title") {
            let TotalFiles = $("#filename")[0].files.length; //Total files
            let images = $("#filename")[0];
            for (let i = 0; i < TotalFiles; i++) {
                formData.append("filename[]", images.files[i]);
            }
            formData.append("TotalImages", TotalFiles);
        }
        $.ajax({
            url: $(this).attr("action"),
            method: $(this).attr("method"),
            data: formData,
            dataType: "json",
            processData: false,
            contentType: false,
            beforeSend: function () {
                jQuery("button .continue").attr("disabled", "disabled");
            },
            success(response) {
                if (response.response == "true") {
                    if (formID == "project_budget") {
                        socket.emit("sendNotification", {
                            notifiable_id: receiverData,
                            type:'App\Notifications\NewJobPosted',
                            message: response.notification,
                        });
                        notify.show("success", "Project Successfully Posted");
                        setTimeout(function () {
                            location.href = response.url;
                        }, 500);
                    } else {
                        location.href = response.url;
                    }
                } else {
                    $("#fileserror").text(response.errors);
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
                jQuery("button .continue").removeAttr("disabled");
            },
        });
    });

    

    $(".remove").click(function (e) {
        e.preventDefault();
        var id = $(this).attr("id");
        $.ajax({
            url: "/client/imageDestroy",
            method: "post",
            data: { id: id },
            dataType: "json",
            success(response) {
                if (response.status == "true") {
                    console.log(this);
                    $(".posting_one_content .remove")
                        .parent(".pip_" + id)
                        .remove();
                }
            },
            error(error) {
                console.log(error);
            },
        });
    });

    $("#project_talent_Search").keypress(function (e) {
        if (e.which == 13) {
            //Enter key pressed
            e.preventDefault();
            var searchval = $("#project_talent_Search").val();
            var searchType = $("#searchType").val();
            if (searchval.length === 0) {
                return false;
            }
            searchProject(searchval, searchType);
        }
    });

    $("#search_project").keypress(function (e) {
        if (e.which == 13) {
            //Enter key pressed
            e.preventDefault();
            var searchType = $("#searchType").val();
            var searchval = $("#search_project").val();

            if (searchval.length === 0) {
                return false;
            }
            searchProject(searchval, searchType);
        }
    });

    $("#search_project_dashboard").keypress(function (e) {
        if (e.which == 13) {
            //Enter key pressed
            e.preventDefault();
            var searchType = $("#searchType_dashboard").val();
            var searchval = $("#search_project_dashboard").val();
            if (searchval.length === 0) {
                return false;
            }
            searchProject(searchval, searchType);
        }
    });

    jQuery(".user_post .post_title_btn button").click(function (e) {
        e.stopPropagation();
        jQuery(this).parent().find(".post_title_popup").toggleClass("show");
    });
    jQuery(document).on("click", function () {
        if (jQuery("section").hasClass("user_dashboard")) {
            jQuery(".dashboard-user-postings .post_title_popup").removeClass(
                "show"
            );
        }
    });

    // modal edit scope scope on review page
    $(".edit_scope").on("click", function (e) {
        e.preventDefault();
        var radioValue = $("input[name='project_term']:checked").val();
        var projectId = $(this).attr("data-id");
        var duration = $("input[name=duration]:checked").val();
        var level = $("input[name=level]:checked").val();
        var newDuration = "";
        var newLevel = "";

        $.ajax({
            url: "/client/reviewScopeUpdate",
            type: "post",
            data: {
                _token: $("#_token").val(),
                scope: radioValue,
                projectId: projectId,
                duration: duration,
                level: level,
            },
            dataType: "json",
            success: function (response) {
                console.log(response);
                if (response.duration != null) {
                    newDuration = response.duration;
                    newLevel = response.level;
                }
                var data = `${response.scope} ${newDuration} ${newLevel}`;
                console.log(data);
                $(".review_scope").html("");
                var html =
                    ' <a href="" class="edit_draft_icon" data-bs-toggle="modal" data-bs-target="#editscope">\
                <i class="fa-solid fa-pen fas"></i>\
               </a>';
                $(".review_scope").append(data);
                $(".review_scope").append(html);
                jQuery(".btn-close").trigger("click");
            },
            error: function (error) {
                console.log(error);
                let errors = error.responseJSON.errors;
                for (let key in errors) {
                    let errorDiv = $(`.error[data-error="${key}"]`);
                    if (errorDiv.length) {
                        errorDiv.text(errors[key][0]);
                    }
                }
            },
            // small, More than 6, entry level
        });
    });

    // modal edit budget on review page
    $(".edit_budget").on("click", function (e) {
        e.preventDefault();
        // editBudget budget
        var budgetCheck = $(".budget:checked").val();
        var hourlyFrom,
            hourlyTo,
            fixed_budget = "";
        if (budgetCheck == "hourly") {
            hourlyFrom = $("#hourly_from").val();
            hourlyTo = $("#hourly_to").val();
        } else {
            fixed_budget = $("#fixed_budget").val();
        }
        $.ajax({
            url: "/client/reviewBudgetUpdate",
            type: "post",
            data: {
                _token: $("#_token").val(),
                hourly_from: hourlyFrom,
                hourly_to: hourlyTo,
                project_budget: fixed_budget,
                budget: budgetCheck,
            },
            dataType: "json",
            success: function (response) {
                console.log(response);
                if (
                    jQuery(".btn_box.active").attr("data-text") ==
                    "project_budget"
                ) {
                    var fix_budget = $("#fixed_budget").val();
                    jQuery(".btn-close").trigger("click");
                    jQuery(".review_budget")
                        .text("Fix Budget $")
                        .append(fix_budget);
                } else {
                    var hourly_from = $("#hourly_from").val();
                    var hourly_to = $("#hourly_to").val();
                    jQuery(".btn-close").trigger("click");
                    var data = `Hourly $ ${hourly_from}-$${hourly_to}`;
                    jQuery(".review_budget").text(data);
                }
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

    //  modal edit skills on review page
    $("#edit_skils").on("click", function (e) {
        e.preventDefault();
        $(".add_skills").html("");
        var selectedSkills = $(".selected_skills span")
            .map(function () {
                return $(this).data("cy");
            })
            .get();
        $.each(selectedSkills, function (key, value) {
            $(".add_skills").append(
                `<span class="font_12 d-inline-block">${value}</span>`
            );
            // console.log(key+" => "+value);
        });
        $(".add_skills").append(
            ' <a href="" class="edit_draft_icon" data-bs-toggle="modal" data-bs-target="#editpostSkills">\
          <i class="fa-solid fa-pen fas"></i>\
          </a>'
        );

        jQuery(".btn-close").trigger("click");
    });

    // modal category
    $("#modal_category_id").on("change", function (e) {
        e.preventDefault();
        const catId = $(this).val();
        specialityDropdown(catId);
    });
    // modal web3 category
    $("#modal_web3_category_id").on("change", function (e) {
        e.preventDefault();
        const catId = $(this).val();
        web3SpecialityDropdown(catId);
    });

    $(".apply").on("click", function () {
        var specId = $("#modal_speciality_id").val();
        $.ajax({
            url: "/client/getSpecialityName",
            type: "post",
            data: {
                _token: $("#_token").val(),
                specId: specId,
            },
            dataType: "json",
            success: function (response) {
                var specialties = response.data;
                var html =
                    '<label for="category_' +
                    specId +
                    '" class="cursor_pointer position-relative d-flex mb-3 align-items-center"><input type="radio" name="specialty_id" id="category_' +
                    specId +
                    '"  value="' +
                    specId +
                    '" checked>\
                <span class="d-inline-block"><i class="mid_dot fst-normal"></span>' +
                    specialties +
                    "</label>";
                const vals = $(".category_radio_content label input")
                    .not(this)
                    .map(function () {
                        return this.value;
                    })
                    .get();
                if (vals.indexOf(specId) != -1) {
                    $(".category_radio_content label input#category_" + specId).prop("checked", "checked");
                } else {
                    $(".category_radio_content").append(html);
                }
            },
        });
    });

    $(".web3_apply").on("click", function () {
        var specId = $("#modal_web3_speciality_id").val();
        $.ajax({
            url: "/client/getSpecialityName",
            type: "post",
            data: {
                _token: $("#_token").val(),
                specId: specId,
            },
            dataType: "json",
            success: function (response) {
                var specialties = response.data;
                var html =
                    '<label for="category_' +
                    specId +
                    '" class="cursor_pointer position-relative d-flex mb-3 align-items-center"><input type="radio" name="specialty_id" id="category_' +
                    specId +
                    '"  value="' +
                    specId +
                    '" checked>\
                <span class="d-inline-block"><i class="mid_dot fst-normal"></span>' +
                    specialties +
                    "</label>";
                const vals = $(".web3_category_radio_content label input")
                    .not(this)
                    .map(function () {
                        return this.value;
                    })
                    .get();
                if (vals.indexOf(specId) != -1) {
                    $(
                        ".web3_category_radio_content label input#category_" + specId
                    ).prop("checked", "checked");
                } else {
                    $(".web3_category_radio_content").append(html);
                }
            },
        });
    });

    $(document).on(
        "click",
        ".posting_accordion_inner_content .skill_sub",
        function () {
            var skillSubId = $(this).attr("data-id");
            var skillName = $(this).attr("data-cy");
            var skillId = $(this).attr("data-skill");

            var html =
                '<div id="selected_skills_sub_' +
                skillSubId +
                '"><input type="hidden" name="skill_id[]" id="' +
                skillSubId +
                '" value="' +
                skillSubId +
                '"><span data-skill="' +
                skillId +
                '" class="posting_add_feature font_12 font_weight_500 color_grey px-3 py-2 d-inline-block skill_sub"  data-cy="' +
                skillName +
                '"  data-id ="' +
                skillSubId +
                '">' +
                skillName +
                '\
        <i class=" fas fa-solid fa-times"></i></span></div>';
            $(".selected_skills").append(html);

            var mainval = $("#skill_subcat_" + skillSubId).attr("data-skill");
            $("#skill_subcat_" + skillSubId).remove();

            if (
                jQuery(".heading" + mainval)
                    .find(".posting_accordion_inner_content")
                    .find("span").length == 0
            ) {
                $(
                    ".heading" + mainval + " .posting_accordion_inner_content"
                ).html(
                    '<p class="ps-4 m-0">Looking for more skills? Try the search bar above.</p>'
                );
            } else {
                $(
                    ".heading" + mainval + " .posting_accordion_inner_content p"
                ).remove();
            }
            jQuery(".continue").removeAttr("disabled");
        }
    );

    $(document).on("click", ".posting_add_feature .fa-times", function () {
        var skillSubId = $(this).parent(".posting_add_feature").attr("data-id");
        var skillName = $(this).parent(".posting_add_feature").attr("data-cy");
        var skillId = $(this).parent(".posting_add_feature").attr("data-skill");

        console.log("skillSubId", skillSubId);
        console.log("skillName", skillName);
        console.log("skillId", skillId);

        var html =
            '<span id="skill_subcat_' +
            skillSubId +
            '" data-skill="' +
            skillId +
            '"class="posting_add_feature font_12 font_weight_500 color_grey px-3 py-2 d-inline-block skill_sub"  data-cy="' +
            skillName +
            '"  data-id ="' +
            skillSubId +
            '">' +
            skillName +
            '\
        <i class=" fas fa-solid fa-plus"></i></span>';
        $(
            "#collapse" +
                skillId +
                " .accordion-body .posting_accordion_body_content .posting_accordion_inner_content"
        ).append(html);

        var selectedId = [];
        var searchId = jQuery(".posting_seach_item")
            .siblings(".selected_skills")
            .find("div")
            .find("input");
        $(searchId).each(function () {
            selectedId.push($(this).val());
        });
        $(searchId).each(function () {
            selectedId.push($(this).val());
        });
        var mainval = $("#skill_subcat_" + skillSubId).attr("data-skill");
        console.log("MailVal" + mainval);

        if (
            jQuery(".heading" + mainval)
                .find(".posting_accordion_inner_content")
                .find("span").length == 0
        ) {
            $(".heading" + mainval + " .posting_accordion_inner_content").html(
                '<p class="ps-4 m-0">Looking for more skills? Try the search bar above.</p>'
            );
        } else {
            $(
                ".heading" + mainval + " .posting_accordion_inner_content p"
            ).remove();
        }
        $("#selected_skills_sub_" + skillSubId).remove();

        if (selectedId.length == 0) {
            jQuery(".continue").attr("disabled", "disabled");
        }
    });

    // Search kill
    $("#search").on("keyup", function () {
        var query = $(this).val();
        var selectedId = [];
        var searchId = jQuery(".posting_seach_item")
            .siblings(".selected_skills")
            .find("div")
            .find("input");
        $(searchId).each(function () {
            selectedId.push($(this).val());
        });
        $.ajax({
            url: "/client/autocomplete",
            type: "GET",
            data: { term: query, selectedId: selectedId },
            success: function (data) {
                $("#country_list").html(data);
            },
        });
    });

    // initiate a click function on each search result
    $(document).on("click", "li.list-group-item", function () {
        // declare the value in the input field to a variable
        var skillName = $(this).text();
        var skillId = $(this).attr("data-skill");
        var skillSubId = $(this).attr("value");

        var html =
            '<div id="selected_skills_sub_' +
            skillSubId +
            '"><input type="hidden" name="skill_id[]" id="' +
            skillSubId +
            '" value="' +
            skillSubId +
            '"><span data-skill="' +
            skillId +
            '" class="posting_add_feature font_12 font_weight_500 color_grey px-3 py-2 d-inline-block skill_sub"  data-cy="' +
            skillName +
            '"  data-id ="' +
            skillSubId +
            '">' +
            skillName +
            '\
        <i class=" fas fa-solid fa-times"></i></span></div>';

        $(".selected_skills").append(html);
        // assign the value to the search box
        $("#search").val("");
        $("#skill_subcat_" + skillSubId).remove();
        // after click is done, search results segment is made empty
        $("#country_list").html("");
    });

    // save job project
    $(document).on("click", ".job_save_btn", function () {
        var id = $(this).find("#job_save_btn_id, #popup_job_save_btn_id").val();
        $(this).find(".fa-heart").toggleClass("fa");
        saveProject(id);
    });

    function specialityDropdown(catId) {
        $.ajax({
            url: "/client/getSpeciality",
            type: "post",
            data: {
                _token: $("#_token").val(),
                catId: catId,
            },
            dataType: "json",
            success: function (response) {
                var specialties = response.data;
                $("#modal_speciality_id").empty();


                $.each(specialties, function (key, value) {
                    $("#modal_speciality_id").append(
                        $("<option>", {
                            value: value.id,
                            text: value.title,
                        })
                    );
                });
                $(
                    '#modal_speciality_id [value="' +
                        project_specialty_id +
                        '"]'
                ).attr("selected", "true");
            },
        });
    }

    function web3SpecialityDropdown(catId) {
        $.ajax({
            url: "/client/getSpeciality",
            type: "post",
            data: {
                _token: $("#_token").val(),
                catId: catId,
            },
            dataType: "json",
            success: function (response) {
                var specialties = response.data;
                $("#modal_web3_speciality_id").empty();


                $.each(specialties, function (key, value) {
                    $("#modal_web3_speciality_id").append(
                        $("<option>", {
                            value: value.id,
                            text: value.title,
                        })
                    );
                });
                $(
                    '#modal_web3_speciality_id [value="' +
                        project_specialty_id +
                        '"]'
                ).attr("selected", "true");
            },
        });
    }

    function searchProject(searchval, searchType) {
        $.ajax({
            url: "/search_projects",
            method: "GET",
            data: { search: searchval, searchType: searchType },
            dataType: "json",
            success(response) {
                if (response.response == "true") {
                    location.href = response.url;
                }
            },
            error(error) {
                console.log(error);
            },
        });
    }

    function saveProject(id) {
        var urlDetails = '/freelancer/details';
        $.ajax({
            url: "/freelancer/saveProject",
            type: "POST",
            data: {
                id: id,
            },
            dataType: "json",
            success: function (response) {
                var description = response.data.description
                    .replace(/&/g, "&amp;")
                    .replace(/</g, "&lt;")
                    .replace(/>/g, "&gt;");
                var budget =
                    response.data.budget == "project"
                        ? "Fixed-price"
                        : "Hourly: $" +
                          response.data.hourly_from +
                          ".00-$" +
                          response.data.hourly_to;
                if (response.type == "Add") {
                    var html =
                        '<div class="job-tile-list contact_save_list_' +
                        response.data.id +
                        '">\
                    <div class="row">\
                        <div class="col">\
                            <button type="button" class="bg-transparent border-0 open_btn best_matches_result" data-id="' +
                        response.data.id +
                        '" data-title="' +
                        response.data.title +
                        '" data-action="'+urlDetails+'" data-bs-toggle="modal" data-bs-target="#sideModal">' +
                        response.data.title +
                        '</button>\
                        </div>\
                        <div class="pr-15 save_btn">\
                            <button>\
                                <div class="job_save_btn"><i class="fa fa-heart save_project"></i><input type="hidden" id="job_save_btn_id" value="' +
                        response.data.id +
                        '"></div>\
                            </button>\
                        </div>\
                    </div>\
                    <div class="mt-2">\
                        <small class="text-muted display-inline-block text-muted"><strong data-test="job-type">' +
                        budget +
                        '</strong> <span>\
                                - <span data-test="contractor-tier">' +
                        response.data.level +
                        " level</span></span> <span>";
                    if (response.data.budget == "project") {
                        html +=
                            '<span>Est. Budget: </span> <span data-test="budget">$' +
                            response.data.project_budget +
                            "</span>";
                    }
                    html +=
                        '</span>\
                        <span>\
                        </small>\
                    </div>\
                    <div class="mt-1 small_desc">\
                        <p>- ' +
                        description +
                        '</p>\
                    </div>\
                    <div class="up_skill">';
                    $.each(
                        response.data.project_skill,
                        function (index, value) {
                            html +=
                                '<a href="javascript:void(0)">' +
                                value.skill.skills_sub +
                                "</a>";
                        }
                    );
                    html +=
                        '</div>\
                    <div class="up_prop">\
                    </div>\
                </div>';
                    $("#contact").append(html);
                    $(".contact_home_list_" + response.data.id).remove();
                    $(".contact_recent_list_" + response.data.id).remove();
                } else {
                    $(".contact_save_list_" + response.data.id).remove();

                    var html =
                        '<div class="job-tile-list contact_home_list_' +
                        response.data.id +
                        '">\
                        <div class="row">\
                            <div class="col">\
                                <button type="button" class="bg-transparent border-0 open_btn best_matches_result" data-id="' +
                        response.data.id +
                        '" data-title="' +
                        response.data.title +
                        '"data-action="'+urlDetails+'" data-bs-toggle="modal" data-bs-target="#sideModal">' +
                        response.data.title +
                        '</button>\
                            </div>\
                            <div class="pr-15 save_btn">\
                                <button>\
                                    <div class="job_save_btn"><i class="far fa-heart save_project"></i><input type="hidden" id="job_save_btn_id" value="' +
                        response.data.id +
                        '"></div>\
                                </button>\
                            </div>\
                        </div>\
                        <div class="mt-2">\
                            <small class="text-muted display-inline-block text-muted"><strong data-test="job-type">' +
                        budget +
                        '</strong> <span>\
                                    - <span data-test="contractor-tier">' +
                        response.data.level +
                        " level</span></span> <span>";
                    if (response.data.budget == "project") {
                        html +=
                            '<span>Est. Budget: </span> <span data-test="budget">$' +
                            response.data.project_budget +
                            "</span>";
                    }
                    html +=
                        '</span>\
                            <span>\
                            </small>\
                        </div>\
                        <div class="mt-1 small_desc">\
                            <p>- ' +
                        description +
                        '</p>\
                        </div>\
                        <div class="up_skill">';
                    $.each(
                        response.data.project_skill,
                        function (index, value) {
                            html +=
                                '<a href="javascript:void(0)">' +
                                value.skill.skills_sub +
                                "</a>";
                        }
                    );
                    html +=
                        '</div>\
                        <div class="up_prop">\
                        </div>\
                    </div>';
                    $("#home").append(html);
                }
            },
        });
    }

    // skill popup model
    $("#edit_skill_review").on("click", function (e) {
        e.preventDefault();
        var specialityId = $(".modal_speciality_id_review").val();
        var projectId = $("#hidden_project_id").val();
        $("#hidden_speciality_id").val(specialityId);
        $("#editpostSkills").modal("show");

        // skill update ajax
        $.ajax({
            url: "/client/reviewEditSkill",
            type: "post",
            data: {
                _token: $("#_token").val(),
                specialityId: specialityId,
                projectId: projectId,
            },
            dataType: "json",
            success: function (response) {
                $("#accordionData").html(response.data);
            },
        });
    });

    // modal category and speciality update on review page
    $(".apply_btn").on("click", function (e) {
        e.preventDefault();
        var catId = $("#modal_category_id").val();
        var specId = $("#modal_speciality_id").val();
        var projectId = $(this).attr("data-id");

        var specialityId = $(".modal_speciality_id_review").val();
        $("#hidden_speciality_id").val(specialityId);

        // category update ajax
        $.ajax({
            url: "/client/reviewCategoryUpdate",
            type: "post",
            data: {
                _token: $("#_token").val(),
                specialty_id: specId,
                category_id: catId,
                projectId: projectId,
            },
            dataType: "json",
            success: function (response) {
                $(".review_category").html("");
                var html =
                    ' <a href="" class="edit_draft_icon" data-bs-toggle="modal" data-bs-target="#editcategory">\
                <i class="fa-solid fa-pen fas"></i>\
                </a>';
                $(".review_category").append(response.category);
                $(".review_category").append(html);
                jQuery(".btn-close").trigger("click");

                // var specialties = response.data
                // console.log(specialties);
                // var html = '<label for="category_'+catId+'" class="position-relative d-flex mb-3 align-items-center"><input type="radio" name="specialty_id" id="category_'+catId+'"  value="'+specId+'" checked>\
                // <span class="d-inline-block"></span>'+specialties+'</label>';
                // $('.category_radio_content').append(html)
            },
        });
    });
    jQuery(".header_search_bar .dropdown-item").click(function () {
        var get_serach = jQuery(this).find("h6").text();
        jQuery(".searchbar_dropdown button").text(get_serach);
        if (get_serach == "Talent") {
            $("#searchType").val(0);
        } else {
            $("#searchType").val(1);
        }
    });

    $(".toggle-password-login").click(function () {
        $(this).toggleClass("fa-eye fa-eye-slash");
        input = $(this).parent().find("input");
        if (input.attr("type") == "password") {
            input.attr("type", "text");
        } else {
            input.attr("type", "password");
        }
    });
    $('.radio_container').on('click',function() {
        $('.radio_container').find("i").removeClass("d-block");
        $('.radio_container').removeClass('active');
        $(this).addClass('active');
        $(this).find("i").toggleClass("d-block");
    });
    // sidebar tab active function start
        var url_sidebar = window.location.href;
        jQuery('.up_setting_container a[href="'+url_sidebar+'"]').addClass('active');
        jQuery('.client_side_nav a[href="'+url_sidebar+'"]').addClass('is-active');
    // sidebar tab active function end
});
jQuery(document).ready(function() {
    var dropdown = $('.bell_dropdown');
    var tooltip = $('.tooltiptext');

    dropdown.on('show.bs.dropdown', function() {
        tooltip.hide();
        dropdown.css('color', '#00B050');
    });

    dropdown.on('hidden.bs.dropdown', function() {
        tooltip.show();
        dropdown.css('color', 'black');
    });
    // notification delete 
    $('.notificatin_delete').on('click', function(e) {
        e.preventDefault();
        const $this = $(this); // store a reference to the clicked element
        const notificationId = $this.data('id');
        $.ajax({
            url: "/ab/notifications/delete/" + notificationId,
            type: "GET",
            dataType: "json",
            success: function(response) {
                if (response.status == true) {
                    const $closestLi = $this.closest('li');
                    $closestLi.fadeOut(300, function() {
                        $closestLi.remove();
                    });
                }
            },
        });
    });
    $('.read_noti').on('click',function(e){
        e.preventDefault();
        const $this = $(this); // store a reference to the clicked element
        const notificationId = $this.data('id');
        const notificationUrl = $this.attr('href');
        console.log("notificationUrl"+notificationUrl);

        $.ajax({
            url: "/ab/notifications/read_noti/" + notificationId,
            type: "GET",
            dataType: "json",
            success: function(response) {
                if (response.status == true) {   
                    location.href = notificationUrl;           
                }
            },
        });
    })

});