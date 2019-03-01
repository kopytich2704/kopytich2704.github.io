<!DOCTYPE html>
<html>
<head>
	<title>Панель администратора</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.5/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" media="all" rel="stylesheet" type="text/css" />
	<style type="text/css">
		.gallery img{
			max-width: 100%;
		}
		.gallery a{
			cursor: pointer;
		}
	</style>
</head>
<body>
	<nav class="navbar collapse bg-dark">
		<ul class="nav">
			<li class="nav-item">
				<a class="badge badge-danger navbar-brand" href="./index.php?action=logout">Выход</a>
			</li>
			<li class="nav-item">
				<a class="badge badge-light navbar-brand" href="../">Перейти на сайт</a>
			</li>
			<li class="nav-item">
				<a class="badge badge-light navbar-brand" href="./">Панель администратора</a>
			</li>
			<li class="nav-item">
				<a class="badge badge-light navbar-brand" href="index.php?action=gallery">Галерея</a>
			</li>
			<li class="nav-item">
				<a class="badge badge-light navbar-brand" href="index.php?action=createPostView">Написать новый пост</a>
			</li>
		</ul>
	</nav>
	<div class="py-5 bg-light">
		<div class="container">
			<div class="row justify-content-md-center">
				<div class="col-md-10">
					<div class="row ">
						<div class="container mb-4">
							<h4 class="mb-3">Галерея</h4>
						</div>
					</div>				
					<form method="POST" enctype="multipart/form-data">
						<input id="input-b3" name="image[]" type="file" class="file" multiple data-show-caption="true" data-msg-placeholder="Выберите изображения для загрузки..." data-allowed-file-extensions='["jpg", "jpeg", "png", "gif"]'>
					</form>
				</div>					
			</div>
			<hr class="mb-4">
			<div class="row justify-content-md-center">
				<div class="col-md-10 gallery">
					<div class="row">
					</div>
				</div>					
			</div>
		</div>
	</div>
</body>
<script type="text/javascript" src="./assets/js/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
<script type="text/javascript" src="./assets/js/fileinput.js"></script>
<script type="text/javascript" src="./assets/js/locales/ru.js"></script>
<script type="text/javascript" src="./assets/js/theme.js"></script>
<script>
	    $("#input-b3").fileinput({
	    	uploadUrl: "./process/upload.php",
	    	language: "ru",
	    	theme: "fa",
	        allowedFileExtensions: ["jpg", "png", "gif"]
	    });
	    function loadAllPhotos() {
	    	$.ajax({
		    	url: 'index.php?action=getAllPhotos',
		    	type: 'GET',
		    	dataType: 'json'
		    })
		    .done(function(data) {
		    	$('.gallery .row').children().remove();
		    	$.each(data, function(index, el) {
		    		$('.gallery .row').prepend("<div class='col-md-4 mb-4'><img name='"+el+"' src='../uploads/img/thumbs/"+el+"''><a class='text-danger'>Удалить фото</a></div>")
		    	});
		    });
	    }
	    $('.fileinput-upload-button').on('click', function(event) {
	    	setTimeout(loadAllPhotos(), 5000);
	    	setTimeout(function() {consle.log('hello')}, 5000);
	    });
	    loadAllPhotos();
		$(document).on('click', '.gallery a', function(event) {
	    	event.preventDefault();
	    	var name = $(this).closest('div').find('img').attr('name');
	    	$.ajax({
		    	url: 'index.php?action=deletePhoto&photoName=' + name,
		    	type: 'GET',
		    })
		    .done(function() {
		    	$('img[name="'+name+'"]').closest('div').remove();
		    });
	    });
</script>
</html>