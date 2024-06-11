$("#hourly_rate").keyup(function(){
    var hourlyRate = $(this).val();
    var serviceFee = (hourlyRate/100)*20;
    var receiveFee = hourlyRate-serviceFee;
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
// $('#hourly_rate').removeAttr('required');​​​​​
