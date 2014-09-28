<?php

	class Render
	{
		// Render {title, content, layout=boolean}

		function __construct($file, $content, $layout = true) {
			global $_SITE_NAME;
			$this->title = $file.' | '.$_SITE_NAME;
			$this->content = $content;
			$this->layout = $layout;
		}

		function display() {
			if($this->layout == true)
				include('/var/www/river/layouts/layout.html.php');
			else
				include('/var/www/river/layouts/nulldesign.html.php');
		}





	};