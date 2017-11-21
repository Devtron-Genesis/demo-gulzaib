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
  <div class="mypage-img"></div>
  <div class="container">
      
    <form action="add-product.php" method="post" enctype="multipart/form-data">
      <br>
      <label for="sel1">Enter the Product Name:</label>
      <input type="text" name="pname" class="form-control" placeholder="Enter the Product Name" required=""><br>
      <div class="form-group">
      <label for="sel1">Select Category (select one):</label>
      <select class="form-control" id="category" name="pcategory" required="">
        <option disabled selected value>All</option>
        <option>Shoes</option>
        <option>Sports Equipments</option>
        <option>Clothes</option>
      </select>
      <br>
      <label for="sel1">Select Size (select one):</label>
      <select class="form-control" id="size" name="psize" required="">
        <option disabled selected value>All</option>
        <option>XL</option>
        <option>Large</option>
        <option>Medium</option>
        <option>Small</option>
      </select>
        <br>
      <label for="sel1">Select Color (select one):</label>
      <select class="form-control" id="color" name="pcolor" required="">
        <option disabled selected value>All</option>
        <option>Black</option>
        <option>White</option>
        <option>Blue</option>
        <option>Yellow</option>
      </select> 
    <br>
    <label for="sel1">Select Price (The price Will be in PKR):</label>
    <input type="number" name="price" min="1" max="5000000" required="" class="form-control" placeholder="Enter the Price">
      <br>
      <label for="sel1">Enter The Discription About Product:</label>
      <textarea class="form-control" required="" name="discription" rows="15"></textarea><br><br>
    <?php
    //  $sql1 = "SELECT * FROM uploadpic";
     // $result = mysqli_query($conn, $sql1);
      //while ($row = mysqli_fetch_array($result)) {
       // $getimg = $row['propicture'];
        //echo "<img src='product-upload/" .$getimg."'>";
      //}
    ?>
      
      <input type="hidden" name="size" value="1000000">
      <div class="file-upload">
        <input type="file" name="image" required="">
        <input type="submit" value="Upload Image" name="image" required="">
      </div>
      </form>
      <?php
        if (isset($_POST['image'])) {
          $pname = $_POST['pname'];
          $pcategory = $_POST['pcategory'];
          $psize = $_POST['psize'];
          $pcolor = $_POST['pcolor'];
          $price = $_POST['price'];
          $discription = $_POST['discription'];
          $query = "SELECT id FROM size WHERE psize = '$psize'";
            $run = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_array($run))  {
              $s_id = $row ['id'];
              }
          $query1 = "SELECT id FROM color WHERE pcolor = '$pcolor'";
            $run1 = mysqli_query($conn, $query1);
            while ($row = mysqli_fetch_array($run1))  {
              $c_id = $row ['id'];
              }
          $query2 = "SELECT id FROM category WHERE pcategory = '$pcategory'";
            $run2 = mysqli_query($conn, $query2);
            while ($row = mysqli_fetch_array($run2))  {
              $p_id = $row ['id'];
              }    
          $sql1 = "INSERT INTO color (pcolor,color_code) values ('$pcolor','')";
          mysqli_query($conn, $sql1);
          if ($sql1) {
            $last_id = mysqli_insert_id($conn);
            $color_id = $last_id + $c_id;
          }
          $sql2 = "INSERT INTO size (psize) values ('$psize')";
          mysqli_query($conn, $sql2);
          if ($sql2) {
            $last_id1 = mysqli_insert_id($conn);
            $size_id = $last_id1 + $s_id;
          }
          $sql3 = "INSERT INTO category (pname,pcategory,discription,size_id,color_id) values ('$pname','$pcategory','$discription','$size_id','$color_id')";
          mysqli_query($conn, $sql3);
          if ($sql3) {
            $last_id2 = mysqli_insert_id($conn);
            $pro_id = $last_id2 + $p_id;
          }
          $sql4 = "INSERT INTO price (price,pro_id,color_id,size_id) values ('$price','$pro_id','$color_id','$size_id')";
          mysqli_query($conn, $sql4);
          $target = "product-upload/" .basename($_FILES['image']['name']);
          $images = $_FILES['image']['name'];
          $sql = "INSERT INTO uploadpic (propicture) values ('$images')";
          mysqli_query($conn, $sql);
          move_uploaded_file($_FILES['image']['tmp_name'], $target);
        }
      ?>
</div>
</div>
	<?php 
    include('backtotop.php');
    include('footer.php');
	?>
</body>
</html>


 $result1 = "SELECT id FROM category WHERE category = '$category'";
            $run1 = mysqli_query($conn, $result1);
            while ($row = mysqli_fetch_array($run1))  {
                $cid = $row ['id'];
              }