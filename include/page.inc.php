<?php

	// page rendering starts from here.
	// render.inc.php takes the final $_content variable and assembles the final page before display.

	// check if site is up
	if($_SITE_STATUS != 'up')
		exit(file_get_contents( ROOT . DS . 'static' . DS . 'site_down.html' ));

	// check if $url == '' redirect to home page.
	if($url == '')
		exit(file_get_contents( ROOT . DS . 'static' . DS . 'home_page.html' ));

	// check if $url exists, and then pass the file along to render.inc.php
	require_once (ROOT . DS . 'include' . DS . 'render.inc.php');
	