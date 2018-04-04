@extends('frontend.layouts.master')
@section('content')

<div id="main-block">
	<h3>Основано 2000</h3>
	<h1>Мы работаем и нам доверяют</h1>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur nam, omnis perspiciatis reprehenderit temporibus sint porro libero. Id aut nam animi eveniet perferendis repudiandae aperiam, mollitia expedita officia consectetur laboriosam.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur nam, omnis perspiciatis reprehenderit temporibus sint porro libero. Id aut nam animi eveniet perferendis repudiandae aperiam, mollitia expedita officia consectetur laboriosam.</p>
	<a href="#button">Связаться с нами</a>
</div>
<div id="second-block">
	<div class="container-2">
		<div>
			<h3>Высокий рейтинг</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur nam, omnis perspiciatis reprehenderit temporibus sint porro libero. Id aut nam animi eveniet perferendis repudiandae aperiam, mollitia expedita officia consectetur laboriosam.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur nam, omnis perspiciatis reprehenderit temporibus sint porro libero. Id aut nam animi eveniet perferendis repudiandae aperiam, mollitia expedita officia consectetur laboriosam.</p>
		</div>
		<div>
			<h3>Высокое качество</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur nam, omnis perspiciatis reprehenderit temporibus sint porro libero. Id aut nam animi eveniet perferendis repudiandae aperiam, mollitia expedita officia consectetur laboriosam.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur nam, omnis perspiciatis reprehenderit temporibus sint porro libero. Id aut nam animi eveniet perferendis repudiandae aperiam, mollitia expedita officia consectetur laboriosam.</p>
		</div>
		<div>
			<h3>Бюджетный</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur nam, omnis perspiciatis reprehenderit temporibus sint porro libero. Id aut nam animi eveniet perferendis repudiandae aperiam, mollitia expedita officia consectetur laboriosam.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur nam, omnis perspiciatis reprehenderit temporibus sint porro libero. Id aut nam animi eveniet perferendis repudiandae aperiam, mollitia expedita officia consectetur laboriosam.</p>
		</div>
	</div>
	
</div>

<div id="more-info">
		<div id="rotated">
			<img src="img/more.png" alt="more">
		</div>
		<div class="container-more">
			<div class="row">
				<h3>Узнать больше</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel facere quas, doloremque aliquid commodi ea odit</p>
			</div>
			<div class="row">
				<div>
					<h3>Высокий рейтинг</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto reprehenderit doloribus id eum, pariatur modi corporis quae amet blanditiis neque velit optio tenetur, magnam obcaecati tempore, dicta hic delectus dolor corrupti laudantium esse sequi fugiat. Suscipit praesentium ullam nobis animi.</p>
				</div>
				<div class="chosen">
					<h3>Высокое качество</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima et neque officiis impedit porro quo reiciendis aspernatur omnis dignissimos, culpa quia nam hic quisquam at tempora quasi deserunt. Repellendus, eum.</p>
				</div>
				<div>
					<h3>Бюджетный</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis molestiae voluptatum, odio tenetur doloremque earum! Ipsa nisi deserunt quod earum tempore esse debitis impedit nulla. Quam a quos ad tempore neque laudantium quisquam nesciunt vitae, maiores eveniet, aperiam alias vero.</p>
				</div>
			</div>
		</div>
		<div></div>
	</div>
</div>
@include('frontend.partials._services')
<div id="projects">
	<div id="rotated-2">
		<img src="img/projects-text.png" alt="more-text">
	</div>
	<div class="container-projects">
		<div class="projects-row-1">
			<h3>Последние проекты</h3>
			<h4>Lorem ipsum dolor sit amet, consectetur</h4>
		</div>
		<div class="projects-row-2">
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
		</div>
	</div>
	<div></div>
</div>
@include('frontend.partials._constructions')
@include('frontend.partials._feedback')

<div id="team">
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
</div>

<div id="last-news">
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
</div>
<div id="sponsors">
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


@endsection