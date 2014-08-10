<?php session_start();?>
<!DOCTYPE HTML>
<html xmlns:fb="http://ogp.me/ns/fb#">
<head>
<meta charset="UTF-8">
<title>Trail of Breadcrumbs</title>
	<meta name="robots" content="index, follow" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
	<meta name="author" content="" />

<!-- ========================  CSS Files  ========================== -->
<link rel="stylesheet" type="text/css" href="css/style.css" media="all" />
<link rel="stylesheet" type="text/css" href="css/slider.css">
<link rel="stylesheet" type="text/css" href="css/responsive.css" />
<!-- ========================  JS Files  =========================== -->
<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="js/supersubs.js"></script>
<script type="text/javascript" src="js/quicksand.js"></script>
<script type="text/javascript" src="js/quicksand_config.js"></script>
<script type="text/javascript" src="js/ts-portfolio-slide.js"></script>
<script type="text/javascript" src="js/tinynav.min.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>
<script type="text/javascript" src="js/validatePassword.js"></script>

</head>
<body>


<div style="position:fixed; top:2%;left:1%;color: #FFF; z-index:1" id="fb-root" class="fb_reset" align="left"><fb:like href="https://www.facebook.com/TakshakOfficial" data-width="300" data-colorscheme="dark" data-show-faces="true" data-send="true"></fb:like>
</div>
  <script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script> 


<!-- LOADER -->
<div class="spinner"></div>
<!-- SLIDER -->
<ul class="cb-slideshow">
  <li><span>Image 01</span></li>
  <li><span>Image 02</span></li>
  <li><span>Image 03</span></li>
  <li><span>Image 04</span></li>
  <li><span>image 05</span></li>
</ul>
<!-- SLIDER END -->
<div class="sn1">
    <ul class="sn" >
      <li><a href="https://www.facebook.com/TakshakOfficial" target="_blank" title="Facebook"><span class="icon-img" style="background:url(images/social/facebook.png)"></span></a></li>
            
      <li><a href="https://www.youtube.com/user/TakshakOfficial?feature=watch" target="_blank" title="YouTube"><span class="icon-img" style="background:url(images/social/ytube.png)"></span></a></li>
    </ul>
    </div>
<section id="content">
  <!-- HEADER -->
  <header>
    <div class="logo"><a href="#!/page_home"><img src="images/logo.png" alt=""></a></div>
    <!-- MENU -->
   <?php include("includes/menu.php")?>
    <!-- END MENU -->
  </header>
  <!-- END HEADER -->
  <ul>
    <li id="page_home" class="no_bg"></li>
    <!-- ABOUT -->
    
     <!-- ABOUT END -->
     <!-- SERVICES -->
   <?php include("includes/toppers.php"); ?>
    <!-- SERVICES END -->
    <!-- PORTFOLIO -->
   
    <!-- PORTFOLIO END -->
    
    <!-- LOGIN -->
    <!-- BLOG ENG -->
    <!-- CONTACT -->
   <?php include("includes/login.php"); ?>
    <!-- CONTACT END -->
    <!-- MORE -->
    <?php include("includes/rules.php"); ?>
    <!-- MORE END -->
    <!-- PRICE -->
   <?php include("includes/online.php") ?>
    <!-- PRICE END -->
    
  </ul>
  <!-- FOOTER -->
  
  <div id="hits" class="frames">
      <p><? include("simphp.php"); ?></p>
   </div>
  
    <footer align="centre">
   <div>
<p>2013 &copy; takshak 13. All Right Reserved.Site Developed By ELDHOSE K SHIBU	&amp; SHARUN S THAZHACKAL</p>
</div>
  </footer>
  <!-- END FOOTER -->
</section>
<!-- END CONTENT -->

<!--ipt type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-7078796-5']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</scri-->
</body>
</html>
