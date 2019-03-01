<?php

function createPost($link, $data) {
	$date = date('Y-m-d H:s:i');
	$template_add = "INSERT INTO posts (title, content, preview, created_at) VALUES ('%s', '%s', '%s', '%s')";
	$query = sprintf($template_add, 
	                 mysqli_real_escape_string($link, $data['title']),
	                 mysqli_real_escape_string($link, $data['content']),
	                 mysqli_real_escape_string($link, $data['preview']),
	                 mysqli_real_escape_string($link, $date));
	$result = mysqli_query($link, $query);

	if (!$result)
	    die(mysqli_error($link));

	return header('Location: ./');
}

function createPostView() {
	include("./views/createPost.php");
}

function deletePost($link, $id) {
	$query = sprintf("DELETE FROM posts WHERE id='%d'", $id);
	$result = mysqli_query($link, $query);

	return header('Location: ./');
}

function editPost($link, $data) {
	$date = date('Y-m-d H:s:i');

	$template_update = "UPDATE posts SET title='%s', content='%s', created_at='%s' WHERE id='%d'";
	    
	$query = sprintf($template_update, 
	                 mysqli_real_escape_string($link, $data['title']),
	                 mysqli_real_escape_string($link, $data['content']),
	                 mysqli_real_escape_string($link, $date),
	                 $data['id']);

	$result = mysqli_query($link, $query);

	if (!result)
	    die(mysqli_error($link));

	return header('Location: ./');
} 

function editPostView($link, $id) {
	$query = sprintf("SELECT * FROM posts WHERE id=%d", (int)$id);
	$result = mysqli_query($link, $query);

	if (!$result)
	    die(mysqli_error($link));

	$post = mysqli_fetch_assoc($result);

	return include('./views/createPost.php');
}

function getAllPosts($link) {
	$query = "SELECT * FROM posts ORDER BY id DESC";
	$result = mysqli_query($link, $query);

	if(!$result)
		die(mysqli_error($link));

	$n = mysqli_num_rows($result);
	$posts = array();

	for ($i=0; $i < $n; $i++) { 
		$row = mysqli_fetch_assoc($result);
		$posts[] = $row;
	}

	return $posts;
}