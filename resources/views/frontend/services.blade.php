@extends('frontend.layouts.master')
@section('content')

<div class="container" style="min-height: 600px;">
	

<h3 style="color:#000;">{{$service->title}}</h3>
@if($service->img!=null)<img src="/img/{{$service->img}}" alt="service" style="width: 400px; float: left;">
@endif
<p style="color:#000;">{{$service->text}}</p>


</div>
@endsection

