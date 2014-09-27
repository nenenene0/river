<?php

	define('DS', '/');
	define('ROOT', dirname(dirname(__FILE__)));

	$url = $_GET['url'];

	require_once (ROOT . DS . 'include' . DS . 'main.inc.php');

	echo 'Welcome to River PHP Framework'.$asdf;
