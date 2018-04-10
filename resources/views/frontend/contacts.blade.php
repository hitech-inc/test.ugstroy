@extends('frontend.layouts.master')
@section('content')

<div class="container" style="min-height: 600px;">
	

<div id="map" style="width: 100%;height: 600px;"></div>
</div>

<script>
function initMap() {

  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 4,
    center: {lat: -10.363, lng: 131.044}
  });

  var marker = new google.maps.Marker({
    position: {lat: -10.363, lng: 131.044},
    map: map,
    title: 'Hello World!'
  });

  var marker = new google.maps.Marker({
    position: {lat: -30.363, lng: 111.044},
    map: map,
    title: 'Hello World!'
  });
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCKfwH806ZqKTrWyaP6eHXRr-75xigyovY&callback=initMap"
    async defer></script>
@endsection

