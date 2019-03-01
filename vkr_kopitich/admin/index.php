<?php
require_once('./process/db_connect.php');
require_once('./process/auth.php');
require_once('./process/post.php');

$link = db_connect();
$posts = getAllPosts($link);
$action = (isset($_GET['action']) ? $_GET['action'] : "");
$auth = new AuthClass();
const LOGIN = "admin";
const PASS = "21232f297a57a5a743894a0e4a801fc3";

if ($action == "login" && isset($_POST['login']) && isset($_POST['password'])) {
	$auth->auth($_POST['login'], $_POST['password']);
}elseif ($action == "logout") {
	$auth->out();
}

if (!$auth->isAuth()) {
	include('./views/auth.php');
	exit();
}

switch ($action) {
 	case 'createPost':
 		createPost($link, $_POST);
 		break;

 	case 'createPostView':
 		createPostView();
 		break;

 	case 'deletePost':
 		deletePost($link, $_GET['id']);
 		break;

 	case 'editPostView':
 		editPostView($link, $_GET['id']);
 		break;

 	case 'editPost':
 		editPost($link, $_POST);
 		break;

 	case 'gallery':
 		include('./views/gallery.php');
 		break;

 	case 'getAllPhotos':
 		$path = "../uploads/img/thumbs/";
      	$files = scandir($path); 
      	$gallery_files = array();
      	foreach ($files as $key => $value) {
            if (filetype($path . $value) == "file") { 
                $gallery_files[] = $value;
            }
 	 	}
 	 	echo json_encode($gallery_files);
 		break;

 	case 'deletePhoto':
 		unlink("../uploads/img/thumbs/".$_GET['photoName']);
 		unlink("../uploads/img/".$_GET['photoName']);
 		break;

 	case 'logout':
 		logout();
 		break;
 	
 	default:
 		include('./views/main.php');
 		break;
} 