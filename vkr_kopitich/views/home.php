<!DOCTYPE html>
<html>
<head>
	<title>Детский сад</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
	<link rel="stylesheet" type="text/css" href="./assets/css/main.css">
	<link rel="stylesheet" type="text/css" href="./assets/css/slider.css">
	<script type="text/javascript" src="./assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="./assets/js/main.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/TweenMax.min.js"></script>
	<script type="text/javascript" src="./assets/js/slider.js"></script>
</head>
<body>
	<div class="wrapper">
		<nav class="nav_custom navbar collapse">
			<ul class="nav">
				<li class="nav-item">
					<a class="" href="./">Главная</a>
				</li>
				<li class="nav-item">
					<a class="" href="./?action=about">О садике</a>
				</li>
				<li class="nav-item">
					<a class="" href="./?action=news">Новости</a>
				</li>
				<li class="nav-item">
					<a class="" href="./?action=gallery">Галерея</a>
				</li>
				<li class="nav-item">
					<a class="" href="./?action=health">Здоровье</a>
				</li>
				<li class="nav-item">
					<a class="" href="./?action=contacts">Контакты</a>
				</li>
			</ul>
			<div class="logo ">Детский сад</div>
			<button class="navbar-toggler d-none">
            	<span class="fas fa-bars"></span>
          	</button>
		</nav>	
		<div class="row justify-content-md-center mb-5">
			<div class="col-md-9 d-none d-sm-none d-md-block">
				<div class="slider">
					<div class="slide">			<span>Slide 1		</span></div>
					<div class="slide">			<span>Slide 2		</span>		</div>
					<div class="slide"><span>			Slide 3		</span>		</div>
					<div class="slide">			<span>Slide 4		</span></div>
					<div class="slide"><span>			Slide 5		</span></div>
				</div>
			</div>
		</div>
		<div class="content row justify-content-md-center">
			<div class="col-md-6 col-sm-12">
				<div class="container content_wrapper">
					<h2>МБДОУ ДС "Машенька" г.Волгодонска</h2>
					<p>ОБЩАЯ ИНФОРМАЦИЯ Наименование учреждения: Муниципальное бюджетное дошкольное образовательное учреждение детский сад «Машенька» г.Волгодонска Сокращенное наименование учреждения: МБДОУ ДС «Машенька» г.Волгодонска Орган, осуществляющий функции и полномочия учредителя: Управление образования г. Волгодонска Наименование распределителя бюджетных средств: Управление образования г. Волгодонска Тип учреждения: Бюджетное учреждение Вид учреждения: образование ИНН 6143007816 КПП 614301001 ОГРН 1026101930282 ОКПО 27193493 ОКОГУ 49007 ОКТМО 60712000 Вид собственности: Муниципальная собственность Дата создания образовательной организации - 8 августа 1987 г. Адрес фактического место нахождения 347371, Ростовская область, г. Волгодонск, пер. Западный, 11 Руководитель: Юлия Владимировна Юношева Контактный телефон: (8639) 24-20-05, 23-03-70 Сайт учреждения: www.m.8639.ds.3535.ru Адрес электронной почты: gnadon@mail.ru Результаты независимой оценки качества оказания услуг образовательными организациями на сайте bus.gov.ru http://bus.gov.ru/pub/independentRating/list Уважаемые посетители сайта, просим проголосовать за конкурсную работу участников городской молодежной общественной организации "Волгодонская правовая школа" http://goruo.ru/news/2017-12-21-1544</p>
				</div>
			</div>
			<div class="col-md-3 d-none d-sm-none d-md-block sticky-top left_menu">
				<div class="container content_wrapper">
					<h4>Последние новости</h4>
					<?php
						foreach ($posts as $key => $post) {
							$about = mb_strimwidth(strip_tags(trim($post['content'])), 0, 100, "...");
							echo '<div class="last_news">
									<a href="./?action=post&id='.$post['id'].'">'.$post['title'].'</a>
									<p>'.$about.'</p>
								</div>';
						}
					?>
				</div>
			</div>
		</div>
	</div>
	<footer>
		<div class="row justify-content-md-center">
			<div class="col-md-9">
				<div class="row">
					<div class="col-md-6">
						МБДОУ ДС "Машенька" г.Волгодонска
					</div>
					<div class="col-md-6">
						<p>
							347371 Ростовская область,
							г. Волгодонск, переулок Западный 11.
							Телефон/факс: 8 (8639)24-20-05 8 (8639)23-03-70
							e-mail:  gnadon@mail.ru 
							Режим работы:
							ПН-ПТ: 6.30-18.30 СБ, ВС: выходной
						</p>
					</div>
				</div>
			</div>
		</div>
	</footer>
</body>
</html>