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
