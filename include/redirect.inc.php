<?php
	require_once (ROOT . DS . 'include' . DS . 'render.inc.php');

	// page rendering starts from here.
	// render.inc.php takes the final $_content variable and assembles the final page before display.

	// check if site is up
	if($_SITE_STATUS != 'up')
		$output = new RenderStatic('site_down.html', false);
	// check if $url == '' redirect to home page.
	if($url == '')
		$output = new RenderStatic('home_page.html', true);
	
	// check if $url exists, and then pass the file(string) to render.inc.php
	// render staticpage or page if string contains /s/
	$page = explode('/', $url);
	$file = $page[0];

	if($file == 's')
		$output = new RenderStatic($page[1]);
	else
		$output = new RenderPage($file, true);

	exit();