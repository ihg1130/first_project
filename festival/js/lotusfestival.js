//메뉴네비게이션
$('.navi_box>ul>li').hover(function () {
    $(this).children('.submenu').stop().slideToggle();
});


//이미지 슬라이드
$('.slide_box>ul>li').hide();
$('.slide_box>ul>li:first-child').show();

setInterval(function () {
    $('.slide_box>ul>li:first').fadeOut(1000)
        .next().fadeIn().end(1000)
        .appendTo('.slide_box>ul');
}, 3000);


//팝업
$('.팝업열기').click(function () {
    $('#modal_popup').show();
});

$('.팝업닫기').click(function () {
    $('#modal_popup').hide();
});


//패밀리사이트
$('.familysite>div').click(function () {
    if ($('.familysite>ul').css('display') == 'none') {
        $('.familysite>ul').stop().slideDown('slow');
        $('.familysite>div>span').text('▲');
    } else {
        $('.familysite>ul').stop().slideUp('slow');
        $('.familysite>div>span').text('▼');
    }
});