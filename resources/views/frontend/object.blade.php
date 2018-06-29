@extends('frontend.layouts.master')
@section('head')
<title>{!! $object->title !!}</title>
<style>{!! $object->style !!}</style>
@endsection

@section('content')

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
<div class="containerObject">
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
					<style>
						.box-7 {
							display: block;
							background-image: url('/img/objects/izumrud/izumrud.jpg');
						}
						.blockButton {
							display: block;
							width: 50px;
							height: 50px;
							background-color: #fcca00;
							color: #fff;
							cursor: pointer;
							position: absolute;
							top: 50%;
							left: 45%;
							font-size: 2em;
							border: 1px solid #000;
							text-align: center;
							line-height: 50px;
						}
						.bb2 {
							top: 50%;
							left: 55%;
						}
						.blockButton:active {
							line-height: 55px;
							background-color: #fcca00c3;
						}
					</style>
					<!-- Block window -->
					<div class="fbox-blocks">
								@foreach($box_block as $box) 
									<div class="box_inner box-{{ $box->id }}">
					                	{!! $box->text !!}
					                </div>
					            @endforeach
						<div class="box_inner box-7">
							<a href="#a" class="blockButton" data-show="8" data-hide="7" data-block="A">A</a>
							<a href="#b" class="blockButton bb2" data-show="9" data-hide="7" data-block="B">B</a>
							<p class="shadow">Выберите блок</p>		
						</div>
					</div>
					<!-- End of block window -->
					<!-- Floors window -->
					<div class="fbox-floors" style="background-image: url('/img/objects/{{ $object->img }}');">	
								@foreach($box_floor as $box) 
									<div class="box_inner box-{{ $box->id }}">
					                	{!! $box->text !!}
					                </div>
					            @endforeach
					            <div class="box_inner box-8">
					            	<a class="backButton" data-id="1"><</a>	
				                	<button class="startBtn floorButton" data-show="10" data-hide="8" data-floor="1">1</button>
									<button class="startBtn floorButton" data-show="11" data-hide="8" data-floor="2">2</button>
									<button class="startBtn floorButton" data-show="11" data-hide="8" data-floor="3">3</button>
									<button class="startBtn floorButton" data-show="11" data-hide="8" data-floor="4">4</button>
									<button class="startBtn floorButton" data-show="11" data-hide="8" data-floor="5">5</button>
									<button class="startBtn floorButton" data-show="11" data-hide="8" data-floor="6">6</button>
									<button class="startBtn floorButton" data-show="11" data-hide="8" data-floor="7">7</button>
									<button class="startBtn floorButton" data-show="12" data-hide="8" data-floor="8">8</button>
									<p>Выберите этаж</p>
				                </div>
				          		<div class="box_inner box-9">
				          			<a class="backButton" data-id="1"><</a>	
				                	<button class="startBtn floorButton" data-show="13" data-hide="9" data-floor="1">1</button>
									<button class="startBtn floorButton" data-show="14" data-hide="9" data-floor="2">2</button>
									<button class="startBtn floorButton" data-show="14" data-hide="9" data-floor="3">3</button>
									<button class="startBtn floorButton" data-show="14" data-hide="9" data-floor="4">4</button>
									<button class="startBtn floorButton" data-show="14" data-hide="9" data-floor="5">5</button>
									<button class="startBtn floorButton" data-show="14" data-hide="9" data-floor="6">6</button>
									<button class="startBtn floorButton" data-show="14" data-hide="9" data-floor="7">7</button>
									<button class="startBtn floorButton" data-show="15" data-hide="9" data-floor="8">8</button>
									<p>Выберите этаж</p>
				                </div>
					</div>
					<!-- End of floors  window-->
					<!-- Plans window -->
					<div class="fbox-plans">
								@foreach($box_plan as $box) 
									<div class="box_inner box-{{ $box->id }}">
					                	{!! $box->text !!}
					                </div>
					            @endforeach
<style>
	.plan.plan-a1 {
		position: absolute;
		width: 80%;
		top: 34%;
		left: 10%;
	}
	.plan.plan-a2 {
	    position: absolute;
	    width: 55%;
	    top: 29%;
	    left: 22%;
	}
	.svgMap a {
		cursor: pointer;
	}
	.svgMap a:hover path {
		fill: #f0ff0066;
	}
