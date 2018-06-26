@extends('frontend.layouts.master')

@section('content')
<div class="containerObject">
	<div class="objectMainImg" style="background-image: url('/img/objects/{{ $object->img }}');">
		<div class="objectTopContent">
			<h3>{{ $object->type }}</h3>
			<h4>{{ $object->title }}</h4>
			<p>{{ $object->description }}</p>
			<a href="#contact" class="Btn" title="Посмотреть видео">Посмотреть видео</a>
		</div>
		<div class="or-right">
			<div>
				<p>500</p>
				<p>Продаются квартир</p>
			</div>
			<div>
				<p>2000</p>
				<p>Квартир продано</p>
			</div>
			<div>
				<p>350</p>
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
					<div>
						<p>{{ $object->title }}</p>
						<p>{{ $object->type }}</p>
					</div>
					<div>
						<p id="planText"></p>
						<p>количество комнат</p>
					</div>	
					<div>
						<p id="sqText"></p>
						<p>общая площадь</p>
					</div>					
				</div>
				<div id="flat">
						<div class="fbox-floors" style="background-image: url('/img/objects/{{ $object->img }}');display: block;">	
							
							<button class="startBtn floorButton">
								Начать
							</button>
						</div>
					<div class="fbox-plans">
						<a href="" class="backButton" data-id="2"><</a>	
						<img src="/img/plan.png" alt="" class="plan" usemap="#image-map-plan"> 

						<map name="image-map-plan" id="plan-map">
						    <area  class="planButton" alt="4-комнатная" title="4-комнатная" href="#4" coords="52,127,52,249,261,252,264,131,224,124,224,105,134,104,135,126" shape="poly">
						    <area  class="planButton" alt="4-комнатная" title="4-комнатная" href="#4" coords="528,131,531,252,736,253,739,131,657,131,656,107,571,109,573,128" shape="poly">
						    <area  class="planButton" alt="3-комнатная" title="3-комнатная" href="#3" coords="573,261,739,258,742,384,656,386,656,403,570,406" shape="poly">
						    <area  class="planButton" alt="3-комнатная" title="3-комнатная" href="#3" coords="55,257,222,260,224,400,139,399,138,383,56,378" shape="poly">
						    <area  class="planButton" alt="2-комнатная" title="2-комнатная" href="#2" coords="269,132,308,128,310,108,393,107,390,253,269,252" shape="poly">
						    <area  class="planButton" alt="2-комнатная" title="2-комнатная" href="#2" coords="402,107,489,108,491,123,522,132,526,250,405,252" shape="poly">
						    <area  class="planButton" alt="1-комнатная" title="1-комнатная" href="#1" coords="310,260,389,260,393,400,310,402" shape="poly">
						    <area  class="planButton" alt="1-комнатная" title="1-комнатная" href="#1" coords="405,258,484,258,484,402,402,400" shape="poly">
						</map>
						<p>Выберите планировку</p>
					</div>
					<div class="fbox-desc">
						<a class="backButton" data-id="3"><</a>	
						<img src="/img/plan-3.png" alt="" class="plan-3">
						<img src="/img/plan-2.png" alt="" class="plan-2">
						<img src="/img/plan-1.png" alt="" class="plan-1">
						<img src="/img/planDesc.png" alt="" class="plan-3d">
						<ol>
							<li>Холл	11,5</li>
							<li>Кухня	13,4</li>
							<li>Гостиная	 17,4</li>
							<li>Спальня 	13,9</li>
							<li>Ванная   	3,3</li> 
							<li>С/у	 2,5</li>
							<li>Лоджия	 2,6</li>
						</ol>
						<a class="requestButton">Оставить заявку</a>

					</div>
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
						<p><a id="blockLink"><a id="planLink">55 кв (SNKB1-55)</a> </p>
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
    title: 'ЖК ТОБЕ',
    icon: image
  });

}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCKfwH806ZqKTrWyaP6eHXRr-75xigyovY&callback=initMap"
    async defer></script>

@endsection

