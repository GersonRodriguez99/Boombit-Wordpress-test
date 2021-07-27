<?php
$errors = [];
$inputs = [];

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
	require 'form-newsletter.php';
} else {
	require 'form-subscribe-post.php';

	require count($errors) > 0
		? 'form-newsletter.php'
		: 'form-confirmation-subcription.php';
}



?>