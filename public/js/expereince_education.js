$('#flexCheckDefault').on("click",function(){
    let isChecked = $(this).prop('checked');
    if(isChecked == true){
        $('#next_education_btn').css({"pointer-events":"initial","background":"#108a00","color":"#fff"});
    }else{
        $('#next_education_btn').css({"pointer-events":"none","background":"#e4ebe4","color":"#9aaa97"});
    }
});

if($('#show_exp').find('.showDataExp_data').length !== 0){
    $('#next_education_btn').css({"pointer-events":"initial","background":"#108a00","color":"#fff"});
}