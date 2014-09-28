<?php

	// return array of pages files present in /pages folder.
	function pageList(){
		$path    = ROOT . DS . 'pages';
		$pageList = array_diff(scandir($path), array('..', '.', '.svn','.htaccess'));

		// sorting by date can be added but name wise listing pages seems more pleasing.
		// later add extra sort-by-date option.
		return $pageList;
	}