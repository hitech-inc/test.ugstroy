@extends('frontend.layouts.master')
@section('content')

<div id="contacts-block">
  <h1>Эффективная коммуникация</h1>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur nam, omnis perspiciatis reprehenderit temporibus sint porro libero. Id aut nam animi eveniet perferendis repudiandae aperiam, mollitia expedita officia consectetur laboriosam.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur nam, omnis perspiciatis reprehenderit temporibus sint porro libero. Id aut nam animi eveniet perferendis repudiandae aperiam, mollitia expedita officia consectetur laboriosam.</p>
<!--   <a href="#button">Связаться с нами<span></span><span>Связаться с нами</span></a> -->
  <a href="#button" class="Btn">Связаться с нами</a>
</div>

<div id="calls">
  <div class="c-container">
    <div class="c-left">
      <div class="cl-left">
        <img src="/img/call.png" alt="">
      </div>
      <div class="cl-right">
        <h3>г.Шымкент, Казахстан ул.Мира, 25</h3>
        <p>Режим работы:</p>
        <p>Пн-Пт с 9:00 до 18:00</p>
        <p>Сб с 9:00 до 13:00</p>
        <div>
            <span class="clrsa"></span>
            <p>+7 7252 55 55 55</p>
          </div>
          <div>
            <span class="clrsb"></span> 
            <p>info@stroy.kz</p>
          </div>  
      </div>
    </div>
    <div class="c-right">
      <img src="/img/contacts.png" alt="more-text">
    </div>
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
<div id="socials">
  <h3>Мы в соц. сетях</h3>
  <div class="social-con">
    <div><a href="#"></a></div>
    <div><a href="#"></a></div>
    <div><a href="#"></a></div>
    <div><a href="#"></a></div>
    <div><a href="#"></a></div>    
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

