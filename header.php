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
  <div class="start navbar-fixed-top">
    <div class="container-fluid header">
      <div class="top-nav col-lg-12 col-md-12">
        <form method="post">
        <ul class="top-ul">
          <li><a href="#"><i class="fa fa-star-o fa-lg" aria-hidden="true"></i>XXL BLOG</a></li>
          <li><a href="#"><i class="fa fa-map-marker fa-lg" aria-hidden="true"></i>OUR DEPARTMENT STORE</a></li>
          <li><a href="#"><i class="fa fa-clone" aria-hidden="true"></i>CUSTOMER SERVICE</a></li>
          <!-- <li><a href='signin.php'><i class='fa fa-user-o fa-lg' aria-hidden='true'></i>SIGN IN</a></li> -->
          <?php
            if ($_SESSION["email"]) {
             echo "<li><form method='post'><input type='submit' name='logout' value='logout'></form></li>";  
            }
            else {
             echo "<li><a href='signin.php'><i class='fa fa-user-o fa-lg' aria-hidden='true'></i>SIGN IN</a></li>"; 
            }
            if (isset($_POST["logout"])) {
              session_destroy();
              session_unset(); 
              echo "<script>window.location.href = 'index.php';</script>";
            }
          ?>
        </ul>
        </form>
      </div>
      <div>
        <ul class="top-items col-md-12 col-lg-12">
          <li class="col-lg-2 col-md-2"><a href="index.php"><img src="img/logo1.png"></a></li>
          <li class="col-lg-2 col-md-2"><h4>ALL SPORTS UNITED</h4></li>
          <li class="col-lg-5 col-md-5"><input type="search" name="search" class="form-control" placeholder="Search for Products"></li>
          <li class="col-lg-3 col-md-3"><a href="#"><i class="fa fa-shopping-cart fa-3x" aria-hidden="true"></i><a>
            <?php
              if ($_SESSION["uid"] == '1') {
                echo "<a href='add-product.php'><h4>Add Your Product</h4></a></li>";

              }
              else {
               echo "<a href=''><h4>EMPTY SHOPPING CART</h4></a></li>"; 
              }
            ?>
        </ul>
      </div>
      <div class="second-nav">
        <ul>
          <li><a href="">WINTER SPORTS</a></li>
          <li><a href="">CLOTHE</a></li>
          <li><a href="">SHOES</a></li>
          <li><a href="">HUNTING &amp; REACTION</a></li>
          <li><a href="">SPORTS &amp; BALL GAMES</a></li>
          <li><a href="">EXERCISE</a></li>
          <li><a href="">ELECTRONICS</a></li>
        </ul>
      </div>
    </div>
  </div>
</body>
</html>
