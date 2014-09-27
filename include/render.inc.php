<?php

	class Render
	{
		var $page = 'yes';







		function render($layout){

			$this->completePage = $this->page;
			exit($this->completePage);
		}
	};