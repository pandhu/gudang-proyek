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
    <script src="<?php echo Yii::app()->baseUrl?>/dist/assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <div class="header am-header">
    </div>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top nav-top am-nav-top">
    </nav>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="main-header">
          <img class="logo" src="<?php echo Yii::app()->baseUrl?>/dist/assets/icons/favicon-72.png">
          <h1 class="gudang-proyek">GudangProyek</h1>
        </div>
        <!--/.nav-collapse -->
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="<?php echo Yii::app()->baseUrl?>/dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo Yii::app()->baseUrl?>/dist/assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
