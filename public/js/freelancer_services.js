// add checked services
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
