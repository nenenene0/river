<?php

	class RenderPage
	{
		// Call RenderPage with the page name(root/pages), if it exists it is rendered. Else static page_down is rendered.
		function __construct($file, $layout = true) {
			global $_SITE_NAME;

			$this->file_path = ROOT . DS . 'pages' . DS . $file;

			// if page exists render page, else render error page.
			if(file_exists($this->file_path)) 
				$this->content = file_get_contents($this->file_path);
			else
				new RenderStatic('page_down.html');

			$this->title = explode('.', $file);
			$this->title = ucwords(preg_replace('/_/', ' ', $this->title[0])).' | '.$_SITE_NAME;
			$this->layout = $layout;

			// This is a bad practise since this is a class. Need to change.
			$this->display();
		}

		function display() {
			if($this->layout == true)
				include('/var/www/river/layouts/layout.html.php');
			else
				include('/var/www/river/layouts/nulldesign.html.php');
			exit();
		}
	}

	Class RenderStatic
	{
		// call RenderStatic with static page(root/staticPages/).
		function __construct($file, $layout = true) {
			global $_SITE_NAME;
			$this->file_path = ROOT . DS . 'staticPages' . DS . $file;

			// if page exists render page, else render error page.
			if(file_exists($this->file_path))
				$this->content = file_get_contents($this->file_path);
			else
				new RenderStatic('page_down.html');

			$this->title = explode('.', $file);
			$this->title = ucwords(preg_replace('/_/', ' ', $this->title[0])).' | '.$_SITE_NAME;

			$this->layout = $layout;

			// This is a bad practise since this is a class. Need to change.
			$this->display();
		}

		function display() {
			if($this->layout == true)
				include('/var/www/river/layouts/layout.html.php');
			else
				include('/var/www/river/layouts/nulldesign.html.php');
			exit();
		}
	}