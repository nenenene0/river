<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title><?php echo $this->title; ?></title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">

  <link rel="stylesheet" href="/assets/css/main.css">

  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>

<body>
  <div class="wrapper">

    <?php include('header.html'); ?>
    <div class="content">
      <?php echo $this->content; ?>
    </div>

    <?php include('footer.html'); ?>

  </div>
</body>
</html>