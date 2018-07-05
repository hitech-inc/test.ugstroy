@extends('frontend.layouts.master')
@section('content')

<div id="main-block" class="myContainer">
	<h3>Основано 2003</h3>
	<h1>Мы работаем и нам доверяют</h1>
	<p>Наша компания это коллектив профессионалов, в компании работают все необходимые отделы для профессиональной реализации самых сложных проектов, начиная от собственного конструкторского бюро, и до отдела механизации строительства</p>
	<a href="/contacts" class="Btn">Связаться с нами</a>
</div>
<div id="second-block">
	<div class="container-2 myContainer">
		<div  class="wow fadeInUp" data-wow-duration="0.7s" data-wow-offset="-10">
			<h3>Высокий рейтинг</h3>
			<p>Мы уверены в качестве наших домов и всем клиентам предоставляем гарантию сроком на 5 лет</p>
		</div>
		<div  class="wow fadeInUp" data-wow-duration="0.7s" data-wow-offset="-10" data-wow-delay="0.5s">
			<h3>Выгодная инвестиция</h3>
			<p>Возможность приобрести дом в рассрочку или с использованием ипотечного кредита любого банка</p>
		</div>
		<div  class="wow fadeInUp" data-wow-duration="0.7s" data-wow-offset="-10" data-wow-delay="1s">
			<h3>Высокое качество</h3>
			<p>Постоянный контроль качества материалов и строительно-монтажных работ</p>
		</div>
	</div>
</div>
<div id="more-info">
	<div class="container-more-info myContainer">
		<div id="rotated">
			<img src="img/more.png" alt="more" class="wow slideInLeft" data-wow-duration="0.8s" data-wow-offset="-200">
		</div>
		<div class="container-more">
			<div class="row-more">
				<h3 class="wow zoomIn" data-wow-duration="1s" data-wow-offset="-10">Узнать больше</h3>
				<p class="wow zoomIn" data-wow-duration="1s" data-wow-offset="-10">КОМПАНИЯ ПРИСТУПИЛА К СООРУЖЕНИЮ ТОРГОВО-ОФИСНОГО ЦЕНТРА</p>
			</div>
			<div class="row-more">
				<div  class="wow fadeInUp" data-wow-duration="1s" data-wow-offset="-10">
					<h3>Высокий рейтинг</h3>
					<p>Мы профессиональная специализированная строительная компания наша специализация - современные эффективные фасады зданий</p>
				</div>
				<div  class="chosen wow fadeInUp" data-wow-duration="1s" data-wow-offset="-10" data-wow-delay="0.5s">
					<h3>Высокое качество</h3>
					<p>Работаем на лицензированных специализированных комплексах для проектирования и расчетов прочности конструкций</p>
				</div>
				<div  class="wow fadeInUp" data-wow-duration="1s" data-wow-offset="-10" data-wow-delay="1s">
					<h3>Бюджетный</h3>
					<p>Наша компания это коллектив профессионалов, в компании работают все необходимые отделы для профессиональной реализации самых сложных проектов, начиная от собственного конструкторского бюро, и до отдела механизации строительства</p>
				</div>
			</div>
		</div>
		<div></div>
	</div>
</div>
<div id="services">
	<div class="container-serve myContainer">
		<div class="serve wow fadeInLeft" data-wow-duration="1s" data-wow-offset="-10">
			<div>
				<a><img src="img/{{$service->img}}" alt="service-big"></a>
			</div>
		</div>
		<div class="serve">
			<div class="row-1">
				<h3 class="wow fadeIn" data-wow-duration="1s" data-wow-offset="-100">Наши услуги</h3>
				<h4 class="wow fadeIn" data-wow-duration="1s" data-wow-offset="-100">ДОСТРОЙКА И РЕКОНСТРУКЦИЯ ДОМОВ</h4>	
			</div>
			<div class="row-2">
				@foreach($services as $service)
				@if($loop->index!=0)
				<div class="wow fadeInRight" data-wow-duration="1s" data-wow-offset="-50"><a href="#service-type" class=><img src="img/{{$service->img}}" alt="service-small"></a></div>
				@endif
				@endforeach
			</div>
		</div>
	</div>
