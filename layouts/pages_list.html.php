<ul>
	<?php
		// $this->pageList has all the files list.

		$output = '';
		foreach ($this->pagesList as $key) {
			$output .= '<li><a href="/'. $key .'">'. $key .'</a></li>';
		}
		echo $output;
	?>

</ul>