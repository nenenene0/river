<?php

	require_once (ROOT . DS . 'include' . DS . 'page_list.inc.php');

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

			$this->name = explode('.', $file);
			$this->name = ucwords(preg_replace('/_/', ' ', $this->name[0]));
			$this->title = $this->name.' | '.$_SITE_NAME;
			$this->layout = $layout;
			$this->content = '<h3>' . $this->name . '</h3>' . $this->content;

			// This is a bad practise since this is a class. Need to change.
			$this->display();
		}

		function display() {
			$this->pagesList = pageList();

			if($this->layout == true)
				include(ROOT . DS . 'layouts/layout.html.php');
			else
				include(ROOT . DS . 'layouts/nulldesign.html.php');
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

			$this->name = explode('.', $file);
			$this->name = ucwords(preg_replace('/_/', ' ', $this->name[0]));
			$this->title = $this->name.' | '.$_SITE_NAME;
			$this->layout = $layout;

			// This is a bad practise since this is a class. Need to change.
			$this->display();
		}

		function display() {
			$this->pagesList = pageList();

			if($this->layout == true)
				include(ROOT . DS . 'layouts/layout.html.php');
			else
				include(ROOT . DS . 'layouts/nulldesign.html.php');
			exit();
		}
	}