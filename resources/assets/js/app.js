"use strict";


/*var clearAllTimers = function(){
  var lastID = 0;

  return function(){
    var currentID = setTimeout(function(){}, 1);
    for(var id = currentID; id > lastID; id--){
      clearTimeout(id);
    };
    lastID = currentID;
  };
}();

setInterval(function(){
  alert("test");
}, 100);
clearAllTimers();*/



$(".Btn").ripple({
	maxDiameter: "5em",
    dragging: false,
    scaleMode: 0
});

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


/*var numberOfSlide,
	prevSlide;



setInterval(timer, 5000);

function timer() {
	console.log(numberOfSlide);
	$('.pickline div:nth-child('+ numberOfSlide +') a').addClass('filler');
	$('.pickline div:nth-child('+ prevSlide +') a').removeClass('filler');
	prevSlide = numberOfSlide;
}

*/






/*Этот код написан для выбора этажа*/

var heightOfBlock = 750,
    widthOfBlock = 1072.5,
    relativeY;

$('.fbox-floors area').mousemove(function(){

    var coords = $(this).attr('coords');
    var StringY = coords.split(",");
    var y = Number(StringY[1]); 
    relativeY = y/heightOfBlock * 100;
    console.log(relativeY);
    var bottom = 100 - relativeY - 14.6;
    $('.dom_light').css('bottom', bottom + '%');
});



/************** ВЫБОР БЛОКА *********************/

$('.blockButton').click(function(){
    var id = $(this).data('id');
    $('.fbox-blocks').hide();
    $('.fbox-floors').fadeIn();
    $('#blockLink').show();
    $('#blockText').show();
    $("#dis").hide();
    document.getElementById("blockText").innerHTML = id;
    document.getElementById("blockLink").innerHTML = id + " блок";
});

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

$('.floorButton').click(function(){
    var floor = $(this).attr('title');
    $('.fbox-floors').hide();
    $('.fbox-plans').fadeIn();
    $('#floorLink').show();
    $('#floorText').show();
    $("#dis").hide();
    document.getElementById("floorText").innerHTML = floor + " / 15";
    document.getElementById("floorLink").innerHTML = floor + " этаж";
});

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

$('.planButton').click(function(){
    var plan = $(this).attr('title');
    var square = $(this).data('sq');
    $('.fbox-plans').hide();
    $('.fbox-desc').fadeIn();
    $('#planLink').show();
    $('#planText').show();
    $('#sqText').show();
        $("#dis").hide();
    document.getElementById("planText").innerHTML = plan;
    document.getElementById("sqText").innerHTML = square + " м<sup>2</sup>";
    document.getElementById("planLink").innerHTML = plan + " (SNKB1-55)";
});

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

/************** КНОПКА НАЗАД OBJECT******************/

$('.backButton').click(function(e){
    e.preventDefault();
    var id = $(this).data('id');
    switch(id) {
        case 1:
            $('.fbox-floors').hide();
            $('.fbox-blocks').show();
            $('#floorLink').hide();
            $('#floorText').hide();
            $('#planLink').hide();
            $('#planText').hide();
            $('#sqText').hide();
            break;
        case 2:
            $('.fbox-plans').hide();
            $('.fbox-floors').show();
            $('#planLink').hide();
            $('#planText').hide();
            $('#sqText').hide();
            break;
        case 3:
            $('.fbox-desc').hide();
            $('.fbox-plans').show();
            $('#sqText').hide();
            break;
        case 4:
            $('.fbox-req').hide();
            $('.fbox-desc').show();
            break;
    }
});