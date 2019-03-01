<?php

function getLastPosts($link) {
	$query = "SELECT * FROM posts ORDER BY id DESC LIMIT 0, 4";
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

function getPost($link, $id) {
	$query =  sprintf("SELECT * FROM posts WHERE id=%d", (int)$id);
	$result = mysqli_query($link, $query);

	if (!$result)
	    die(mysqli_error($link));

	$post = mysqli_fetch_assoc($result);

	return $post;
}