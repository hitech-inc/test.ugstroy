@extends('frontend.layouts.master')

@section('content')
<div class="containerObject">
	<div class="objectMainImg">
		<div class="objectTopContent">
			<h3>15-ЭТАЖНЫЙ ДОМ </h3>
			<h4>«ТӨБЕ»</h4>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's sta
			ndard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a 
			type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining 
			essentially unchanged. It was popularised in the 2000s with the release of Letraset sheets containing Lorem Ipsum</p>
			<a href="#" title="СВЯЗАТЬСЯ С НАМИ">СВЯЗАТЬСЯ С НАМИ</a>
		</div>
		<div class="lprojects-row-3">
			<div class="lp3-left">
			</div>
			<div class="lp3-right">
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
	</div>
	<div id="choose-block">
		<div class="container-flat">
			<div class="left">
				<img src="/img/choose.png" alt="">
			</div>
			<div class="right">
				<div class="top-line">
					<div>
						<p>ТӨБЕ</p>
						<p>Жилой дом</p>
					</div>
					<div>
						<p id="blockText">01</p>
						<p>блок</p>
					</div>
					<div>
						<p id="floorText">7 / 15</p>
						<p>количество этажей</p>
					</div>	
					<div>
						<p id="planText">3x</p>
						<p>количество комнат</p>
					</div>	
					<div>
						<p id="sqText"></p>
						<p>общая площадь</p>
					</div>					
				</div>
				<div id="flat">
					<div class="fbox-blocks">
						<a href="#third-block" class="blockButton" data-id="C">	
							<img src="/img/b31.png" alt="" class="b31">
					        <img src="/img/b32.png" alt="" class="b32"></a>
						<a href="#second-block" class="blockButton" data-id="B">
							<img src="/img/b21.png" alt="" class="b21">
							<img src="/img/b22.png" alt="" class="b22">
						</a>
						<a href="#first-block" class="blockButton" data-id="A">
							<img src="/img/b11.png" alt="" class="b11">
							<img src="/img/b12.png" alt="" class="b12">
						</a>
						<img src="/img/grass.png" alt="" class="grass" >
						<p>Выберите блок</p>
					</div>
					<div class="fbox-floors">	
						<img src="/img/dom_behind.png" class="dom_behind">
							<img src="/img/dom_light.png" alt="" class="dom_light">	
							<img src="/img/dom.png" alt="" class="dom" usemap="#image-map-floor">
							<map name="image-map-floor">
							    <area class="floorButton" alt="" title="15" href="#15" coords="272,45,736,76" shape="rect">
							    <area class="floorButton" alt="" title="14" href="#14" coords="272,79,735,108" shape="rect">
							    <area class="floorButton" alt="" title="13" href="#13" coords="272,112,735,143" shape="rect">
							    <area class="floorButton" alt="" title="12" href="#12" coords="274,147,738,176" shape="rect">
							    <area class="floorButton" alt="" title="11" href="#11" coords="275,180,738,209" shape="rect">
							    <area class="floorButton" alt="" title="10" href="#10" coords="272,212,738,244" shape="rect">
							    <area class="floorButton" alt="" title="9" href="#9" coords="272,247,738,277" shape="rect">
							    <area class="floorButton" alt="" title="8" href="#8" coords="274,280,738,311" shape="rect"> 
							    <area class="floorButton" alt="" title="7" href="#7" coords="275,313,735,347" shape="rect">
							    <area class="floorButton" alt="" title="6" href="#6" coords="271,351,739,379" shape="rect">
							    <area class="floorButton" alt="" title="5" href="#5" coords="274,383,738,415" shape="rect">
							    <area class="floorButton" alt="" title="4" href="#4" coords="275,419,739,447" shape="rect">
							    <area class="floorButton" alt="" title="3" href="#3" coords="274,450,738,481" shape="rect">
							    <area class="floorButton" alt="" title="2" href="#2" coords="272,485,735,514" shape="rect">
							    <area class="floorButton" alt="" title="1" href="#1" coords="272,518,736,545" shape="rect">
							</map>
						<p>Выберите блок</p>
					</div>
					<div class="fbox-plans">	
						<img src="/img/plan.png" alt="" class="plan" usemap="#image-map-plan"> 
						<map name="image-map-plan">
    <area class="planButton" alt="" title="2" href="#3" data-sq="80" coords="40,-2,44,178,183,179,179,223,292,220,289,-2" shape="poly">
    <area class="planButton" alt="" title="1" href="#2" data-sq="50" coords="0,160,40,160,43,184,178,183,178,226,211,226,211,315,39,314,35,333,3,332" shape="poly">
    <area class="planButton" alt="" title="2" href="#1" data-sq="92" coords="44,320,291,324,287,457,256,464,256,489,139,492,139,462,43,460" shape="poly">
    <area class="planButton" alt="" title="2" href="#4" data-sq="85" coords="293,9,508,9,509,181,404,185,402,237,334,237,338,221,298,218" shape="poly">
    <area class="planButton" alt="" title="3" href="#5" data-sq="120" coords="517,11,663,5,663,40,759,47,763,169,800,172,800,252,660,249,650,226,587,221,583,268,448,270,444,235,410,237,408,190,512,185" shape="poly">
    <area class="planButton" alt="" title="3" href="#6" data-sq="135" coords="447,276,585,276,591,232,640,232,640,274,657,261,786,255,795,332,762,335,758,457,666,462,655,489,449,489" shape="poly">
