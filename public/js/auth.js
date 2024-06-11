jQuery(document).ready(function () {
    // registration form submit using ajax
    $("#registration").on("submit", function (e) {
        e.preventDefault();
        $(".error").html("");
        const isadmin = $("#is_admin").val();
        $.ajax({
            url: $(this).attr("action"),
            method: $(this).attr("method"),
            data: $(this).serialize(),
            dataType: "json",
            beforeSend: function () {
                $(".error").text("");
                jQuery(".create_acc_btn button").attr("disabled", "disabled");
            },
            success(response) {
                if (response.status == 200) {
                    notify.show("success", "Registration Successfully");
                    setTimeout(function () {
                        if (isadmin == 0) {
                            window.location.replace("create-profile/title");
                        } else {
                            window.location.replace("client/dashboard");
                        }
                    }, 3000);
                } else {
                    notify.show(response.type, response.msg);
                    jQuery(".create_acc_btn button").removeAttr("disabled");
                }
            },
            error(error) {
                let errors = error.responseJSON.errors;
                for (let key in errors) {
                    let errorDiv = $(`.error[data-error="${key}"]`);
                    if (errorDiv.length) {
                        errorDiv.text(errors[key][0]);
                    }
                }
                jQuery(".create_acc_btn button").removeAttr("disabled");
            },
        });
    });
});