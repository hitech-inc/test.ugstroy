@extends('frontend.layouts.master')
@section('head')
<title>{!! $object->title !!}</title>
<style>{!! $object->style !!}</style>
<style>
.flat-1 {
	width: 36%;
    top: 17%;
    left: 15%;
}
.flat-2 {
    width: 44%;
    top: 18%;
    left: 7%;
}
.flat-3 {
	width: 56%;
    top: 23%;
    left: 1%;
}
.flat-4 {
    width: 57%;
    top: 28%;
    left: 4%;
}
.plan-1 {
	width: 29%;
    top: 74%;
    left: 66%;
}
.plan-2 {
	width: 29%;
    top: 74%;
    left: 66%;
}
.plan-3 {
	width: 29%;
    top: 74%;
    left: 66%;
}
.plan-4 {
	width: 29%;
    top: 74%;
    left: 66%;
}
.fbox-desc ol {
	display: block;
	width: 25%;
	position: absolute;
	right: 7%;
	top: 26%;
	color: #000;
	font-size: 2em;
	line-height: 1.1em;
	padding-right: 10px; 
}
.fbox-desc ol li {
	width: 100%;
	display: block;
  	color: #000; 
}
.fbox-desc ol li span {
	display: block;
	float: right; 
	color: #09c;
}
.fbox-desc ol li span sup{ 
	color: #09c;
}
.plan-title {
	position: absolute;
    color: #000;
    font-size: 2.5em;
    font-family: Impact;
    top: 6%;
    right: 7%;
}
.plan-subtitle {
	position: absolute;
    color: #000;
    font-size: 1.8em;
	font-family: Helvetica;
    top: 13%;
    right: 7%;
}
</style>
@endsection

@section('content')

