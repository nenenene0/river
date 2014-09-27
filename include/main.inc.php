<?php

	require_once (ROOT . DS . 'config' . DS . 'main.config.php');

	if($_ERRORS_DEBUG == true)
	{
		error_reporting(E_ALL);
    	ini_set('display_errors','On');
    }