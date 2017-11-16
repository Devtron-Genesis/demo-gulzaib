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
  <link href="../font-awesome/css/font-awesome.css" rel="stylesheet">
  <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet"><!-- Icon Style  -->
  <link href="../css/IconSet/icon-set-new.css" rel="stylesheet"><!-- <link rel="stylesheet"  href="css/IconSet/fonts/untitled-font-3.ttf"> -->
  <!-- Boot Strap -->
  <link href="../bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link rel="icon" type="image/png" href="../img/logo.png">
  <script src="../bootstrap/js/tests/vendor/jquery.min.js"></script>
  <script src="../js/jquery-3.2.1.min.js"></script>
  <script src="../bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- Style sheet -->
  <script src="../js/script.js"> </script>
  <link href="../css/style.css" rel="stylesheet" type="text/css">
  <link href="../css/rwd.css" rel="stylesheet" type="text/css">
</head>
<body>
	<?php 
    include('../admin/header.php');
  ?>
  <div class="container account">
  	<h1>LOG IN OR CREATE ACCOUNT HERE</h1>
  	<div class="signin col-lg-4 col-md-4 col-sm-12 col-xs-12">
  		<h3>SIGN IN</h3>
  		<form method="post">
  			<input type="email" name="email" required="" class="form-control" placeholder="Email">
  			<br>
  			<input type="password" name="password" required="" class="form-control" placeholder="Password">
  			<br>
  			<input type="submit" name="signin" required="" value="SIGN IN" class="btn  btn-block register1">
  		</form>
  		<?php
  			if (isset($_POST['signin'])) {
	  				$email = $_POST['email'];
	  				$password = $_POST['password'];
          		$result1 = "SELECT * FROM register WHERE email = '$email' AND password = '$password'";
    					$run1 = mysqli_query($conn, $result1);
          		while ($row = mysqli_fetch_array($run1))  {
	        		 	$email1 = $row['email'];
	        		 	$password1 = $row['password'];
                $_SESSION["email"] = $email1;
                $_SESSION["password"] = $password1;
	          			if (($email1 == $email) && ($password1 == $password)) {
	            			echo "<script>window.location.href = 'mypage.php';</script>";
	          			}
	          			else {
	            			echo "<p style='color:red;'>Password does not match<p>";
	          			}
	      			}  
  			}
  		?>
  	</div>
  	<div class="signup col-lg-7 col-md-7 col-sm-12 col-xs-12">
  		<h3>REGISTER</h3>
  		<form method="post">
  			<input type="text" name="firstname" required="" class="form-control register1" placeholder="First Name">
  			<input type="text" name="lastname" required="" class="form-control register1" placeholder="Last Name">
  			<input type="email" name="email" required="" class="form-control register1" placeholder="Email">
  			<input type="email" name="emailconf" required="" class="form-control register1" placeholder="Confirm your Email">
  			<input type="password" name="password" required="" class="form-control register1" placeholder="Password">
  			<input type="submit" name="register" required="" value="REGISTER" class="btn btn-block form-control register1">
  		</form>
  		<?PHP
  			if (isset($_POST['register'])) {
	  				$first_name = $_POST['firstname'];
	  				$last_name = $_POST['lastname'];
	  				$email = $_POST['email'];
	  				$emailconf = $_POST['emailconf'];
	  				$password = $_POST['password'];
	  				$sql = "INSERT INTO register (fname, lname, email, emailconf, password) VALUES ('$first_name','$last_name','$email','$emailconf','$password')" ;
          		mysqli_query($conn, $sql);
          		$result = "SELECT * FROM register WHERE email = '$email' AND emailconf = '$emailconf'";
    					$run = mysqli_query($conn, $result);
          		while ($row = mysqli_fetch_array($run))  {
	        		 	$email = $row['email'];
	        		 	$emailconf = $row['emailconf'];
	          			if ($email == $emailconf) {
	            			echo "<script>window.location.href = '../index.php';</script>";
	          			}
	          			else {
	            			echo "<p style='color:red;'>email does not match<p>";
	          			}
	      			}  
  			}
  		?>
  	</div>
  </div>
	<?php 
    include('../admin/backtotop.php');
    include('../admin/footer.php');
	?>
</body>
</html>
