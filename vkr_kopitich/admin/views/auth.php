<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body class="bg-light">
	<nav class="navbar collapse bg-dark">
		<ul class="nav">
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
		<div class="row justify-content-md-center">
			<div class="col-md-6">
				<h4 class="mb-3">Авторизация</h4>
				<form action="./?action=login" method="POST">
					<label for="login">Логин</label>
					<input class="form-control" type="text" name="login" value="<?=(isset($_POST['login'])) ? $_POST['login'] : ''?>" required>
					<label for="password">Пароль</label>
					<input class="form-control" type="password" name="password" value="" required>
					<hr class="mb-4">
					<input class="btn btn-success" type="submit" name="">
				</form>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="./assets/js/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
</body>
</html>