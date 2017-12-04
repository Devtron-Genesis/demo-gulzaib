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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <!-- Style sheet -->
  <script src="js/script.js"> </script>
  <link href="css/style.css" rel="stylesheet" type="text/css">
  <link href="css/rwd.css" rel="stylesheet" type="text/css">
</head>
<body>
	<?php 
    include('header.php');
      $query = "SELECT * FROM SHOES"; 
        $run = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_array($run))  {
         $color = $row ['color'];
         $size = $row ['size'];
          }
  ?>
  <div class="container product_page">
    <div class="product-image col-lg-7 col-md-7 ">
      <h1>Product Name</h1>
      <div class="zoomple">
     <span class='zoom' id='ex1'><img id="zoom_01" width='320' height='320' src='img/4-1.jpg'></span>
      </div>
    </div>
    <div class="product-detail col-lg-5 col-md-5">
      <h1>51, -</h1>
      <div class="buy">
        <h1>color:<?php $color   ?></h1>
        <img src="img/4-1.jpg">
        <br>
        <h1>size</h1>
        <?php $size?>
        <i class="fa fa-truck fa-5x" aria-hidden="true"></i>
        <h5> RETURN AND CHANGE &nbsp;&nbsp; SHIPS WITHIN 2-5 BUSINESS DAYS</h5>
      </div>
    </div>
  </div>

	<?php 
    include('backtotop.php');
    include('footer.php');
	?>
</body>
</html>
