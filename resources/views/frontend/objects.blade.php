@extends('frontend.layouts.master')
@section('content')

<div class="container" style="min-height: 600px;">
@foreach($objects as $object)
	<div class="obj" style="width: 200px; height: 200px; color: #000;">
	{{$object->title}}
	</div>
@endforeach

</div>
@endsection

