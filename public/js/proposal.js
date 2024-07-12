$(document).ready(function() {
  // Get the bid count input
  var $bidCountInput = $("#bid_count");
  
  // Get the fee count rate input
  var $feeCountRateInput = $("#fee_count_rate");
  
  // Get the final cut rate input
  var $finalCutRateInput = $("#final_cut_rate");
  
  // Calculate fee count rate and final cut rate on page load
  var bidCountValue = parseFloat($bidCountInput.val()) || 0;
  var feeCountRateValue = bidCountValue * 0.05;
  var finalCutRateValue = bidCountValue - feeCountRateValue;
  
  $feeCountRateInput.val(feeCountRateValue.toFixed(2));
  $finalCutRateInput.val(finalCutRateValue.toFixed(2));
  
  // Update fee count rate and final cut rate when bid count changes
  $bidCountInput.on("input", function() {
    // Get the bid count value
    var bidCountValue = parseFloat($(this).val()) || 0;
    
    // Calculate the fee count rate
    var feeCountRateValue = bidCountValue * 0.05;
    
    // Set the fee count rate value
    $feeCountRateInput.val(feeCountRateValue.toFixed(2));
    
    // Calculate the final cut rate
    var finalCutRateValue = bidCountValue - feeCountRateValue;
    
    // Set the final cut rate value
    $finalCutRateInput.val(finalCutRateValue.toFixed(2));
  });
  
  // Update bid count and fee count rate when final cut rate changes
  $finalCutRateInput.on("input", function() {
    // Get the final cut rate value
    var finalCutRateValue = parseFloat($(this).val()) || 0;
    
    // Calculate the bid count
    var bidCountValue = finalCutRateValue / 0.95;
    
    // Set the bid count value
    $bidCountInput.val(bidCountValue.toFixed(2));
    
    // Calculate the fee count rate
    var feeCountRateValue = bidCountValue * 0.05;
    
    // Set the fee count rate value
    $feeCountRateInput.val(feeCountRateValue.toFixed(2));
  });
});
var username= "{{ Auth::user()->firstname }}";

$(function () {
    $('#token_tooltip').tooltip({trigger:'hover'})
    $('#final_cut_tooltip').tooltip({trigger:'hover'})
});
// Proposal Submit by freelancer
$("#submit_proposal").on("submit", function (e) {
    e.preventDefault();
    $('.error').html('');
    var formData = new FormData();
    let TotalFiles = $("#attachment")[0].files.length; //Total files
    let images = $("#attachment")[0];
    for (let i = 0; i < TotalFiles; i++) {
        formData.append("attachment[]", images.files[i]);
    }  
    var other_data = $("form").serializeArray();
    $.each(other_data, function (key, input) {
        formData.append(input.name, input.value);
    });
    var choostToken  = $('#choose_token option:selected').val()
    formData.append("choose_token",choostToken);
    formData.append("TotalImages", TotalFiles);

    $.ajax({
        url: $(this).attr("action"),
        method: $(this).attr("method"),
        data: formData,
        dataType: "json",
        processData: false,
        contentType: false,
        beforeSend: function () {
            jQuery("button .continue").attr("disabled", "disabled");
            $(".loader-section").css('display', 'block');
        },
        success(response) {
            $(".loader-section").css('display', 'none');
            if (response.success == 'true') {
                swal.fire({
                    title: "Proposal Sent!",
                    text: "",
                    type: "success",
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Okay",
                    closeOnConfirm: false,
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.replace("/freelancer/proposals");
                    } 
                });
            } else {
                $("#fileserror").text(response.errors);
                $(".loader-section").css('display', 'none');
            }
        },
        error: function(xhr, status, error) {

            var jsonResponse = JSON.parse(xhr.responseText);
            if (jsonResponse.errors) {
                $(".error").text("");
                if (error.status == 413) { // Check for Payload Too Large (HTTP 413)
                    let errorDiv = $(`.error[data-error="filename"]`);
                    if (errorDiv.length) {
                        errorDiv.text('File size exceeds the limit.');
                    }
                }else{
                    // let errors = error.responseJSON.errors;
                    for (let key in jsonResponse.errors) {
                       
                        var errorMessages = jsonResponse.errors[key];
                        var errorDiv = $(`.error[data-error="${key}"]`);
                        if (errorDiv.length) {
                            errorDiv.text(errorMessages[0]); // Display only the first error message
                        }
                        if(errorMessages[0] == 'The attachment.0 failed to upload.'){
                            let errorDiv = $(`.error[data-error="attachment"]`);
                            if (errorDiv.length) {
                                errorDiv.text('File size exceeds the limit.');
                            }
                        }


                        let errorfrom = $(`.form-control[data-name="${key}"]`);
                        if (errorfrom.length) {
                            errorfrom.addClass("is-invalid");
                        }
                    }
                }
            }
            setTimeout(function () {
                $(".loader-section").css('display', 'none');

            }, 1000);
            jQuery("button .continue").removeAttr("disabled");
        },
    });
});

