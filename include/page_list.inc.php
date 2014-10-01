<?php

	// return array of pages files present in /pages folder.
	function pageList(){
		$path    = ROOT . DS . 'pages';
		$pagesArray = array_diff(scandir($path), array('..', '.', '.svn','.htaccess'));

		foreach ($pagesArray as $page) {
			$tmp[basename($page)] = filemtime($page);
		}
		asort($tmp);
		$pagesArray = array_keys($tmp);

		// sorting by date can be added but name wise listing pages seems more pleasing.
		// later add extra sort-by-date option.
		return $pagesArray;
	}