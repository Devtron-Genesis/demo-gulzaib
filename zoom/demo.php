<!doctype html>
<html>
<head>
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
    include('../header.php');
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
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script></div>
<div class="jquery-script-clear"></div>
</div>
</div>
<h1 style="margin:150px auto 30px auto;">jQuery BZoom Plugin Example</h1>
	<div class="bzoom_wrap">
        <ul id="bzoom">
            <li>
                <img class="bzoom_thumb_image" src="img/4-1.jpg" title="first img" />
                <img class="bzoom_big_image" src="img/4-1.jpg"/>
            </li>
            <li>
                <img class="bzoom_thumb_image" src="https://unsplash.it/375/500?image=203"/>
                <img class="bzoom_big_image" src="https://unsplash.it/750/1000?image=203"/>
            </li>
            <li>
                <img class="bzoom_thumb_image" src="https://unsplash.it/375/500?image=212"/>
                <img class="bzoom_big_image" src="https://unsplash.it/750/1000?image=212"/>
            </li>
            <li>
                <img class="bzoom_thumb_image" src="https://unsplash.it/375/500?image=220"/>
                <img class="bzoom_big_image" src="https://unsplash.it/750/1000?image=220"/>
            </li>
            <li>
                <img class="bzoom_thumb_image" src="https://unsplash.it/375/500?image=223"/>
                <img class="bzoom_big_image" src="https://unsplash.it/750/1000?image=223"/>
            </li>
        </ul>
    </div>
</body>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="./js1/jqzoom.js"></script>
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