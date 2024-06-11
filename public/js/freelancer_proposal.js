$(function () {
    $('#active_tooltip, #submit_tooltip').tooltip({trigger:'hover'})
});
$( window ).resize(function() {
    if ($(window).width() < 767) {
        $('.proposal_block_title').click(function(){
            $(this).toggleClass('open');
            $(this).siblings('.proposal_active_list').toggle();
        });
    }
});
setTimeout(function(){
var $elements = jQuery('.popover-icon');
    $elements.each(function () {
    var $element = $(this);

    $element.popover({
        html: true,
        placement: 'top',
        container: $element,
        content: $('.popper_div_content').html(),
        trigger: 'hover',
        offset: '1',
        fallbackPlacement: 'flip'
    });
    });
}, 1000)
$(document).on('click','.popover-header i',function(){
    $('.popover-icon').popover('hide');
})