<div class="containerObject">
	<div class="objectMainImg" style="background-image: url('/img/objects/{{ $object->img }}');">
		<div class="objectTopContent">
			<h3 style="text-transform: uppercase;    text-shadow: 1px 1px 1px #000;" >{{ $object->type }}</h3>
			<h4 style="text-transform: uppercase;    text-shadow: 1px 1px 1px #000;" >{{ $object->title }}</h4>
			<p style="text-transform: uppercase;    text-shadow: 1px 1px 0.5px #000;" >{{ $object->description }}</p>
			<a href="#contact"  style="text-transform: uppercase;" class="Btn" title="Посмотреть видео">Посмотреть трейлер</a>
		</div>
		<div class="or-right">
			<div>
				<p>48</p>
				<p>квартир</p>
			</div>
			<div>
				<p>20</p>
				<p>Квартир продано</p>
			</div>
			<div>
				<p>10</p>
				<p>Ожидают</p>
			</div>
		</div>
	</div>
	<div id="choose-block">
		<div class="container-flat">
			<div class="left">
				<img src="/img/choose.png" alt="">
			</div>
			<div class="right">
				<div class="top-line">
					<div class="bd1">
						<p>{{ $object->title }}</p>
						<p>{{ $object->type }}</p>
					</div>
					<div class="bd2">
						<p id="blockText">01</p>
						<p>блок</p>
					</div>
					<div class="bd3">
						<p id="floorText">7 / 15</p>
						<p>количество этажей</p>
					</div>	
					<div class="bd4">
						<p id="planText">3x</p>
						<p>количество комнат</p>
					</div>	
					<div class="bd5">
						<p id="sqText"></p>
						<p>общая площадь</p>
					</div>						
				</div>
				<div id="flat">
					<!-- Block window -->
					<div class="fbox-blocks">
						<div class="box-inner box-1">
							<a href="#third-block" class="blockButton" data-show="3" data-hide="1">	
								<img src="/img/b31.png" alt="" class="b31">
						        <img src="/img/b32.png" alt="" class="b32"></a>
							<a href="#second-block" class="blockButton" data-show="3" data-hide="1">
								<img src="/img/b21.png" alt="" class="b21">
								<img src="/img/b22.png" alt="" class="b22">
							</a>
							<a href="#first-block" class="blockButton" data-show="3" data-hide="1">
								<img src="/img/b11.png" alt="" class="b11">
								<img src="/img/b12.png" alt="" class="b12">
							</a>
							<img src="/img/grass.png" alt="" class="grass" >
							<p>Выберите блок</p>		
						</div>
					</div>
					<!-- End of block window -->
					<!-- Floors window -->
					<div class="fbox-floors" style="background-image: url('/img/objects/{{ $object->img }}');">	
						<div class="box_inner box-3">
							<button class="startBtn floorButton" data-show="20" data-hide="3" data-floor="1">1</button>
							<button class="startBtn floorButton" data-show="20" data-hide="3" data-floor="2">2</button>
							<button class="startBtn floorButton" data-show="20" data-hide="3" data-floor="3">3</button>
							<button class="startBtn floorButton" data-show="20" data-hide="3" data-floor="4">4</button>
							<button class="startBtn floorButton" data-show="20" data-hide="3" data-floor="5">5</button>
							<button class="startBtn floorButton" data-show="20" data-hide="3" data-floor="6">6</button>
							<p>Выберите этаж</p>
						</div>
					</div>
					<!-- End of floors  window-->
					<!-- Plans window -->
					<div class="fbox-plans">
						<div class="box_inner box-20">
							<a href="" class="backButton" data-id="2"><</a>	
							<img src="/img/plans/sapphire/plan.png" alt="" class="plan" usemap="#image-map-plan-20"> 

							<map name="image-map-plan-20" id="plan-map">
							    <area  class="planButton" data-show="35" data-hide="20" data-sq="190" alt="4-комнатная" title="4-комнатная" href="#4" coords="52,127,52,249,261,252,264,131,224,124,224,105,134,104,135,126" shape="poly">
							    <area  class="planButton" data-show="35" data-hide="20" data-sq="190" alt="4-комнатная" title="4-комнатная" href="#4" coords="528,131,531,252,736,253,739,131,657,131,656,107,571,109,573,128" shape="poly">
							    <area  class="planButton" data-show="36" data-hide="20" data-sq="190" alt="3-комнатная" title="3-комнатная" href="#3" coords="573,261,739,258,742,384,656,386,656,403,570,406" shape="poly">
							    <area  class="planButton" data-show="36" data-hide="20" data-sq="160" alt="3-комнатная" title="3-комнатная" href="#3" coords="55,257,222,260,224,400,139,399,138,383,56,378" shape="poly">
							    <area  class="planButton" data-show="37" data-hide="20" data-sq="160" alt="2-комнатная" title="2-комнатная" href="#2" coords="269,132,308,128,310,108,393,107,390,253,269,252" shape="poly">
							    <area  class="planButton" data-show="37" data-hide="20" data-sq="190" alt="2-комнатная" title="2-комнатная" href="#2" coords="402,107,489,108,491,123,522,132,526,250,405,252" shape="poly">
							    <area  class="planButton" data-show="38" data-hide="20" data-sq="90" alt="1-комнатная" title="1-комнатная" href="#1" coords="310,260,389,260,393,400,310,402" shape="poly">
							    <area  class="planButton" data-show="38" data-hide="20" data-sq="90" alt="1-комнатная" title="1-комнатная" href="#1" coords="405,258,484,258,484,402,402,400" shape="poly">
							</map>
							<p>Выберите планировку</p>
						</div>
					</div>
					<!-- End of plan  -->
					<!-- Flat description -->
					<div class="fbox-desc">
						<div class="box_inner box-35">
							<a class="backButton" data-id="3"><</a>
							<img src="/img/plans/sapphire/flat-4.png" alt="" class="flat-4">
							<img src="/img/plans/sapphire/plan-4.png" alt="" class="plan-4">
							<ol>
								<li>Холл	 <span>м<sup>2</sup></span><span>14.50</span></li>
								<li>С/у	     <span>м<sup>2</sup></span><span>1.75</span></li>
								<li>Ванная	 <span>м<sup>2</sup></span><span>2.96</span></li>
								<li>Ванная 	 <span>м<sup>2</sup></span><span>5.21</span></li>
								<li>Студия   <span>м<sup>2</sup></span><span>37.98</span></li> 
								<li>Спальня	 <span>м<sup>2</sup></span><span>21.69</span></li>
								<li>Спальня	 <span>м<sup>2</sup></span><span>20.97</span></li>
								<li>Спальня	 <span>м<sup>2</sup></span><span>15.82</span></li>
								<li>Лоджия	 <span>м<sup>2</sup></span><span>7.32</span></li>
							</ol>
							<p class="plan-title">4-комнатная</p>
							<p class="plan-subtitle">Общая площадь 124.54м<sup style="color: #000;">2</sup></p>
							<a class="requestButton">Оставить заявку</a>
						</div>
						<div class="box_inner box-36">
							<a class="backButton" data-id="3"><</a>
							<img src="/img/plans/sapphire/flat-3.png" alt="" class="flat-3">
							<img src="/img/plans/sapphire/plan-3.png" alt="" class="plan-3">
							<ol>
								<li>Холл	 <span>м<sup>2</sup></span><span>14.50</span></li>
								<li>С/у	     <span>м<sup>2</sup></span><span>1.75</span></li>
								<li>Ванная	 <span>м<sup>2</sup></span><span>2.96</span></li>
								<li>Re 	 <span>м<sup>2</sup></span><span>5.21</span></li>
								<li>Студия   <span>м<sup>2</sup></span><span>37.98</span></li> 
								<li>Спальня	 <span>м<sup>2</sup></span><span>21.69</span></li>
								<li>Спальня	 <span>м<sup>2</sup></span><span>20.97</span></li>
								<li>Спальня	 <span>м<sup>2</sup></span><span>15.82</span></li>
								<li>Лоджия	 <span>м<sup>2</sup></span><span>7.32</span></li>
							</ol>
							<p class="plan-title">3-комнатная</p>
							<p class="plan-subtitle">Общая площадь 101.61м<sup style="color: #000;">2</sup></p>
							<a class="requestButton">Оставить заявку</a>
						</div>
						<div class="box_inner box-37">
							<a class="backButton" data-id="3"><</a>
							<img src="/img/plans/sapphire/flat-2.png" alt="" class="flat-2">
							<img src="/img/plans/sapphire/plan-2.png" alt="" class="plan-2">
							<ol>
								<li>Холл	 <span>м<sup>2</sup></span><span>18.34</span></li>
								<li>С/у	     <span>м<sup>2</sup></span><span>1.76</span></li>
								<li>Ванная	 <span>м<sup>2</sup></span><span>2.76</span></li>
								<li>Студия 	 <span>м<sup>2</sup></span><span>27.81</span></li>
								<li>Спальня	 <span>м<sup>2</sup></span><span>24.00</span></li>
								<li>Лоджия	 <span>м<sup>2</sup></span><span>7.56</span></li>
							</ol>
							<p class="plan-title">2-комнатная</p>
							<p class="plan-subtitle">Общая площадь 78.45м<sup style="color: #000;">2</sup></p>
							<a class="requestButton">Оставить заявку</a>
						</div>
						<div class="box_inner box-38">
							<a class="backButton" data-id="3"><</a>
							<img src="/img/plans/sapphire/flat-1.png" alt="" class="flat-1">
							<img src="/img/plans/sapphire/plan-1.png" alt="" class="plan-1">
							<ol>
								<li>Холл	 <span>м<sup>2</sup></span><span>10.52</span></li>
								<li>С/у	     <span>м<sup>2</sup></span><span>1.76</span></li>
								<li>Ванная	 <span>м<sup>2</sup></span><span>2.76</span></li>
								<li>Кухня 	 <span>м<sup>2</sup></span><span>14.70</span></li>
								<li>Гостинная   <span>м<sup>2</sup></span><span>18.99</span></li> 
								<li>Лоджия	 <span>м<sup>2</sup></span><span>7.56</span></li>
							</ol>
							<p class="plan-title">1-комнатная</p>
							<p class="plan-subtitle">Общая площадь 52.51м<sup style="color: #000;">2</sup></p>
							<a class="requestButton">Оставить заявку</a>
						</div>
					</div>
					<!-- End of flat description  -->
					<!-- Request window -->
					<div class="fbox-req">	
						<a class="backButton" data-id="4"><</a>
						<form action="" id="req_form">
							<label for="name">Имя</label>
							<input type="text" name="name"> 
							<label for="name">Телефон</label>
							<input type="text" name="phone">
							<label for="name">Сообщение</label>
							<textarea name="text"></textarea>
						</form>
					</div>
				</div>
				<div class="bot-line">
					<div class="bl">
						<p>Вы выбрали:</p>
						<p><a id="blockLink" class="bd2">Блок 1</a> / <a id="floorLink" class="bd3">13 этаж</a> / <a id="planLink" class="bd4">55 кв (SNKB1-55)</a> </p>
					</div>
					<div class="bl">
						<a href="#rrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr" class="Btn" id ="dis" type="submit" form="data">Отправить заявку</a>
					</div>		
				</div>
			</div>
		</div>
	</div>
	<div class="objectDesc">
		{!! $object->text !!}
	</div>
