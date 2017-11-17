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
    include('admin/header.php');
  ?>
  <div class="mypage-img"></div>
  <div class="container">
    <form>
      <br>
      <input type="text" name="name" class="form-control"><br>
      <div class="form-group">
      <label for="sel1">Select list (select one):</label>
      <select class="form-control" id="sel1">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
      </select><br>
    </form>
  </div>
	<?php 
    include('admin/backtotop.php');
    include('admin/footer.php');
	?>
</body>
</html>
