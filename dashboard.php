<?php
@ob_start();
session_start();
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Predict</title>
    
    <link rel="shortcut icon" type="image/x-icon" href="images/ribbon.png" />
     
    <?php 
  	   include('css_files.php'); 
  	 ?>  
    <style>
        *{
            scroll-behavior: smooth;
        }
    </style>
 </head>
 
 
 <body>
     <div class="loader"><img src="images/load.gif" alt="" /></div>
        <!--banner section-->
        <section>
        <div class="banner">
            
            <div id="carousel-bnr" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="item active">
                        <img alt="First slide" style="visibility: hidden;" src="images/5.jpg" />
                        <center><img class=" col-xs-8 sliderimg wow zoomIn img-responsive" data-wow-duration="2s" data-wow-delay="0s" src="images/3.jpg" /></center>
                    </div>
                    <div class="item">
                        <img alt="First slide" style="visibility: hidden;" src="images/5.jpg" />
                        <center><img class=" col-xs-8 sliderimg wow zoomIn img-responsive" data-wow-duration="2s" data-wow-delay="0s" src="images/Blood-Cancer.jpg" /></center>
                    </div>
                    <div class="item">
                        <img alt="First slide" style="visibility: hidden;" src="images/5.jpg" />
                        <center><img class=" col-xs-8 sliderimg wow zoomIn img-responsive" data-wow-duration="2s" data-wow-delay="0s" src="images/2.jpg" /></center>
                    </div>
                </div>
            </div>
        </div>
<?php 
include('db.php');
include('admin_nav_bar.php'); 
if(isset($_SESSION['a_name'])){ 
?>
<!-- Start Content -->
<div class="welcome_page">
	<!-- Start Section 1 -->
 	<div class="container" style="padding:150px 0px 200px;"> 
        	<h2 align="center" style="font-weight:bold; text-transform:uppercase;">Wecome To "Admin page"</h2>
    </div>
	<!-- End Section 1 -->
</div>  
<!-- End Content -->
<?php 
include('footer.php');
include('js_files.php');
}else{
	header("location:index.php");
	}
?>
</body>
</html>