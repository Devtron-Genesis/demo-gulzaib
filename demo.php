<!doctype html>
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
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->
  <!-- Style sheet -->
  <script src="js/script.js"> </script>
  <link href="css/style.css" rel="stylesheet" type="text/css">
  <link href="css/rwd.css" rel="stylesheet" type="text/css">
</head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>jQuery BZoom Plugin Example</title>
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="./css1/style.css">
</head>
<body>
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
<div id="">
<div class="">
<div class="jquery-script-ads"><script type="text/javascript"><!--
google_ad_client = "ca-pub-2783044520727903";
/* jQuery_demo */
google_ad_slot = "2780937993";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<!-- <script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script> --></div>
<div class="jquery-script-clear"></div>
</div>
</div>
<div class="product_page">
	<div class="bzoom_wrap col-lg-7 col-md-7">
    <h1>Product Name</h1>
        <ul id="bzoom">
         <li>
          <img class="bzoom_thumb_image" src="img/4-1.jpg" title="first img" />
          <img class="bzoom_big_image" src="img/4-1.jpg"/>
        </li>
        <li>
          <img class="bzoom_thumb_image" src="img/4-2.jpg"/>
          <img class="bzoom_big_image" src="img/4-2.jpg"/>
        </li>
 
        </ul>
    </div>
    <br><br>
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
<!-- <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.min.js"></script> -->
<script type="text/javascript" src="./js1/jqzoom.js"></script>sh
<script type="text/javascript">
$("#bzoom").zoom({
	zoom_area_width: 300,
    autoplay_interval :3000,
    small_thumbs : 4,
    autoplay : false
});
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</html>