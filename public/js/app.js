"use strict";$(".Btn").ripple({maxDiameter:"5em",dragging:!1,scaleMode:0}),$(".owl-carousel").owlCarousel({loop:!0,margin:10,responsive:{0:{items:1}},autoplay:!0,autoplaySpeed:1e3,autoplayTimeout:5e3,autoplayHoverPause:!0,URLhashListener:!0,startPosition:"URLHash"}),$(".owl-car").owlCarousel({loop:!0,margin:10,responsive:{0:{items:4}},autoplay:!0,autoplaySpeed:1e3,autoplayTimeout:5e3,autoplayHoverPause:!0,URLhashListener:!0,startPosition:"URLHash"}),$(".blockButton").click(function(){var e=$(this).data("id");$(".fbox-blocks").hide(),$(".fbox-floors").fadeIn(),$("#blockLink").show(),$("#blockText").show(),$("#dis").hide(),document.getElementById("blockText").innerHTML=e,document.getElementById("blockLink").innerHTML=e+" блок"}),$("#blockLink").click(function(){$(".fbox-req").hide(),$(".fbox-desc").hide(),$(".fbox-plans").hide(),$(".fbox-floors").hide(),$(".fbox-blocks").show(),$("#dis").hide(),$("#floorLink").hide(),$("#floorText").hide(),$("#planLink").hide(),$("#planText").hide(),$("#sqText").hide()});var relativeY,heightOfBlock=750,widthOfBlock=1072.5;$(".fbox-floors area").mousemove(function(){var e=$(this).attr("coords").split(","),o=Number(e[1]);relativeY=o/heightOfBlock*100,console.log(relativeY);var i=100-relativeY-14.6;$(".dom_light").css("bottom",i+"%")}),$(".floorButton").click(function(){var e=$(this).attr("title");$(".fbox-floors").hide(),$(".fbox-plans").fadeIn(),$("#floorLink").show(),$("#floorText").show(),$("#dis").hide(),document.getElementById("floorText").innerHTML=e+" / 15",document.getElementById("floorLink").innerHTML=e+" этаж"}),$("#floorLink").click(function(){$(".fbox-req").hide(),$(".fbox-desc").hide(),$(".fbox-plans").hide(),$(".fbox-floors").show(),$("#dis").hide(),$("#planLink").hide(),$("#planText").hide(),$("#sqText").hide()}),$(".planButton").click(function(){var e=$(this).attr("title"),o=$(this).data("sq");$(".fbox-plans").hide(),$(".fbox-desc").fadeIn(),$("#planLink").show(),$("#planText").show(),$("#sqText").show(),$("#dis").hide(),document.getElementById("planText").innerHTML=e,document.getElementById("sqText").innerHTML=o+" м<sup>2</sup>",document.getElementById("planLink").innerHTML=e+" (SNKB1-55)"}),$("#planLink").click(function(){$(".fbox-req").hide(),$(".fbox-desc").hide(),$(".fbox-plans").show(),$("#dis").hide(),$("#sqText").hide()}),$(".requestButton").click(function(){$(".fbox-desc").hide(),$(".fbox-req").slideDown(),$("#dis").show()}),$(".backButton").click(function(e){switch(e.preventDefault(),$(this).data("id")){case 1:$(".fbox-floors").hide(),$(".fbox-blocks").show(),$("#floorLink").hide(),$("#floorText").hide(),$("#planLink").hide(),$("#planText").hide(),$("#sqText").hide();break;case 2:$(".fbox-plans").hide(),$(".fbox-floors").show(),$("#planLink").hide(),$("#planText").hide(),$("#sqText").hide();break;case 3:$(".fbox-desc").hide(),$(".fbox-plans").show(),$("#sqText").hide();break;case 4:$(".fbox-req").hide(),$(".fbox-desc").show()}});