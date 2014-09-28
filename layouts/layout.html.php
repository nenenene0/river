<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title><?php echo $this->title; ?></title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">

  <link rel="stylesheet" href="css/styles.css?v=1.0">

  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>

<body>
	<?php include('header.html'); ?>

	<?php echo $this->content; ?>
	
	<?php include('footer.html'); ?>
</body>
</html>