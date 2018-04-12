var xPos,yPos;

$(".Btn").click(function(e){
	xPos = event.pageX;
	yPos = event.pageY;
	console.log(xPos." ".yPos);
});

	$(".Btn").ripple({
	  scaleMode: false,
	  maxDiameter: "100%",
	  fixedPos: [xPos, yPos]
	});