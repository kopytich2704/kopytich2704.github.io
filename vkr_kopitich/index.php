<?php
require_once('./process/db_connect.php');
require_once('./process/post.php');

$link = db_connect();
$posts = getLastPosts($link);
$action = (isset($_GET['action']) ? $_GET['action'] : "");

switch ($action) {
 	case 'about':
 		include('views/about.php');
 		break;

 	case 'news':
 		$posts = getAllPosts($link);
 		include('views/news.php');
 		break;

 	case 'post':
 		$post = getPost($link, $_GET['id']);
 		include('views/post.php');
 		break;

 	case 'health':
 		include('views/health.php');
 		break;

 	case 'contacts':
 		include('views/contacts.php');
 		break;

 	case 'gallery':
 		include('views/gallery.php');
 		break;

 	case 'galleryGetPhotos':
 		$path = "./uploads/img/thumbs/";
      	$files = scandir($path); 
      	$gallery_files = array();
      	foreach ($files as $key => $value) {
            if (filetype($path . $value) == "file") { 
                $gallery_files[] = $value;
            }
 	 	}
 		echo json_encode($gallery_files);
 		break;

 	default:
 		include('views/home.php');
 		break;
} 