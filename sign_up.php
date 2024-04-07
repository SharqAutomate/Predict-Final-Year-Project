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
      <!--banner section close-->  
      
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
            
<div class="clearfix"></div> 

<section>
    
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="section-title">
        <div class="main_h3" style="color:#0CF;" align="center">Registration</div>
         <div class="line" align="center"><img class="img-responsive" src="images/undr.png" /> </div> 
    </div>
     				
	<div class="header">
		<h2>Register</h2>
      
	</div>
	
	<form method="post" action="sign_up.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Sign up</button>
		</div>
		<p>
			Already a member? <a href="login.php">Sign in</a>
		</p>
	</form>
        </div>
    </div>
    </div>
   
            <div class="clearfix p20_0"></div>    

		 </section>
<?php 
	include('footer.php');
	include('js_files.php');
?>
</body>
</html>