</map>
						<p>Выберите планировку</p>
					</div>
					<div class="fbox-desc">	
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
						<p><a id="blockLink">Блок 1</a> / <a id="floorLink">13 этаж</a> / <a id="planLink">55 кв (SNKB1-55)</a> </p>
					</div>
					<div class="bl">
						<a href="#rrr" class="Btn" type="submit" form="data">Отправить заявку</a>
					</div>		
				</div>
			</div>
		</div>
	</div>
	<div class="objectDesc">
		<p>Жилой комплекс включает четыре 15-ти этажных дома. Со стороны проспект Тауке хана и бульвара Конаева предусмотрены гостевые автостоянки на 100 места. Просторная детская площадка, благоустроенная дворовая площадка, вся свободная от застройки территория засажена деревьями</p>
		<p>Общая площадь квартир: 300000 м2</p>
		<p>Общее количество квартир: 350</p>
		<p>Общая площадь коммерческих помещений: 5 810 м2</p>
		<p>1-й этаж: 2730м2</p>
		<p>2-й этаж: 3080м2</p>
		<p>Общая подземного паркинга: 11 040м2</p>
		<p>1-но комнатных: 57 | 2-х комнатных: 171 | 3-х комнатных: 57 | 4-х комнатных: 57</p>
		<p>В самом центре города, рядом с экологический чистым центральным парком, идет строительство 8- ми этажного жилого комплекса «Royal Park».</p>
		<p>Строительство ведется по последним технологиям, используя только самые лучшие для этого материалы и оборудования, от известных производителей.</p>
		<p>Территория дома охраняемая, видеонаблюдение, энергосберегающая система освещений территории.
		Видео домофоны, АВТОпаркинг, ресторан, в каждом подъезде лифты.И Все это 8- ми этажный жилой комплекс «Royal Park» по улице Туркестанская 55.</p>
		<p>Надежность, комфорт и уют, развитая инфраструктура, выгодное расположение</p>
		<p>гарантия качества от проверенного временем Застройщика!</p>
		<ul><strong>Наружная отделка:</strong>
			<li>цоколь-гранит</li>
			<li>наружные стены - алюминиевые панели</li>
			<li>окна- из ПВХ</li>
			<li>на балконах предусмотрены специальные короба для кондиционеров</li>
		</ul>
		<ul><strong>Предусмотрены:</strong>Предусмотрены:
			<li>гостевые авто-стоянки</li>
			<li>просторная детская площадка</li>
			<li>благоустроенная дворовая площадка</li>
			<li>вся свободная от застройки территория засажена деревьями</li>
		</ul>
		<p>Общая площадь квартир: 27 750 м2</p>
		<p>Общее количество квартир: 342</p>
		<p>Адрес: ул. Конаева / ул. Тауке хана</p>
	</div>
	<div id="">
	<div class="mywrapper-projects">
		<div class="mycontainer">
			<div class="row">
				<div class="col-lg-4">
					<img src="img/gallery1.jpg" alt="" class="galleryImg">
				</div>
				<div class="col-lg-4">
					<img src="img/gallery2.jpg" alt="" class="galleryImg">
				</div>
				<div class="col-lg-4">
					<img src="img/gallery3.jpg" alt="" class="galleryImg">
				</div>
				<div class="col-lg-4">
					<img src="img/gallery4.jpg" alt="" class="galleryImg">
				</div>
				<div class="col-lg-4">
					<img src="img/gallery5.jpg" alt="" class="galleryImg">
				</div>
				<div class="col-lg-4">
					<img src="img/gallery6.jpg" alt="" class="galleryImg">
				</div>
			</div>
		</div>
		<div id="myrotated-2">
				<img src="img/gallery.png" alt="more-text">
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
</div>
</div>

<script>
function initMap() {

  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 16,
    center: {lat: 42.349610, lng: 69.551717}
  });
  var marker = new google.maps.Marker({
    position: {lat: 42.349610, lng: 69.551717},
    map: map,
    title: 'Hello World!'
  });

}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCKfwH806ZqKTrWyaP6eHXRr-75xigyovY&callback=initMap"
    async defer></script>
@endsection