</div>
<div id="projects">
	<div class="wrapper-projects myContainer">
		<div id="rotated-2">
			<img src="img/projects-text.png" alt="more-text" class="wow fadeInLeft" data-wow-duration="1s" data-wow-offset="-10">
		</div>
		<div class="container-projects">
			<div class="projects-row-1">
				<h3 class="wow zoomIn" data-wow-duration="1s" data-wow-offset="-100">Последние проекты</h3>
				<h4 class="wow zoomIn" data-wow-duration="1s" data-wow-offset="-100">Жилые дома уже построенные в Шымкенте</h4>
			</div>
			<div class="projects-row-2">
				<div class="wow zoomIn" data-wow-duration="1s" data-wow-offset="-100"></div>
				<div class="wow zoomIn" data-wow-duration="1s" data-wow-offset="-100"></div>
				<div class="wow zoomIn" data-wow-duration="1s" data-wow-offset="-100"></div>
				<div class="wow zoomIn" data-wow-duration="1s" data-wow-offset="-100"></div>
				<div class="wow zoomIn" data-wow-duration="1s" data-wow-offset="-100"></div>
				<div class="wow zoomIn" data-wow-duration="1s" data-wow-offset="-100"></div>
				<div class="wow zoomIn" data-wow-duration="1s" data-wow-offset="-100"></div>
			</div>
		</div>
		<div></div>		
	</div>
</div>
<div id="constructions">
	<div class="container-construct myContainerFluid">
		<div class="left">
			<div class="block-1 wow fadeInLeft" data-wow-duration="1s" data-wow-offset="-100"></div>
			<div class="block-2 wow fadeInLeft" data-wow-duration="1s" data-wow-offset="-100"></div>
		</div>
		<div class="right">
			<div id="right-top">
				<div id="const-text">
					<h3 class="wow fadeIn" data-wow-duration="1s" data-wow-offset="-100">#Лучшие конструкции</h3>
					<p class="wow fadeIn" data-wow-duration="1s" data-wow-offset="-100">При превосходно найденном планировочном решении проектs интересны  своей эстетикой и работой с временными наслоениями</p>
					<a href="/all-projects" class="Btn">Хочу купить квартиру у вас!</a>
				</div>
				<div id="const-building">
					<img src="img/building.png" alt="building" class="wow fadeInRight" data-wow-duration="1s" data-wow-offset="-10">
				</div>
			</div>
			<div id="right-bot">
				<div>
					<p class="wow zoomIn" data-wow-duration="0.7s" data-wow-offset="-10">598</p>
					<p class="wow zoomIn" data-wow-duration="0.7s" data-wow-offset="-10">Проекты</p>
				</div>
				<div>
					<p class="wow zoomIn" data-wow-duration="0.7s" data-wow-offset="-10">5128</p>
					<p class="wow zoomIn" data-wow-duration="0.7s" data-wow-offset="-10">Клиенты</p>
				</div>
				<div>
					<p class="wow zoomIn" data-wow-duration="0.7s" data-wow-offset="-10">4390</p>
					<p class="wow zoomIn" data-wow-duration="0.7s" data-wow-offset="-10">Успешно</p>
				</div>
				<div>
					<p class="wow zoomIn" data-wow-duration="0.7s" data-wow-offset="-10">109</p>
					<p class="wow zoomIn" data-wow-duration="0.7s" data-wow-offset="-10">Награды</p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- <div id="feedback">
	<div class="container-fb">
		<div id="left-fb">
			<div class="fb-row-1">
				<h5>Наши клиенты</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem deleniti, laborum sequi veniam unde, fugit</p>
			</div>
			<div class="fb-row-2">
				<div><img src="img/feedback-man.png" alt="man"></div>
				<div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus consectetur excepturi dicta possimus expedita fugit dolores, cumque rerum sapiente similique id necessitatibus rem ad eveniet nesciunt soluta incidunt corporis at sunt reprehenderit distinctio enim, dolor corrupti ducimus dolorem. Sit distinctio possimus nemo, optio deserunt tempore, tenetur quis unde quas perferendis praesentium voluptate dolorum cumque neque omnis? Pariatur nesciunt voluptatum eligendi alias commodi molestiae veniam harum dignissimos aspernatur. Obcaecati debitis expedita voluptas laboriosam dicta amet deleniti, autem, impedit nemo quibusdam mollitia.</p>
				</div>
			</div>
		</div>
		<div id="right-fb">
			<h3>Оставить отзыв</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab quia necessitatibus doloremque ipsam quisquam debitis magnam cupiditate dolor pariatur qui, in aut neque, ducimus asperiores.</p>
			<form action="">
				<input type="text" name="name"  placeholder="Имя">
				<input type="text" name="email" placeholder="Email">
				<input type="text" name="phone" placeholder="Телефон">
				<input type="text" name="object" placeholder="Объект">
				<textarea name="text" placeholder="Сообщение"></textarea>
				<input type="submit" value="ОТПРАВИТЬ">
			</form>
		</div>
	</div>
