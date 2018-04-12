@extends('frontend.layouts.master')
@section('content')

<div class="container" style="min-height: 600px;">
@foreach($objects as $object)
	<div class="obj" style="width: 200px; height: 200px; color: #000;">
	<a href="{{route('object_page',[$object->slug])}}" style="display: block;width: 100%;height: 100%;"></a>
	{{$object->title}}
	</div>
@endforeach

</div>
@endsection