</style>
					            <div class="box_inner box-10">
					               <a href="" class="backButton" data-id="2"><</a>	
										<img src="/img/plans/izumrud/A1.png" alt="" class="plan plan-a1" usemap="#image-map-plan-10" id="image-map-1"> 

										<svg viewbox="0 0 910 283" class="plan plan-a1 svgMap">
											<a title="3-комнатная" class="planButton" data-show="16" data-hide="10" data-sq="1">
												<path d="m 4.806338,7.4366194 180.237672,-0.8010563 1.60212,132.1742969 -87.315144,1.60211 0.801054,42.45599 -33.644364,4.00528 2.403169,93.72359 L 0,283 v 0 z" fill="#00000022" >
											</a>
											<a title="2-комнатная" class="planButton" data-show="17" data-hide="10" data-sq="1">
												<path d="m 190.75534,133.69011 0.53135,10.09569 -1.0627,1.59405 -88.73577,0.53136 1.0627,37.72598 -1.59406,4.78217 -29.224351,-0.53135 -1.062704,90.32982 H 278.4284 L 276.303,134.75282 Z" fill="#00000022" >
											</a>
											<a title="5-комнатная" class="planButton" data-show="18" data-hide="10" data-sq="1">
												<path d="m 283.74192,6.6970033 174.81478,0.531352 h 3.18812 l -0.53136,273.1148847 -179.06559,-1.0627 z" fill="#00000022" >
											</a>

											<a title="3-комнатная" class="planButton" data-show="19" data-hide="10" data-sq="1">
												<path d="m 466.52698,6.6970033 122.7423,0.531352 -1.59406,136.5574447 43.03951,0.53135 0.53135,134.43203 -166.8445,-2.1254 z" fill="#00000022" >
											</a>
											<a title="3-комнатная" class="planButton" data-show="20" data-hide="10" data-sq="1">
												<path d="m 903.82961,191.60747 -85.01631,-3.18811 2.65676,-60.04277 -97.76875,-0.53135 -0.53135,15.40921 -91.39253,0.53135 1.0627,133.90068 272.58354,1.59406 z" fill="#00000022" >
											</a>
											<a title="2-комнатная" class="planButton" data-show="21" data-hide="10" data-sq="1">
												<path d="m 723.16996,6.6970033 181.72235,-2.1254076 1.59406,182.7850643 -83.9536,-0.53136 -0.53135,-63.23087 -99.36281,2.1254 z" fill="#00000022" >
											</a>																						
										</svg>
										<p>Выберите планировку</p> 	
					            </div>

					            <div class="box_inner box-11">
					               <a href="" class="backButton" data-id="2"><</a>	
										<img src="/img/plans/izumrud/A2-7.png" alt="" class="plan plan-a1" usemap="#image-map-plan-10" id="image-map-1"> 

										<svg viewbox="0 0 910 283" class="plan plan-a1 svgMap">																					
										</svg>
										<p>Выберите планировку</p> 	
					            </div>

					        	<div class="box_inner box-12">
					               <a href="" class="backButton" data-id="2"><</a>	
										<img src="/img/plans/izumrud/A8.png" alt="" class="plan plan-a1" usemap="#image-map-plan-10" id="image-map-1"> 

										<svg viewbox="0 0 910 283" class="plan plan-a1 svgMap">																					
										</svg>
										<p>Выберите планировку</p> 	
					            </div>

					            <div class="box_inner box-13">
					               <a href="" class="backButton" data-id="2"><</a>	
										<img src="/img/plans/izumrud/B1.png" alt="" class="plan plan-a2" usemap="#image-map-plan-10" id="image-map-1"> 

										<svg viewbox="0 0 910 283" class="plan plan-a2 svgMap">																					
										</svg>
										<p>Выберите планировку</p> 	
					            </div>

					            <div class="box_inner box-14">
					               <a href="" class="backButton" data-id="2"><</a>	
										<img src="/img/plans/izumrud/B2-7.png" alt="" class="plan plan-a2" usemap="#image-map-plan-10" id="image-map-1"> 

										<svg viewbox="0 0 910 283" class="plan plan-a2 svgMap">																					
										</svg>
										<p>Выберите планировку</p> 	
					            </div>

					            <div class="box_inner box-15">
					               <a href="" class="backButton" data-id="2"><</a>	
										<img src="/img/plans/izumrud/B8.png" alt="" class="plan plan-a2" usemap="#image-map-plan-10" id="image-map-1"> 

										<svg viewbox="0 0 910 283" class="plan plan-a2 svgMap">																					
										</svg>
										<p>Выберите планировку</p> 	
					            </div>
					</div>
					<!-- End of plan  -->
					<!-- Flat description -->
					<div class="fbox-desc">
								@foreach($box_flat as $box) 
									<div class="box_inner box-{{ $box->id }}">
					                	{!! $box->text !!}
					                </div>
					            @endforeach
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

<style>


</style>
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

    



    document.getElementById("floorText").innerHTML = floor + "";
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

