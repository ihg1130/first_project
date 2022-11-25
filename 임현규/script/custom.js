$(".nav > ul > li").mouseover(function(){
    $(".nav > ul > li > ul").stop().slideDown(200);
});

$(".nav > ul > li").mouseleave(function(){
    $(".nav > ul > li > ul").stop().slideUp(200);
});

var currentIndex = 0;
setInterval(function(){
    if(currentIndex < 2) {
        currentIndex++;
    }
    else {
        currentIndex = 0;
    }
    var slidePosition = currentIndex * (-300)+"px";

    $(".slideList").animate({top:slidePosition},400);
},3000);

$(document).ready(function(){
    var tabbtn = $(".tabbtn > ul > li");
    var tabcon = $(".tabcon > div");

    tabcon.hide().eq(0).show();

    tabbtn.click(function(e){
        e.preventDefault();
        var target = $(this);
        var index = target.index();

        tabbtn.removeClass("active");
        target.addClass("active");
        tabcon.css("display", "none");
        tabcon.eq(index).css("display", "block");
    });
});

$(".layerPopup").click(function(e){
    e.preventDefault();
    $(".layer").show();
});
$(".layer .close").click(function(e){
    e.preventDefault();
    $(".layer").hide();
});
