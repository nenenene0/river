<?php
	require_once (ROOT . DS . 'include' . DS . 'output.inc.php');

	// page rendering starts from here.
	// render.inc.php takes the final $_content variable and assembles the final page before display.

	// check if site is up
	if($_SITE_STATUS != 'up')
	{
		$output = new Render('Site Down', file_get_contents(ROOT . DS . 'staticPages' . DS . 'site_down.html'), false);
		$output->display();
		exit();
	}
	// check if $url == '' redirect to home page.
	if($url == '')
	{
		$output = new Render('Home', file_get_contents(ROOT . DS . 'staticPages' . DS . 'home_page.html'), true);
		$output->display();
		exit();
	}
	
	// check if $url exists, and then pass the file(string) to render.inc.php
	$file = explode('/', $url);
	$file = $file[0];
	$file_path = ROOT . DS . 'pages' . DS . $file;
	if(file_exists($file_path)) 
	{
		$output = new Render($file, file_get_contents($file_path), true);
		$output->display();
	}
	else
	{
		$output = new Render($file,'Page Does Not Exist.', true);
		$output->display();
	}


	exit();



