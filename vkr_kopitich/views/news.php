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
			<div class="logo">Детский сад</div>
			<button class="navbar-toggler d-none">
            	<span class="fas fa-bars"></span>
          	</button>
			<div class="collapse" id="navbarToggleExternalContent">
				<div class="bg-dark p-4">
					<h4 class="text-white">Collapsed content</h4>
					<span class="text-muted">Toggleable via the navbar brand.</span>
				</div>
			</div>
		</nav>	
		<div class="content row justify-content-md-center">
			<div class="col-md-9 col-sm-12">
				<div class="container">
					<div class="row justify-content-md-around">
						<?php 
							foreach ($posts as $key => $post) {
								$about = mb_strimwidth(strip_tags(trim($post['content'])), 0, 300, "...");
								echo '<div class="col-md-5 mb-5 post " data-target="'.$post['id'].'">
										<h2>'.$post['title'].'</h2>
										<h4>'.$post['created_at'].'</h4>
										<p>'.$about.'</p>
									</div>';
							}
						?>
					</div>
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