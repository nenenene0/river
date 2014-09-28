<?php
	// The main include file... This is the starting point from index.php

	require_once (ROOT . DS . 'config' . DS . 'main.config.php');
	require_once (ROOT . DS . 'include' . DS . 'redirect.inc.php');

	if($_ERRORS_DEBUG == true)
	{
		error_reporting(E_ALL);
    	ini_set('display_errors','On');
    } else {
		error_reporting(E_ALL);
		ini_set('display_errors','Off');
		ini_set('log_errors', 'On');
		ini_set('error_log', ROOT.DS.'tmp'.DS.'logs'.DS.'error.log');
    }