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
      <!-- <input type="text" name="pname" class="form-control" placeholder="Enter the Product Name" required=""><br> -->
      <div class="form-group">
      <label for="sel1">Select Category (select one):</label>
      <fieldset>
        <ul>
          <li>
            <input type="radio" name="check" value="Shoes" id="immigrant">
            <label for="requirement-2">Shoes</label>
            <fieldset class="conditional">
              <ul>
                <li>
                  <input type="checkbox" id="option-2" name="40s_size[]" value="40">
                  <label for="option-2">40</label>
                  <fieldset class="conditional">
                    <ul>
                      <li>
                        <input type="checkbox" id="option-2" name="40s_color[]" value="black">
                        <label for="option-2">Black</label>
                        <fieldset class="conditional">
                          <ul>
                            <li>
                              <label for="sel1">Select Price (The price Will be in PKR):</label>
                              <input type="text" name="40s_price[]" value="">
                              <li> <label for="sel1">Select Quantity:</label>
                                <input type="text" name="">
                                <br>
                              </li>
                            </ul>
                          </fieldset>
                        </li>
                      </ul>
                    </fieldset>
                    <fieldset class="conditional">
                      <ul>
                        <li>
                          <input type="checkbox" id="option-2" name="40s_color[]" value="blue">
                          <label for="option-2">blue</label>
                          <fieldset class="conditional">
                            <ul>
                              <li>
                                <label for="sel1">Select Price (The price Will be in PKR):</label>
                                <input type="text" name="40s_price[]" value="">
                                <li> <label for="sel1">Select Quantity:</label>
                                  <input type="text" name="">
                                  <br>
                                </li>
                              </ul>
                            </fieldset>
                          </li>
                        </ul>
                      </fieldset>
                      <fieldset class="conditional">
                        <ul>
                          <li>
                            <input type="checkbox" id="option-2" name="40s_color[]" value="white">
                            <label for="option-2">white</label>
                            <fieldset class="conditional">
                              <ul>
                                <li>
                                  <label for="sel1">Select Price (The price Will be in PKR):</label>
                                  <input type="text" name="40s_price[]" value="">
                                  <li> <label for="sel1">Select Quantity:</label>
                                    <input type="text" name="">
                                    <br>
                                  </li>
                                </ul>
                              </fieldset>
                            </li>
                          </ul>
                        </fieldset>
                      </li>
                    </ul>
                  </fieldset>
                  <fieldset class="conditional">
                    <ul>
                      <li>
                        <input type="checkbox" id="option-2" name="41s_size[]" value="41">
                        <label for="option-2">41</label>
                        <fieldset class="conditional">
                          <ul>
                            <li>
                              <input type="checkbox" id="option-2" name="41s_color[]" value="black">
                              <label for="option-2">black</label>
                              <fieldset class="conditional">
                                <ul>
                                  <li>
                                    <label for="sel1">Select Price (The price Will be in PKR):</label>
                                    <input type="text" name="41s_price[]">
                                    <li> <label for="sel1">Select Quantity:</label>
                                      <input type="text" name="">
                                      <br>
                                    </li>
                                  </ul>
                                </fieldset>
                              </li>
                            </ul>
                          </fieldset>
                          <fieldset class="conditional">
                            <ul>
                              <li>
                                <input type="checkbox" id="option-2" name="41s_color[]" value="blue">
                                <label for="option-2">blue</label>
                                <fieldset class="conditional">
                                  <ul>
                                    <li>
                                      <label for="sel1">Select Price (The price Will be in PKR):</label>
                                      <input type="text" name="41s_price[]">
                                      <li> <label for="sel1">Select Quantity:</label>
                                        <input type="text" name="">
                                        <br>
                                      </li>
                                    </ul>
                                  </fieldset>
                                </li>
                              </ul>
                            </fieldset>
                            <fieldset class="conditional">
                              <ul>
                                <li>
                                  <input type="checkbox" id="option-2" name="41s_color[]" value="white">
                                  <label for="option-2">white</label>
                                  <fieldset class="conditional">
                                    <ul>
                                      <li>
                                        <label for="sel1">Select Price (The price Will be in PKR):</label>
                                        <input type="text" name="41s_price[]">
                                        <li> <label for="sel1">Select Quantity:</label>
                                          <input type="text" name="">
                                          <br>
                                        </li>
                                      </ul>
                                    </fieldset>
                                  </li>
                                </ul>
                              </fieldset>
                            </li>
                          </ul>
                        </fieldset>
                        <fieldset class="conditional">
                          <ul>
                            <li>
                              <input type="checkbox" id="option-2" name="42s_size[]" value="42">
                              <label for="option-2">42</label>
                              <fieldset class="conditional">
                                <ul>
                                  <li>
                                    <input type="checkbox" id="option-2" name="42s_color[]" value="black">
                                    <label for="option-2">black</label>
                                    <fieldset class="conditional">
                                      <ul>
                                        <li>
                                          <label for="sel1">Select Price (The price Will be in PKR):</label>
                                          <input type="text" name="42s_price[]">
                                          <li> <label for="sel1">Select Quantity:</label>
                                            <input type="text" name="">
                                            <br>
                                          </li>
                                        </ul>
                                      </fieldset>
                                    </li>
                                  </ul>
                                </fieldset>
                                <fieldset class="conditional">
                                  <ul>
                                    <li>
                                      <input type="checkbox" id="option-2" name="42s_color[]" value="blue">
                                      <label for="option-2">blue</label>
                                      <fieldset class="conditional">
                                        <ul>
                                          <li>
                                            <label for="sel1">Select Price (The price Will be in PKR):</label>
                                            <input type="text" name="42s_price[]">
                                            <li> <label for="sel1">Select Quantity:</label>
                                              <input type="text" name="">
                                              <br>
                                            </li>
                                          </ul>
                                        </fieldset>
                                      </li>
                                    </ul>
                                  </fieldset>
                                  <fieldset class="conditional">
                                    <ul>
                                      <li>
                                        <input type="checkbox" id="option-2" name="42s_color[]" value="white">
                                        <label for="option-2">white</label>
                                        <fieldset class="conditional">
                                          <ul>
                                            <li>
                                              <label for="sel1">Select Price (The price Will be in PKR):</label>
                                              <input type="text" name="42s_price[]">
                                              <li> <label for="sel1">Select Quantity:</label>
                                                <input type="text" name="">
                                                <br>
                                              </li>
                                            </ul>
                                          </fieldset>
                                        </li>
                                      </ul>
                                    </fieldset>
                                  </li>
                                </ul>
                              </fieldset>
                            </li>
                          </ul>
                        </fieldset>
                        <fieldset>
                          <ul>
                            <li>
                              <input type="radio" name="check" value="Clothes" id="immigrant">
                              <label for="requirement-2">Clothes</label>
                              <fieldset class="conditional">
                                <ul>
                                  <li>
                                    <input type="checkbox" id="option-2">
                                    <label for="option-2">large</label>
                                    <fieldset class="conditional">
                                      <ul>
                                        <li>
                                          <input type="checkbox" id="option-2">
                                          <label for="option-2">black</label>
                                          <fieldset class="conditional">
                                            <ul>
                                              <li>
                                                <label for="sel1">Select Price (The price Will be in PKR):</label>
                                                <input type="text" name="">
                                                <li> <label for="sel1">Select Quantity:</label>
                                                  <input type="text" name="">
                                                  <br>
                                                </li>
                                              </ul>
                                            </fieldset>
                                          </li>
                                        </ul>
                                      </fieldset>
                                      <fieldset class="conditional">
                                        <ul>
                                          <li>
                                            <input type="checkbox" id="option-2">
                                            <label for="option-2">blue</label>
                                            <fieldset class="conditional">
                                              <ul>
                                                <li>
                                                  <label for="sel1">Select Price (The price Will be in PKR):</label>
                                                  <input type="text" name="">
                                                  <li> <label for="sel1">Select Quantity:</label>
                                                    <input type="text" name="">
                                                    <br>
                                                  </li>
                                                </ul>
                                              </fieldset>
                                            </li>
                                          </ul>
                                        </fieldset>
                                        <fieldset class="conditional">
                                          <ul>
                                            <li>
                                              <input type="checkbox" id="option-2">
                                              <label for="option-2">white</label>
                                              <fieldset class="conditional">
                                                <ul>
                                                  <li>
                                                    <label for="sel1">Select Price (The price Will be in PKR):</label>
                                                    <input type="text" name="">
                                                    <li> <label for="sel1">Select Quantity:</label>
                                                      <input type="text" name="">
                                                      <br>
                                                    </li>
                                                  </ul>
                                                </fieldset>
                                              </li>
                                            </ul>
                                          </fieldset>
                                        </li>
                                      </ul>
                                    </fieldset>
                                    <fieldset class="conditional">
                                      <ul>
                                        <li>
                                          <input type="checkbox" id="option-2">
                                          <label for="option-2">medium</label>
                                          <fieldset class="conditional">
                                            <ul>
                                              <li>
                                                <input type="checkbox" id="option-2">
                                                <label for="option-2">black</label>
                                                <fieldset class="conditional">
                                                  <ul>
                                                    <li>
                                                      <label for="sel1">Select Price (The price Will be in PKR):</label>
                                                      <input type="text" name="">
                                                      <li> <label for="sel1">Select Quantity:</label>
                                                        <input type="text" name="">
                                                        <br>
                                                      </li>
                                                    </ul>
                                                  </fieldset>
                                                </li>
                                              </ul>
                                            </fieldset>
                                            <fieldset class="conditional">
                                              <ul>
                                                <li>
                                                  <input type="checkbox" id="option-2">
                                                  <label for="option-2">blue</label>
                                                  <fieldset class="conditional">
                                                    <ul>
                                                      <li>
                                                        <label for="sel1">Select Price (The price Will be in PKR):</label>
                                                        <input type="text" name="">
                                                        <li> <label for="sel1">Select Quantity:</label>
                                                          <input type="text" name="">
                                                          <br>
                                                        </li>
                                                      </ul>
                                                    </fieldset>
                                                  </li>
                                                </ul>
                                              </fieldset>
                                              <fieldset class="conditional">
                                                <ul>
                                                  <li>
                                                    <input type="checkbox" id="option-2">
                                                    <label for="option-2">white</label>
                                                    <fieldset class="conditional">
                                                      <ul>
                                                        <li>
                                                          <label for="sel1">Select Price (The price Will be in PKR):</label>
                                                          <input type="text" name="">
                                                          <li> <label for="sel1">Select Quantity:</label>
                                                            <input type="text" name="">
                                                            <br>
                                                          </li>
                                                        </ul>
                                                      </fieldset>
                                                    </li>
                                                  </ul>
                                                </fieldset>
                                              </li>
                                            </ul>
                                          </fieldset>
                                          <fieldset class="conditional">
                                            <ul>
                                              <li>
                                                <input type="checkbox" id="option-2">
                                                <label for="option-2">small</label>
                                                <fieldset class="conditional">
                                                  <ul>
                                                    <li>
                                                      <input type="checkbox" id="option-2">
                                                      <label for="option-2">black</label>
                                                      <fieldset class="conditional">
                                                        <ul>
                                                          <li>
                                                            <label for="sel1">Select Price (The price Will be in PKR):</label>
                                                            <input type="text" name="">
                                                            <li> <label for="sel1">Select Quantity:</label>
                                                              <input type="text" name="">
                                                              <br>
                                                            </li>
                                                          </ul>
                                                        </fieldset>
                                                      </li>
                                                    </ul>
                                                  </fieldset>
                                                  <fieldset class="conditional">
                                                    <ul>
                                                      <li>
                                                        <input type="checkbox" id="option-2">
                                                        <label for="option-2">blue</label>
                                                        <fieldset class="conditional">
                                                          <ul>
                                                            <li>
                                                              <label for="sel1">Select Price (The price Will be in PKR):</label>
                                                              <input type="text" name="">
                                                              <li> <label for="sel1">Select Quantity:</label>
                                                                <input type="text" name="">
                                                                <br>
                                                              </li>
                                                            </ul>
                                                          </fieldset>
                                                        </li>
                                                      </ul>
                                                    </fieldset>
                                                    <fieldset class="conditional">
                                                      <ul>
                                                        <li>
                                                          <input type="checkbox" id="option-2">
                                                          <label for="option-2">white</label>
                                                          <fieldset class="conditional">
                                                            <ul>
                                                              <li>
                                                                <label for="sel1">Select Price (The price Will be in PKR):</label>
                                                                <input type="text" name="">
                                                                <li> <label for="sel1">Select Quantity:</label>
                                                                  <input type="text" name="">
                                                                  <br>
                                                                </li>
                                                              </ul>
                                                            </fieldset>
                                                          </li>
                                                        </ul>
                                                      </fieldset>
                                                    </li>
                                                  </ul>
                                                </fieldset>
                                              </li>
                                            </ul>
                                          </fieldset>
                                          <fieldset>
                                            <ul>
                                              <li>
                                                <input type="radio" name="check" value="Sports Equipments" id="immigrant">
                                                <label for="requirement-2">Sports Equipments</label>
                                                <fieldset class="conditional">
                                                  <ul>
                                                    <li>
                                                      <input type="checkbox" id="option-2">
                                                      <label for="option-2">standard</label>
                                                      <fieldset class="conditional">
                                                        <label for="sel1">Select Price (The price Will be in PKR):</label>
                                                        <input type="text" name="">
                                                        <li> <label for="sel1">Select Quantity:</label>
                                                          <input type="text" name="">
                                                        </li>
                                                      </ul>
                                                    </fieldset>
                                                  </li>
                                                </ul>
                                              </fieldset>
                                            </fieldset>
                                          </li>
                                        </ul>
                                      </fieldset>
                                    </li>
                                  </ul>
                                </fieldset>
                                <br>
                                <br>
      <label for="sel1">Enter The Discription About Product:</label>
      <!-- <textarea class="form-control" required="" name="discription" rows="15"></textarea><br><br> -->
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
     <!--    <input type="file" name="image" required="" >
        <input type="file" name="image1" required="" >
        <input type="file" name="image2" required="" > -->
        <input type="submit" value="Upload Image" name="image" required="">
      </div>
      </form>
      <?php
        if (isset($_POST['image'])) {
            $pname = $_POST['pname'];
            $discription = $_POST['discription'];
            $category = $_POST['check'];
            $s_color = $_POST['40s_color'];
            $s_color = $_POST['41s_color'];
            $s_color = $_POST['42s_color'];
            $s_size = $_POST['40s_size'];
            $s_size = $_POST['41s_size'];
            $s_size = $_POST['42s_size'];
            $s_price = $_POST['40s_price'];
            $s_price = $_POST['41s_price'];
            $s_price = $_POST['42s_price'];
            // $s_proid = $_POST[]; 

            // FORIGN kEY
            
          // CATEGORY
          $sql = "INSERT INTO category (pname,pcategory,discription) values ('$pname','$category','$discription')";
          mysqli_query($conn, $sql);
            if ($sql) {
             $query = "SELECT id FROM category WHERE pcategory = '$category'";
            $run = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_array($run))  {
             $s_proid = $row ['id'];
              }
          }
          // SHOES
          for ($i=0; $i <count($_POST['40s_size']) ; $i++) { 
            $s_size = $_POST['40s_size'][$i];
            for ($j=0; $j <count($_POST['40s_color']) ; $j++) { 
              $s_color = $_POST['40s_color'][$j];
              $sql1 = "INSERT INTO shoes (color,size,price,pro_id) values ('$s_color','$s_size','$s_price','$s_proid')";
              mysqli_query($conn, $sql1);
            }
          }
          for ($i=0; $i <count($_POST['41s_size']) ; $i++) { 
            $s_size = $_POST['41s_size'][$i];
            for ($j=0; $j <count($_POST['41s_color']) ; $j++) { 
              $s_color = $_POST['41s_color'][$j];
              
          $sql1 = "INSERT INTO shoes (color,size,price,pro_id) values ('$s_color','$s_size','$s_price','$s_proid')";
          mysqli_query($conn, $sql1);
            }
          }
          for ($i=0; $i <count($_POST['42s_size']) ; $i++) { 
            $s_size = $_POST['42s_size'][$i];
            for ($j=0; $j <count($_POST['42s_color']) ; $j++) { 
              $s_color = $_POST['42s_color'][$j];
          $sql1 = "INSERT INTO shoes (color,size,price,pro_id) values ('$s_color','$s_size','$s_price','$s_proid')";
          mysqli_query($conn, $sql1);
            }
          }

          // IMAGE UPLOAD
          $target = "product-upload/" .basename($_FILES['image']['name']);
            $images = $_FILES['image']['name'];
            move_uploaded_file($_FILES['image']['tmp_name'], $target);
             $target = "product-upload/" .basename($_FILES['image1']['name']);
            $images1 = $_FILES['image1']['name'];
            move_uploaded_file($_FILES['image1']['tmp_name'], $target);
             $target = "product-upload/" .basename($_FILES['image2']['name']);
            $images2 = $_FILES['image2']['name'];
            move_uploaded_file($_FILES['image2']['tmp_name'], $target);
            $sql = "INSERT INTO uploadpic (propicture,second,third,pro_id) values ('$images','$images1','$images2',$s_proid)";
            $result = mysqli_query($conn, $sql);
            // if ($result) {
            //   $query = "SELECT * FROM uploadpic WHERE propicture = '$' AND "; 
            // $run = mysqli_query($conn, $query);
            // while ($row = mysqli_fetch_array($run))  {
            //  $s_proid = $row ['id'];
            //   }
            // }
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
