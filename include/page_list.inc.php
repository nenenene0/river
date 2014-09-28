<?php

	// return array of pages files present in /pages folder.
	function pageList(){
		$path    = ROOT . DS . 'pages';
		$pageList = array_diff(scandir($path), array('..', '.', '.svn','.htaccess'));

		return $pageList;
	}