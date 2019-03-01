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
	<link rel="stylesheet" type="text/css" href="./assets/css/simpleLightbox.min.css">
	<script type="text/javascript" src="./assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="./assets/js/main.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/TweenMax.min.js"></script>
	<script type="text/javascript" src="./assets/js/simpleLightbox.min.js"></script>
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
		<div class="row justify-content-md-center mb-5">
			<div class="col-md-9 d-none d-sm-none d-md-block">
				<div class="slider">
				</div>
			</div>
		</div>
		<div class="content row justify-content-md-center">
			<div class="col-md-9 col-sm-12">
				<div class="container">
					<div class="row justify-content-md-around gallery">
						
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
	<script type="text/javascript">
		$.ajax({
			url: './?action=galleryGetPhotos',
			type: 'GET',
			dataType: 'json',
		})
		.done(function(data) {
			$.each(data, function(index, el) {
				$('.gallery').prepend('<a class="col-md-4" href="./uploads/img/'+el+'" title=""><img src="./uploads/img/thumbs/'+el+'" alt="" /></a>');
				var rand = Math.round(0 - 0.5 + Math.random() * (10 - 0 + 1))
				if (index == 0) {
					$('.slider').append('<div class="slide" style="background: url(./uploads/img/'+el+'); background-size: cover;"></div>')
				}else if (rand < 5) {
					$('.slider').append('<div class="slide" style="background: url(./uploads/img/'+el+'); background-size: cover;"></div>')
				}
			});

			var slider = $('.slider');
			var slides = slider.find('div:not(:first-child)');
			var firstSlide = slider.find('div:first-child'); 
			var tl = new TimelineMax({repeat:-1}).staggerFrom(slides,3,{xPercent:-100},14,4).fromTo(firstSlide,2,{xPercent:-100},{xPercent:0,zIndex:20,immediateRender:false},'+=2');

			$('.gallery a').simpleLightbox();
		});
		
		
	</script>
</body>
</html>