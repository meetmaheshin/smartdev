$(document).ready(function () {
  $('.error-label').hide();
  $('#thanks_join').hide();
  $('#error_api').hide();

  $('#joinUsForm').click(function () {
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
      $('#about_yourself').val() == null ||
      $('#about_yourself').val() == '' ||
      $('#about_yourself').val() == 'undefined'
    ) {
      $('#about_yourself').focus();
      $('#error_about_yourself').show();

      return false;
    } else {
      $('#error_about_yourself').hide();
    }

    if ($('#signup_checkmark input[type=checkbox]').checked) {
      $('#error_signup_checkmark').show();
    } else {
      $('#error_signup_checkmark').hide();
    }

    let joinForm = new Object();
    joinForm.full_name = $('#full_name').val();
    joinForm.email_id = $('#email_id').val();
    joinForm.phone_no = $('#phone_no').val();
    joinForm.connect_id = $('#connect_id').val();
    joinForm.about_you = $('#about_yourself').val();
    joinForm.signup_checkmark = $('#signup_checkmark input[type=checkbox]').is(
      ':checked'
    );

    let joinData = {
      url: 'https://support.services-money91.com/support/joinus',
      method: 'POST',
      timeout: 0,
      headers: {
        'Content-Type': 'application/json',
      },
      data: JSON.stringify(joinForm),
    };

    $.ajax(joinData)
      .done(function (response) {
        console.log('response data', response);
        resetValue();
        $('#joinus_modal').hide();
        $('#thanks_join').show();
        $('#overlay').addClass('open_overlay');
      })

      .fail(function (error) {
        resetValue();
        $('#joinus_modal').hide();
        $('#error_api').show();
        $('#overlay').addClass('open_overlay');
      });
  });

  $('#close_mldpopup').click(function () {
    $('#thanks_join').hide();
    $('#overlay').removeClass('open_overlay');
    $('body').removeClass('mdl_body');
    location.href = '../index.html';
  });

  $('#close-error-mdl').click(function () {
    $('#error_api').hide();
    $('#overlay').removeClass('open_overlay');
    $('body').removeClass('mdl_body');
  });
});

function resetValue() {
  $('#full_name').val('');
  $('#email_id').val('');
  $('#phone_no').val('');
  $('#connect_id').val('');
  $('#about_yourself').val('');
  $('#signup_checkmark input[type=checkbox]').prop('checked', false);
}
