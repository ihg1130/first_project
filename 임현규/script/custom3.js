$(".nav > ul > li").mouseover(function(){
    $(this).find(".submenu").stop().slideDown(200);
});

$(".nav > ul > li").mouseout(function(){
    $(this).find(".submenu").stop().slideUp(200);
});

// $(".nav > ul > li").mouseover(function(){
//     $(this).find(".submenu").stop().show(200);
// });

// $(".nav > ul > li").mouseout(function(){
//     $(this).find(".submenu").stop().hide(200);
// });

// $(".nav > ul >li").mouseenter(function(){   
//     $(".nav > ul > li > ul").stop().slideDown(200);
// });
//  $(".nav > ul > li").mouseleave(function(){
//     $(".nav > ul > li >ul").stop().slideUp(200);
//  });