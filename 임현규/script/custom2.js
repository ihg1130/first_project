$(".nav > ul > li").mouseenter(function(){
    $(".nav > ul > li >ul").stop().slideDown(200);
});
$(".nav > ul > li").mouseleave(function(){
    $(".nav > ul > li > ul").stop().slideUp(200);
});

$(document).ready(function(){
    var tabBtn =$(".tab-btn > ul > li"); //버튼이 클릭할 위치를 표기
    var tabCont = $(".tab-cont > div"); // 탭버튼클릭할때 div변경
    
    tabCont.hide().eq(0).show();

    tabBtn.click(function(e){  // 클릭이벤트 함수

        e.preventDefault();

        var target=$(this);
        var index=target.index(); //

        tabBtn.removeClass("active");//1 || 2번지우고
        target.addClass("active"); // 1 || 2번 표기
        tabCont.css("display","none"); 
        tabCont.eq(index).css("display","block"); 
    });
});






// 이미지 슬라이드 좌우
var slideCount = $(".slideImg").length;
var currentIndex= 0;
var slidePosition;
setInterval(function(){
    if(currentIndex < slideCount - 1){
        currentIndex++;
    }else {
        currentIndex=0;
    }
    slidePosition= currentIndex * (-1200)+"px";
    $(".slideList").animate({left:slidePosition},400);    
}, 3000);

// var currentIndex=0;
// $(".slideList").children("div.gt(0)").hide();
// var current = 0;
// setInterval(function(){
//     var next = (current + 1 ) % 3;
//     $(".slideList").find("div").eq(current).fadeOut();
//     $(".slideList").find("div").eq(next).fadeIn();
//     current = next;
// }, 3000);
$(".layerPopup").click(function(e){
    e.preventDefault();
    $(".layer").show();
});
$(".layer .close").click(function(e){
    e.preventDefault();
    $(".layer").hide();
});