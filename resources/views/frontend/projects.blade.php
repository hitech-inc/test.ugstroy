@extends('frontend.layouts.master')
@section('content')

<div id="projects-block" class="siteMainImg">
	<h1>Жилые многоквартирные дома</h1>
	<p>Индивидуальный проект жилых зданий, многоквартирных комплексов. Проектирование офисных  и общественных помещений</p>
	<a href="#p-finished"  class="Btn">Посмотреть проекты</a>
</div>

<!-- Last Projects Buildings block -->
<div id="projects-last">
	<div class="container-last-projects">
		<div class="lprojects-row-1">
			<h3>Последние проекты</h3>
		</div>
		<div class="lprojects-row-2"> 
			<div class="lp-center">
				<h3>Дом вашей мечты</h3>
				<p>Это именно то место, где мы чувствуем себя в безопасности, где мы отдыхаем, пополняем свои силы, храним тайны. У каждого человека есть свой «идеальный дом». Для кого-то это уютный особняк на окраине города, для другого – современная квартира в центре города. Мы все разные, и каждому из нас нужно своё семейное гнёздышко. Давайте узнаем, какой дом подходит вам? </p>
				<a href="#p-finished"  class="Btn">Посмотреть проекты</a>
			</div>
			<div class="lp-center">
				<img src="/img/building2.png" alt="building">
			</div>
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
</div>

<!-- Finished Buildings block -->
<div id="p-finished">
	<div class="pf-container">
		<div class="pf-left">
			<img src="/img/finished.png" alt="more-text">
		</div>
		<div class="pf-right">

			<div class="pfr-row-1">
				<div class="owl-theme">
				    <div class="item" data-hash="finished-{{$sapphire->id}}" style="background-image: url('/img/objects/{{ $sapphire->img }}');">
				    	<div>
				      		<h3>{{ $sapphire->type }}</h3>
							<h1>{{ $sapphire->title }}</h1>
							<p>{{ $sapphire->description }}</p>
							<a href="/objects/{{ $sapphire->slug }}" class="Btn">Посмотреть</a>
						</div>
				    </div>
				</div>
				<div class="pickline">

					<!-- <div><a href="#finished-project->id"></a></div> -->

				</div>
			</div>

			<div class="pfr-row-2">
				<p>Это именно то место, где мы чувствуем себя в безопасности, где мы отдыхаем, пополняем свои силы, храним тайны. У каждого человека есть свой «идеальный дом». Для кого-то это уютный особняк на окраине города, для другого – современная квартира в центре города. Мы все разные, и каждому из нас нужно своё семейное гнёздышко. Давайте узнаем, какой дом подходит вам? Возможно, результат вас удивит!</p>
			</div>
		</div>
	</div>
</div>

<!-- Not Finished Buildings block -->
<div id="p-not-finished">
	<div class="pnf-container">
		<div class="pnf-left">
			<div class="pnfr-row-1">
				<div class="owl-theme">
				    <div class="item" data-hash="not-finished-{{$izumrud->id}}" style="background-image: url('/img/objects/{{ $izumrud->img }}');">
				    	<div>
				      		<h3>{{ $izumrud->type }}</h3>
							<h1>{{ $izumrud->title }}</h1>
							<p>{{ $izumrud->description }}</p>
							<a href="/objects/{{ $izumrud->slug }}" class="Btn">Посмотреть</a>
						</div>
				    </div>
				</div>
				<div class="pickline">
			
<!-- 					<div><a href="#not-finished-project->id"></a></div> -->
				
				</div>
			</div>
			<div class="pnfr-row-2">
				<p>Это именно то место, где мы чувствуем себя в безопасности, где мы отдыхаем, пополняем свои силы, храним тайны. У каждого человека есть свой «идеальный дом». Для кого-то это уютный особняк на окраине города, для другого – современная квартира в центре города. Мы все разные, и каждому из нас нужно своё семейное гнёздышко. Давайте узнаем, какой дом подходит вам? Возможно, результат вас удивит!</p>
			</div>			
		</div>
		<div class="pnf-right">
			<img src="/img/finished.png" alt="more-text">
		</div>
	</div>
</div>
<!-- <div id="p-plan">
	<div class="pp-container">
		<div class="pp-left">
			<img src="/img/planned.png" alt="more-text">
		</div>
		<div class="pp-right">
			<div class="pp-row-1">
				<div class="pp-slide">
					<div class="ddd">
						<h3>Жилой комплекс</h3>
						<h1>«Көкжиек»</h1>
						<p>20-этажный многоквартирный небоскреб</p>
						<a href="#" class="Btn">Посмотреть</a>
					</div>
				</div>
				<div class="pp-pickline">
					<div></div>
				</div>
			</div>
			<div class="pp-row-2">
				<p>Это именно то место, где мы чувствуем себя в безопасности, где мы отдыхаем, пополняем свои силы, храним тайны. У каждого человека есть свой «идеальный дом». Для кого-то это уютный особняк на окраине города, для другого – современная квартира в центре города. Мы все разные, и каждому из нас нужно своё семейное гнёздышко. Давайте узнаем, какой дом подходит вам? Возможно, результат вас удивит!</p>
			</div>
			<div class="pp-row-3">
				<div>
					<a href="#b"></a>
				</div>
				<div>
					<a href="#b"></a>
				</div>
				<div>
					<a href="#b"></a>
				</div>
				<div>
					<a href="#b"></a>
				</div>
				<span class="left-arrow"></span>
				<span class="right-arrow"></span>
			</div>
		</div>
	</div>
</div> -->
@endsection

