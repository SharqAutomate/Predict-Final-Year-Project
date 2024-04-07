<?php include('server.php') ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Predict</title>
    
     <?php 
  	   include('css_files.php'); 
	   
  	 ?>  
	
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

            
       <!--top navigation-->
      <nav class="navbar navbar-inverse navbar-fixed-top">
<div>
 <ul class="topnav">
     <li style="font-family: 'Dancing Script', cursive;"><a class="navbar-brand js-scroll-trigger" href="index.php">PREDICT</a></li>
 <li style="float:right"><a href="sign_up.php"><h6>SIGN UP</h6></a></li>
 <li style="float:right"><a href="login.php"><h6>SIGN IN</h6></a></li>
 </ul>
</div>
</nav>
          <!--nav close-->  

	<div class="header">
		<h2>Login</h2>
	</div>
	
	<form method="post" action="login.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user">Login</button>
		</div>
		<p>
			Not yet a member? <a href="sign_up.php">Sign up</a>
		</p>
	</form>
          
	 <div class="clearfix p20_0"></div>    

		 </section>
    
	


<?php 
	include('footer.php');
	include('js_files.php');
?>
</body>
</html>