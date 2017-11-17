<?php
	include('connection.php');
  session_start();

?>
<!DOCTYPE html>
<html>
<head>
  <title>XXL Sports and Wear Assessories</title>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1" name="viewport"><!-- Font Awsome -->
  <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet"><!-- Icon Style  -->
  <link href="css/IconSet/icon-set-new.css" rel="stylesheet"><!-- <link rel="stylesheet"  href="css/IconSet/fonts/untitled-font-3.ttf"> -->
  <!-- Boot Strap -->
  <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link rel="icon" type="image/png" href="img/logo.png">
  <script src="bootstrap/js/tests/vendor/jquery.min.js"></script>
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- Style sheet -->
  <script src="js/script.js"> </script>
  <link href="css/style.css" rel="stylesheet" type="text/css">
  <link href="css/rwd.css" rel="stylesheet" type="text/css">
</head>
<body>
	<?php 
    include('header.php');
  ?>
  <div class="mypage-img">
    <div class="mypage-search container">
      <input type="search" name="" class="form-control">
      <a href=""><i class="fa fa-user-o fa-lg" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;MY PAGE</a>
      <span class="thead"><a href="">HELP&nbsp;&nbsp;&nbsp;<i class="fa fa-commenting" aria-hidden="true"></i></a></span>   
    </div>
  </div>
  <div class="container mypage">
  	<h1>YOUR XXL</h1>
  	<div class="order col-lg-8 col-md-8 col-sm-12 col-xs-12">
  		<h3>ORDER HISTORY</h3>
      <p>You have no registered orders</p>  
  	</div>
  	<div class="page-password col-lg- col-md-3 col-sm-12 col-xs-12">
  		<h3>PASSWORD</h3>
      <p>Update your password</p>
  		<form method="post">
        <input type="submit" name="signin" required="" value="SIGN IN" class="btn  btn-block register1">
  		</form>
  	</div>
    <div class="e-receipts col-lg-4 col-md-4 col-sm-12 col-xs-12">
      <h3>HANDLING OF E-RECEIPTS </h3>
      <p>You have not registered for electronic receipts.</p><hr>
      <form method="post">
        <input type="submit" name="signin" required="" value="SIGN IN" class="btn  btn-block register1">
      </form>
    </div>
    <div class="contact col-lg-3 col-md-3 col-sm-12 col-xs-12">
      <h3>CONTACT</h3>
      <form method="post">
        <input type="submit" name="signin" required="" value="SIGN IN" class="btn  btn-block register1">
      </form>
    </div>
  </div>
	<?php 
    include('backtotop.php');
    include('footer.php');
	?>
</body>
</html>
