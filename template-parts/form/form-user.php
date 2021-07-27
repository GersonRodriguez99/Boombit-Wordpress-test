<?php



$errors = [];
$inputs = [];

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
	require 'form-get.php';
} else {
	require 'form-post.php';

	require count($errors) > 0
		? 'form-get.php'
		: 'form-confirmation.php';
}


?>