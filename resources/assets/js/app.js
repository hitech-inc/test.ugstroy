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

/*пытался сделать выбор этажа*/
/*var heightFloorBox = 750,
    widthFloorBox = 1072.5;
var absoluteY,
    absoluteX;

var floor1 = '10',
    floor2 = '15',
    floor3 = '20',
    floor4 = '25',
    floor5 = '30',
    floor6 = '35',
    floor7 = '40',
    floor8 = '45',
    floor9 = '50',
    floor10 = '55',
    floor11 = '60',
    floor12 = '70',
    floor13 = '75',
    floor14 = '80',
    floor15 = '90';


$(".fbox-floors").mousemove(function(e) {
  var offset = $(this).offset();
  var relativeX = (e.pageX - offset.left);
  var relativeY = (e.pageY - offset.top); 
  absoluteY = relativeY / heightFloorBox * 100;
  absoluteX = relativeX / widthFloorBox * 100;

  if(absoluteY < 6.66 && absoluteX > 30 && absoluteX < 70){
    $('.dom_light').css('bottom',floor1 + '%');
    $('.tofloor').attr("href", "5");
  }

  if(absoluteY <  && absoluteY > 6.66 && absoluteX > 30 && absoluteX < 70){
    $('.dom_light').css('bottom',floor2 + '%');
    $('.tofloor').attr("href", "5");
  }

  if(absoluteY < 70 && absoluteY > 50 && absoluteX > 30 && absoluteX < 70){
    $('.dom_light').css('bottom',floor3 + '%');
    $('.tofloor').attr("href", "5");
  }

  if(absoluteY < 70 && absoluteY > 50 && absoluteX > 30 && absoluteX < 70){
    $('.dom_light').css('bottom',floor4 + '%');
    $('.tofloor').attr("href", "5");
  }

  if(absoluteY < 70 && absoluteY > 50 && absoluteX > 30 && absoluteX < 70){
    $('.dom_light').css('bottom',floor5 + '%');
    $('.tofloor').attr("href", "5");
  }

  if(absoluteY < 70 && absoluteY > 50 && absoluteX > 30 && absoluteX < 70){
    $('.dom_light').css('bottom',floor6 + '%');
    $('.tofloor').attr("href", "5");
  }

  if(absoluteY < 70 && absoluteY > 50 && absoluteX > 30 && absoluteX < 70){
    $('.dom_light').css('bottom',floor7 + '%');
    $('.tofloor').attr("href", "5");
  }

  if(absoluteY < 70 && absoluteY > 50 && absoluteX > 30 && absoluteX < 70){
    $('.dom_light').css('bottom',floor8 + '%');
    $('.tofloor').attr("href", "5");
  }

  if(absoluteY < 70 && absoluteY > 50 && absoluteX > 30 && absoluteX < 70){
    $('.dom_light').css('bottom',floor9 + '%');
    $('.tofloor').attr("href", "5");
  }

  if(absoluteY < 70 && absoluteY > 50 && absoluteX > 30 && absoluteX < 70){
    $('.dom_light').css('bottom',floor10 + '%');
    $('.tofloor').attr("href", "5");
  }

  if(absoluteY < 70 && absoluteY > 50 && absoluteX > 30 && absoluteX < 70){
    $('.dom_light').css('bottom',floor11 + '%');
    $('.tofloor').attr("href", "5");
  }

  if(absoluteY < 70 && absoluteY > 50 && absoluteX > 30 && absoluteX < 70){
    $('.dom_light').css('bottom',floor12 + '%');
    $('.tofloor').attr("href", "5");
  }

  if(absoluteY < 70 && absoluteY > 50 && absoluteX > 30 && absoluteX < 70){
    $('.dom_light').css('bottom',floor13 + '%');
    $('.tofloor').attr("href", "5");
  }

  if(absoluteY < 70 && absoluteY > 50 && absoluteX > 30 && absoluteX < 70){
    $('.dom_light').css('bottom',floor14 + '%');
    $('.tofloor').attr("href", "5");
  }

  if(absoluteY < 70 && absoluteY > 50 && absoluteX > 30 && absoluteX < 70){
    $('.dom_light').css('bottom',floor15 + '%');
    $('.tofloor').attr("href", "5");
  }

    console.log(absoluteX + '   ' + absoluteY);
        

});*/