</div> -->
<!-- <div id="team">
	<div class="container-team">
		<h3>Наша команда</h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, dolor</p>
		<div class="team-row">
			<div class="team-block">
				<div>
				</div>
				<div>
					<p>Marat Basharov</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia voluptatem dolorum minus consectetur ut, facere at magnam vitae recusandae natus, exercitationem qui necessitatibus possimus, vel quis aut laudantium totam. Autem.</p>
				</div>
			</div>
			<div class="team-block">
				<div>
				</div>
				<div>
					<p>Leng Juyo Xing</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia voluptatem dolorum minus consectetur ut, facere at magnam vitae recusandae natus, exercitationem qui necessitatibus possimus, vel quis aut laudantium totam. Autem.</p>
				</div>
			</div>
			<div class="team-block">
				<div>
				</div>
				<div>
					<p>Clara Seone</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati sequi quas, magnam sapiente veniam quam ab autem cum! Assumenda dignissimos earum sint obcaecati corporis, ducimus ea sed molestiae minima numquam!</p>
				</div>
			</div>
		</div>		
	</div>
</div> -->
<!-- <div id="last-news">
	<div class="container-news">
		<div class="news-row-1">
			<h3>Последние новости</h3>
			<h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi quos odit facere repellat pariatur, aliquam unde, veniam ullam officiis reiciendis</h4>
		</div>
		<div class="news-row-2">
			<div class="news">
				<div class="news-span">
					<div>
						<span>От: Админ</span>
						<span>20 июля</span>
						<span>Комментарии:5</span>		
					</div>
				</div>
				<div  class="news-text">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, numquam dicta veniam? Iure sequi totam et sunt, iste soluta, minima perferendis a reprehenderit, in id.</p>
					<a href="#more-info">Подробнее &#62;</a>
				</div>
			</div>
			<div class="news">
				<div class="news-span">
					<div>
						<span>От: Админ</span>
						<span>12 августа</span>
						<span>Комментарии:13</span>	
					</div>
				</div>
				<div  class="news-text">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus maxime officiis laboriosam aspernatur. Molestias labore, architecto, expedita culpa facilis molestiae minima dignissimos? A dolores, laborum.</p>
					<a href="#more-info">Подробнее &#62;</a>
				</div>
			</div>
			<div class="news">
				<div class="news-span">
					<div>
						<span>От: Админ</span>
						<span>7 сентября</span>
						<span>Комментарии:8</span>
					</div>
				</div>
				<div  class="news-text">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod ullam, atque labore sit vel blanditiis esse praesentium delectus magnam vero! Corporis, nulla nesciunt neque fuga?</p>
					<a href="#more-info">Подробнее &#62;</a>
				</div>
			</div>
		</div>
	</div>
</div> -->
<!-- <div id="sponsors">
	<div class="container-sponsors">
			<h3>Наши спонсоры</h3>
		<div class="sponsors-row">
			<div>
				<img src="img/sponsor-1.png" alt="sponsor">
			</div>
			<div>
				<img src="img/sponsor-1.png" alt="sponsor">
			</div>
			<div>
				<img src="img/sponsor-1.png" alt="sponsor">
			</div>
			<div>
				<img src="img/sponsor-1.png" alt="sponsor">
			</div>
			<div>
				<img src="img/sponsor-1.png" alt="sponsor">
			</div>
		</div>		
	</div>
</div>
 -->

@endsection


@section('scripts')

<script src="/js/wow.min.js"></script>
<script>
	new WOW().init();
</script>

@endsection