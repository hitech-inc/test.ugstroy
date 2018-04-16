<div class="topline">
	
<!-- 	<div>
	<a href="#sign-in">Вход</a>
	<span>/</span>
	<a href="#sign-up">Регистрация</a>
</div> -->
	<p>Время работы 09:00 - 18:00 (Пн-Пт) +7(7252)555555</p>
</div>
<div class="menu">
	<div class="menu-container">
		<div class="logo">
			<a href="#home">
				<img src="/img/logo.png" alt="logo">
			</a>
		</div>
		<div id="nav">
			<ul>
				@foreach($menus as $menu)
				<li><a href="{{$menu->url}}">{{$menu->title}}</a></li>
				@endforeach
<!-- 				<li><a href="#home">Главная</a></li>
<li><a href="#about">О нас</a></li>
<li><a href="#services">Услуги</a></li>
<li><a href="#prices">Прайсы</a></li>
<li><a href="#projects">Проекты</a></li>
<li><a href="#blog">Блог</a></li>
<li><a href="#contacts">Контакты</a></li> -->
			</ul>
		</div>
		<div id="search">
			<form action="">
				<input type="search" placeholder="ПОИСК">
			</form>
		</div>
	</div>
</div>

<!-- Success modal styles -->
<style>
	.modal{
		display: block; 
		opacity: 1;
	}

	.modal-body{
		color: #000;
		text-align: center;
		font-size: 2rem;
	}

	.btn-secondary{
		background-color: #000 !important;
	}

	#xBtn{
		color: #000 !important;
	}
</style>

@if (Session::has('status'))
	<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document" style="transform: translate(0, 50%)">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <!-- <span aria-hidden="true" id="xBtn">&times;</span> -->
                </button>
            </div>
            <div class="modal-body">
                Спасибо, Ваше сообщение отправлено!
            </div>
            <div class="modal-footer">
            	<button id="successBtn" type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<!-- Success modal script -->
<script>
	var btn = document.getElementById("successBtn");
	btn.addEventListener("click", closeModalSuccess);
	function closeModalSuccess()
	{
		$(".modal").css({'display':'none','opacity':'0'});
		$(".close").css({'display':'none','opacity':'0'});
	}
</script>
@endif