</div>
	<div id="c-map">
	  <div class="cm-container">
	    <div class="cm-left">
	      <img src="/img/on_map.png" alt="more-text">
	    </div>
	    <div class="cm-right">
	      <div id="map"></div>
	    </div>
	  </div>
	</div>


@endsection


@section('scripts')


<script>
	

/************** ВЫБОР БЛОКА *********************/

/*$('#blockLink').click(function(){
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
});*/



{!! $object->script !!}

/*********** ВЫБОР БЛОКА ********/
$('.blockButton').click(function(){
    var id = $(this).data('id');
    $('.fbox-blocks').hide();
    $('.fbox-floors').fadeIn();
    $('#blockLink').show();
    $('#blockText').show();
    $("#dis").hide();

    box.block = '.box-' + $(this).data('hide');
    box.floor = '.box-' + $(this).data('show');

    console.log('hide = '+ box.block);
    console.log('show = '+ box.floor);

	$(box.block).hide();
	$(box.floor).show();

/*    document.getElementById("blockText").innerHTML = id;
    document.getElementById("blockLink").innerHTML = id + " блок";*/
});

/*********** ВЫБОР ЭТАЖА ********/


$('.floorButton').click(function(){
    var floor = $(this).data('floor');
    $('.fbox-floors').hide();
    $('.fbox-plans').fadeIn();
    $('#floorLink').show();
    $('#floorText').show();
    $("#dis").hide();

    box.floor = '.box-' + $(this).data('hide');
    box.plan = '.box-' + $(this).data('show');

    console.log('hide = '+ box.floor);
    console.log('show = '+ box.plan);

	$(box.floor).hide();
	$(box.plan).show();

    



    document.getElementById("floorText").innerHTML = floor + " / 15";
    document.getElementById("floorLink").innerHTML = floor + " этаж";
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


	box.plan = '.box-' + $(this).data('hide');
	box.flat = '.box-' + $(this).data('show');

    console.log('hide = '+ box.plan);
    console.log('show = '+ box.flat);

	$(box.plan).hide();
	$(box.flat).show();


    document.getElementById("planText").innerHTML = plan;
    document.getElementById("sqText").innerHTML = square + " м<sup>2</sup>";
    document.getElementById("planLink").innerHTML = plan + "";
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



		    console.log('hide = '+ box.floor);
		    console.log('show = '+ box.block);

			$(box.floor).hide();
			$(box.block).show();

            break;
        case 2:
            $('.fbox-plans').hide();
            $('.fbox-floors').show();
            $('#planLink').hide();
            $('#planText').hide();
            $('#sqText').hide();
            


		    console.log('hide = '+ box.plan);
		    console.log('show = '+ box.floor);

			$(box.plan).hide();
			$(box.floor).show();

            break;
        case 3:
            $('.fbox-desc').hide();
            $('.fbox-plans').show();
            $('#sqText').hide();



		    console.log('hide = '+ box.flat);
		    console.log('show = '+ box.plan);

			$(box.flat).hide();
			$(box.plan).show();

            break;
        case 4:
            $('.fbox-req').hide();
            $('.fbox-desc').show();
  

            break;
    }
});





</script>

<script>
function initMap() {
  var image = "/img/marker.png"
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 16,
    center: {lat: 42.349610, lng: 69.551717}
  });
  var marker = new google.maps.Marker({
    position: {lat: 42.349610, lng: 69.551717},
    map: map,
    title: 'ЖК',
    icon: image
  });

}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCKfwH806ZqKTrWyaP6eHXRr-75xigyovY&callback=initMap"
    async defer></script>
@endsection

