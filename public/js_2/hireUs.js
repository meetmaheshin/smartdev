$(document).ready(function () {
  $('.error-label').hide();
  $('#welcome_hireus').hide();
  $('#error_api').hide();
  $('#hireUsForm').click(function () {
    if (
      $('#full_name').val() == null ||
      $('#full_name').val() == '' ||
      $('#full_name').val() == 'undefined'
    ) {
      $('#full_name').focus();
      $('#error_full_name').show();

      return false;
    } else {
      $('#error_full_name').hide();
    }

    if (
      $('#email_id').val() == null ||
      $('#email_id').val() == '' ||
      $('#email_id').val() == 'undefined'
    ) {
      $('#email_id').focus();
      $('#error_email_id').show();

      return false;
    } else if (
      !$('#email_id')
        .val()
        .match(
          /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/
        )
    ) {
      $('#email_id').focus();
      $('#error_email_id').show();
      return false;
    } else {
      $('#error_email_id').hide();
    }

    if (
      $('#phone_no').val() == null ||
      $('#phone_no').val() == '' ||
      $('#phone_no').val() == 'undefined'
    ) {
      $('#phone_no').focus();
      $('#error_phone_no').show();

      return false;
    }

    // else if (
    //   !$('#phone_no')
    //     .val()
    //     .match(/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/)
    // ) {
    //   $('#error_phone_no').show();
    //   $('#error_phone_no').focus();
    //   return false;
    // }
    else {
      $('#error_phone_no').hide();
    }

    // if (
    //   $('#connect_id').val() == null ||
    //   $('#connect_id').val() == '' ||
    //   $('#connect_id').val() == 'undefined'
    // ) {
    //   $('#connect_id').focus();
    //   $('#error_connect_id').show();

    //   return false;
    // } else {
    //   $('#error_connect_id').hide();
    // }

    if (
      $('#budget').val() === 'Budget' ||
      $('#budget').val() == null ||
      $('#budget').val() == '' ||
      $('#budget').val() == 'undefined'
    ) {
      $('#budget').focus();
      $('#error_budget').show();

      return false;
    } else {
      $('#error_budget').hide();
    }

    if (
      $('#time_period').val() === 'Time Frame' ||
      $('#time_period').val() == null ||
      $('#time_period').val() == '' ||
      $('#time_period').val() == 'undefined'
    ) {
      $('#time_period').focus();
      $('#error_time_frame').show();
      return false;
    } else {
      $('#error_time_frame').hide();
    }

    if (
      $('#special_message').val() == null ||
      $('#special_message').val() == '' ||
      $('#special_message').val() == 'undefined'
    ) {
      $('#special_message').focus();
      $('#error_special').show();

      return false;
    } else {
      $('#error_special').hide();
    }

    if ($('#signup_label input[type=checkbox]').checked) {
      $('#error_special').show();
    } else {
      $('#error_special').hide();
    }

    let leadForm = new Object();
    leadForm.full_name = $('#full_name').val();
    leadForm.email_id = $('#email_id').val();
    leadForm.phone_no = $('#phone_no').val();
    leadForm.connect_id = $('#connect_id').val();
    leadForm.budget = $('#budget').val();
    leadForm.time_period = $('#time_period').val();
    leadForm.special_message = $('#special_message').val();
    leadForm.signup_checkmark = $('#signup_checkmark input[type=checkbox]').is(
      ':checked'
    );

    let leadData = {
      url: 'https://support.services-money91.com/support/hireus',
      method: 'POST',
      timeout: 0,
      headers: {
        'Content-Type': 'application/json',
      },
      data: JSON.stringify(leadForm),
    };

    $.ajax(leadData)
      .done(function (response) {
        resetValue();
        $('#welcome_hireus').show();
        $('#overlay').addClass('open_overlay');
      })

      .fail(function (error) {
        resetValue();
        $('#error_api').show();
        $('#overlay').addClass('open_overlay');
      });
  });

  $('#close_mldpopup').click(function () {
    $('#welcome_hireus').hide();
    $('#overlay').removeClass('open_overlay');
    location.href = '../index.html';
  });

  $('#close-error-mdl').click(function () {
    $('#error_api').hide();
    $('#overlay').removeClass('open_overlay');
  });
});

function resetValue() {
  $('#full_name').val('');
  $('#email_id').val('');
  $('#phone_no').val('');
  $('#connect_id').val('');
  $('#budget').val('Budget');
  $('#time_period').val('Time Frame');
  $('#special_message').val('');
  $('#signup_checkmark input[type=checkbox]').prop('checked', false);
}

// function validateEmail(elementValue) {
//   var emailPattern =
//     /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
//   return emailPattern.test(elementValue);
// }

// console.log(validateEmail('anshul@rovi.network'));

// /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