// choose token
$('#choose_token').on('change',function(e){
    e.preventDefault();
    var tokenVal = $(this).val();
    console.log(tokenVal);
    if(tokenVal == 'rovi'){
        $('.connects_require').html('0.3');
    }else if(tokenVal == 'dev3'){
        $('.connects_require').html('0.10');

    }else if(tokenVal == 'usdt'){
        $('.connects_require').html('0.10');

    }
    $.ajax({
        url: '/freelancer/setting/plans/tokens/buy',
        method: 'GET',
        data: {tokenVal:tokenVal},
        dataType: "json",
        processData: false,
        contentType: false,
        beforeSend: function () {
            jQuery("button .continue").attr("disabled", "disabled");
        },
        success(response) {
            if(response.success=='true'){
                if(response.data == null){
                    $('#text-proposal').html('Currently you do not have enough tokens to apply, please buy tokens. '+'<a href="/freelancer/setting/plans/tokens/buy">Buy Tokens</a>');
                }else{
                    if(tokenVal == 'rovi'){
                        var roviBalanceRem = parseFloat(response.data.rovi_balance).toFixed(2) ;
                        var tokenrem = roviBalanceRem-0.3;
                        if(roviBalanceRem == null){
                            var roviBalanceRem =0;
                        }
                        if(roviBalanceRem  >= 0.3){
                            $('#text-proposal').html('When you submit this proposal, you will have '+tokenrem+ ' Tokens remaining ');
                            $('button.continue').removeAttr('disabled','')

                        }else{
                            $('#text-proposal').html('First, You have only '+roviBalanceRem+' tokens. you should have 0.3 tokens for bidding');
                            $('button.continue').attr('disabled','disabled')
                        }
                    }else if(tokenVal == 'dev3'){
                        var dev3BalanceRem = parseFloat(response.data.dev3_balance).toFixed(2);
                        if(dev3BalanceRem == null){
                            var dev3BalanceRem =0;
                        }
                        var tokenrem = dev3BalanceRem-0.10;

                        if(dev3BalanceRem  >= 0.10){
                            $('#text-proposal').html('When you submit this proposal, you will have '+tokenrem+ ' Tokens remaining');
                            $('button.continue').removeAttr('disabled','')

                        }else{
                            $('#text-proposal').html('First, You have only '+dev3BalanceRem+' tokens. you should have 0.10 tokens for bidding');
                            $('button.continue').attr('disabled','disabled')

                        }
                    }else if(tokenVal == 'usdt'){
                        var usdtBalanceRem = parseFloat(response.data.usdt_balance).toFixed(2);
                        var tokenrem = usdtBalanceRem-0.10;
                        if(usdtBalanceRem == null){
                            var usdtBalanceRem =0;
                        }

                        if(usdtBalanceRem  >= 0.10){
                            $('#text-proposal').html('When you submit this proposal, you will have '+tokenrem+ ' Tokens remaining');
                            $('button.continue').removeAttr('disabled','')

                        }else{
                            $('#text-proposal').html('First, You have only '+usdtBalanceRem+' tokens. you should have 0.10 tokens for bidding');
                            $('button.continue').attr('disabled','disabled')
                        }
                    }
                }
            }
        }
    });
})
