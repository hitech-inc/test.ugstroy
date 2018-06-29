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
						<p id="floorText"></p>
						<p>Этаж</p>
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
						.bb2 {
							top: 50%;
							left: 55%;
						}
					</style>
					<!-- Block window -->
					<div class="fbox-blocks">

								@foreach($box_block as $box) 
									<div class="box_inner box-{{ $box->id }}">

					                	{!! $box->text !!}
					                	<p class="shadow">Выберите блок</p>	
					                </div>
					            @endforeach

					</div>
					<!-- End of block window -->
					<!-- Floors window -->
					<div class="fbox-floors">	

								@foreach($box_floor as $box) 
									<div class="box_inner box-{{ $box->id }}">
					                	{!! $box->text !!}
					                	<p>Выберите этаж</p>
					                </div>
					            @endforeach

					</div>
					<!-- End of floors  window-->
					<!-- Plans window -->
					<div class="fbox-plans">

								@foreach($box_plan as $box) 
									<div class="box_inner box-{{ $box->id }}">
										<a href="" class="backButton" data-id="2"><</a>	
					                	{!! $box->text !!}
					                	<p>Выберите планировку</p> 
					                </div>
					            @endforeach

					</div>
					<!-- End of plan  -->
					<!-- Flat description -->
					<div class="fbox-desc">

								@foreach($box_flat as $box) 

									<div class="box_inner box-{{ $box->id }}">
										<a class="backButton" data-id="3"><</a>
					                	{!! $box->text !!}
					                </div>
					                <a class="requestButton">Оставить заявку</a>
					            @endforeach
<style>
.flat-img {
	width: 28%;
	top: 16%;
	left: 8%;
	position: absolute;
}
.fi1 {
	width: 28%;
	top: 16%;
	left: 8%;
}

</style>
					            <div class="box_inner box-">
					                
<img src="/img/plans/izumrud/A1/1.png" alt="" class="flat-img fi6">
<ol>
	<li>Гостинная	 <span>м<sup>2</sup></span><span>24.3</span></li>
	<li>Кухня	     <span>м<sup>2</sup></span><span>20.0</span></li>
	<li>Спальня	 <span>м<sup>2</sup></span><span>21.9</span></li>
	<li>Сан. узел	 <span>м<sup>2</sup></span><span>6.0</span></li>
	<li>Сан. узел	 <span>м<sup>2</sup></span><span>6.0</span></li>
	<li>Холл	 <span>м<sup>2</sup></span><span>30.6</span></li>
</ol>
<p class="flat-title">2-комнатная</p>
<p class="flat-subtitle">Общая площадь 108.0<sup style="color: #000;">2</sup></p>
										
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

<style>


</style>
@endsection


@section('scripts')

<script>
	

{!! $object->script !!}

/*********** ВЫБОР БЛОКА ********/
$('.blockButton').click(function(){
    var id = $(this).data('block');
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

    document.getElementById("blockText").innerHTML = id;
    document.getElementById("blockLink").innerHTML = id + " блок";
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

