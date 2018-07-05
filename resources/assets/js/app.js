"use strict";

/**************** JSMASKEDINPUT *********************/
$(document).ready(function(){
    $('#phone_mask').mask('+7 (799) 999-99-99');
});

/************** ЭФФЕКТ ПАДЕНИЯ КАПЛИ ************/
$(".Btn").ripple({
	maxDiameter: "5em",
    dragging: false,
    scaleMode: 0
});

/************** СЛАЙДЕР НА СТРАНИЦЕ ПРОЕКТЫ ************/
$(".owl-carousel").owlCarousel({
 	loop:true,
    margin:10,
    responsive:{
        0:{
            items:1
        }
    },
    autoplay:true,
    autoplaySpeed:1000,
	autoplayTimeout: 5000,
    autoplayHoverPause:true,
    URLhashListener:true,
    startPosition: 'URLHash'
});
$(".owl-car").owlCarousel({
 	loop:true,
    margin:10,
    responsive:{
        0:{
            items:4
        }
    },
    autoplay:true,
    autoplaySpeed:1000,
	autoplayTimeout: 5000,
    autoplayHoverPause:true,
    URLhashListener:true,
    startPosition: 'URLHash'
});

/************** ВЫБОР БЛОКА *********************/


$('#blockLink').click(function(){
    $('.fbox-req').hide();
    $('.fbox-desc').hide();
    $('.fbox-plans').hide();
    $('.fbox-floors').hide();
    $('.fbox-blocks').show();

    $("#dis").hide();
    $('#floorLink').hide();
    $('#floorText').hide();
    $('#planLink').hide();
    $('#planText').hide();
    $('#sqText').hide();
});
/*********** ВЫБОР ЭТАЖА ********/

$('#floorLink').click(function(){
    $('.fbox-req').hide();
    $('.fbox-desc').hide();
    $('.fbox-plans').hide();
    $('.fbox-floors').show();

    $("#dis").hide();
    $('#planLink').hide();
    $('#planText').hide();
    $('#sqText').hide();
});

/***************** ВЫБОР ПЛАНА ******************/

$('#planLink').click(function(){
    $('.fbox-req').hide();
    $('.fbox-desc').hide();
    $('.fbox-plans').show();

    $("#dis").hide();
    $('#sqText').hide();
});
/************** ОСТАВИТЬ ЗАЯВКУ ******************/

$('.requestButton').click(function(){
    $('.fbox-desc').hide();
    $('.fbox-req').slideDown();
    $("#dis").show();
});


/********** SCROLL ***************/
$(window).scroll(function(){
    if($(window).scrollTop() >= 900){
        $("#rotated img").show();
    }
})


/************** FIRST_BLOCK ANIMATE ********************/

$(document).ready(function(){
    /********* INDEX PAGE ***************/
    $("#main-block h3").css({
        'animation':'slideTop 0.3s ease',
        'position' : 'relative'
    });
    $("#main-block h3").show();
    
    $("#main-block h1").css({
        'animation':'slideLeft 0.4s ease',
        'position' : 'relative'
    });
    $("#main-block h1").show();

    $("#main-block p").css({
        'animation':'slideRight 0.5s ease',
        'position' : 'relative'
    });
    $("#main-block p").show();
    
    $("#main-block a").css({
        'animation':'slideDown 0.6s ease',
        'position' : 'relative'
    });
    $("#main-block a").show();

    /**************ABOUT PAGE ***************/
    $("#about-block h1").css({
        'animation':'slideLeft 0.4s ease',
        'position' : 'relative'
    });
    $("#about-block h1").show();

    $("#about-block p").css({
        'animation':'slideRight 0.5s ease',
        'position' : 'relative'
    });
    $("#about-block p").show();

    /**************SERVICES PAGE ***************/
    $(".mainImg h3").css({
        'animation':'slideLeft 0.4s ease',
        'position' : 'relative'
    });
    $(".mainImg h3").show();

    $(".mainImg p").css({
        'animation':'slideRight 0.5s ease',
        'position' : 'relative'
    });
    $(".mainImg p").show(); 
    /********* Projects PAGE ***************/
    $("#projects-block h3").css({
        'animation':'slideTop 0.3s ease',
        'position' : 'relative'
    });
    $("#projects-block h3").show();
    
    $("#projects-block h1").css({
        'animation':'slideLeft 0.4s ease',
        'position' : 'relative'
    });
    $("#projects-block h1").show();

    $("#projects-block p").css({
        'animation':'slideRight 0.5s ease',
        'position' : 'relative'
    });
    $("#projects-block p").show();
    
    $("#projects-block a").css({
        'animation':'slideDown 0.6s ease',
        'position' : 'relative'
    });
    $("#projects-block a").show();
    /********* CONTACTS PAGE ***************/    
    $("#contacts-block h1").css({
        'animation':'slideLeft 0.4s ease',
        'position' : 'relative'
    });
    $("#contacts-block h1").show();

    $("#contacts-block p").css({
        'animation':'slideRight 0.5s ease',
        'position' : 'relative'
    });
    $("#contacts-block p").show();
    $("#contacts-block a").css({
        'animation':'slideDown 0.6s ease',
        'position' : 'relative'
    });
    $("#contacts-block a").show();  
});



