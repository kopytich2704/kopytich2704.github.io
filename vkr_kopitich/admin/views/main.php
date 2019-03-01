<!DOCTYPE html>
<html>
<head>
	<title>Панель администратора</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./assets/css/fileinput.css">
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
			<!-- <li class="nav-item">
				<a class="badge badge-light navbar-brand" href="http://logout:logout@<?= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>">Написать новый пост</a>
			</li> -->
		</ul>
	</nav>
	<div class="py-5 bg-light">
		<div class="container">
			<div class="row justify-content-md-center">
				<div class="col-md-10">
					<div class="row ">
						<div class="container mb-4">
							<h4 class="mb-3">Список постов</h4>
							<a class="btn btn-outline-success" href="index.php?action=createPostView">Написать новый пост</a>
						</div>
					</div>
					<table class="table table-hover">
						<thead>
							<tr>
								<th>#</th>
								<th style="width: 60%;">Название</th>
								<th>Действия</th>
							</tr>
						</thead>
						<tbody>
							<?php 
								$i = 1;
								foreach ($posts as $key => $post) {
									echo "<tr>
											<td scope='row'>".$i++."</td>
											<td>".$post['title']."</td>
											<td>
												<a class='btn btn-info' href='index.php?action=editPostView&id=".$post['id']."'>Редактировать</a>
												<a class='btn btn-danger' href='index.php?action=deletePost&id=".$post['id']."'>Удалить</a>
											</td>
										</tr>";
								} 
							?>
						</tbody>
					</table>
				</div>					
			</div>
		</div>
	</div>
</body>
<script type="text/javascript" src="./assets/js/jquery.min.js"></script>
</script>
</html>