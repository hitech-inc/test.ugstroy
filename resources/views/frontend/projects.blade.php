@extends('frontend.layouts.master')
@section('content')

<div id="projects-page">
		<div class="inner">
			<div>
				<a href="{{route('object',['Построенные объекты'])}}"><img src="img/20180410-091541_firewatch-deer-forest-night-games-1567-resized.jpg" alt=""></a>
				<h3>Построенные объекты</h3>
			</div>
		</div>
		<div class="inner">
			<div>
				<a href="{{route('object',['Строящиеся объекты'])}}"><img src="img/20180410-091541_firewatch-deer-forest-night-games-1567-resized.jpg" alt=""></a>
				<h3>Строящиеся объекты</h3>
			</div>
		</div>
	</div>
</div>
@endsection

