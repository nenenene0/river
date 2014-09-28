<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title><?php echo $this->title; ?></title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="Bhaswanth Blan">

  <link rel="stylesheet" href="/assets/css/main.css">

  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>

<body>
  <div class="wrapper">

    <?php include('header.html.php'); ?>
    
    <div class="content content-left">
      <?php echo $this->content; ?>
    </div>

    <div class="content content-right">
      <?php include('pages_list.html.php'); ?>
    </div>

    <?php include('footer.html.php'); ?>

  </div>
</body>
</html>