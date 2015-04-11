<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/icons/favicon.ico">

    <title>GudangProyek - Buat Akun</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo Yii::app()->baseUrl?>/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <!-- <link href="css/sticky-footer-navbar.css" rel="stylesheet"> -->

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="<?php echo Yii::app()->baseUrl?>/dist/assets/js/ie-emulation-modes-warning.js"></script>
    <script src="<?php echo Yii::app()->baseUrl?>/dist/js/bootstrap.min.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <!-- <div class="body-left"></div>
    <div class="body-right"></div> -->
    <div class="header am-footer">
    </div>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top nav-top am-nav-top">
    </nav>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><img class="client-home" src="<?php echo Yii::app()->baseUrl?>/dist/assets/icons/favicon-60.png">GudangProyek</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="am-active"><a href="<?php echo Yii::app()->baseUrl?>/moderator">Beranda</a></li>
            <li><a href="<?php echo Yii::app()->baseUrl?>/moderator/profile">Profil</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><img class="user-logo" src="<?php echo Yii::app()->baseUrl?>/dist/assets/icons/female-icon.png">Halo, <?php echo Yii::app()->session['user']['Username']?>!<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Pengaturan akun</a></li>
                <li><a href="spec_main.html">Keluar</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
    </nav>

	<?php echo $content; ?>

	<div class="clear"></div>

<footer class="footer am-footer">
      <div class="container">
        <br>
        <!-- <p class="text-muted">Place sticky footer content here.</p> -->
      </div>
      <p class="text-muted">GudangProyek</p>
      <p class="text-contact">Fakultas Ilmu Komputer</p>
      <p class="text-contact">Universitas Indonesia, Depok</p>
      <p class="text-contact">E-mail. &nbsp; gudangproyek@cs.ui.ac.id</p>
      <p class="am-text">B07 &copy; 2015</p>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo Yii::app()->baseUrl?>/dist/assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
