<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="./assets/js/summernote/summernote-bs4.css">
</head>
<body class="bg-light">
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
				<div class="col-md-8">
					<h4 class="mb-3"><?=(isset($_GET['id'])) ? "Редактирование поста" : "Создание поста" ?></h4>
					<form class="needs-validation" method="post" action="<?=(isset($_GET['id'])) ? "index.php?action=editPost" : "index.php?action=createPost" ?>">
						<label for="title">Заголовок</label>
						<input class="form-control" type="text" name="title" value="<?=(isset($post['title'])) ? $post['title'] : "" ?>" required>
						<label for="content">Контент</label>
						<textarea id="content" class="form-control" name="content" required>
							<?=(isset($post['content'])) ? $post['content'] : "" ?>
						</textarea>
						<input type="hidden" name="id" value="<?=(isset($post['id'])) ? $post['id'] : "" ?>">
						<hr class="mb-4">
						<input class="btn btn-success" type="submit" name="">
					</form>
				</div>					
			</div>
		</div>
	</div>
	<script type="text/javascript" src="./assets/js/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
	<script src="./assets/js/summernote/summernote-bs4.js"></script>
	<script type="text/javascript">
		$('#content').summernote({
	        placeholder: '...',
	        tabsize: 2,
	        height: 400
      	});
	</script>
</body>
</html>