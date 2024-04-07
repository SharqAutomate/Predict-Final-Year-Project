<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Predict</title>
    
    <link rel="shortcut icon" type="image/x-icon" href="images/ribbon.png" />
    
     <?php 
  	   include('css_files.php'); 
  	 ?>  
 </head>
 <body>
     <div class="loader"><img src="images/load.gif" alt="" /></div>
        <!--banner section-->
        <section>
         <div class="banner">
		 <img src="images/contact-us.jpg"  class="img-responsive">
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
</section>
<div class="clearfix"></div> 

<section>
    

    <div class="container-fluid">
        <div class="col-md-12">
            <div class="section-title">
        	<div class="main_h3" style="color:#0CF;" align="center">FEEDBACK</div>
         <div class="line" align="center"><img class="img-responsive" src="images/undr.png" /></div> 
    </div>
    </div>
   
 <div class="clearfix p20_0"></div>
    <div class="container">
    
     <div id="contact_form" class="row">
       <?php
	   		include('db.php');
	   		if(isset($_POST['submit'])){
				$name = $_POST['name'];
				$email = $_POST['email'];
				$mob = $_POST['mobile'];
				$message = $_POST['message'];
				$query = $db->query("INSERT INTO `feedback`(`id`, `name`, `email`, `mobile`, `message`) VALUES ('','$name','$email','$mob','$message')") or die(mysqli_error());
				if($query){
					echo "<script>alert('feedback detail Saved Successfully');</script>";
				}
			}
	   ?>
		<form role="form" id="feedbackForm" action="" method="post">
        <div class="form-group">
            <label class="control-label" for="name">Name *</label>
            <div class="input-group">
            <input type="text" class="form-control" name="name" placeholder="Enter your name" />
            <span class="input-group-addon"><i class="fa fa-user" style="color:#0CF;"></i></span>
        	</div>
        </div>

        <div class="form-group">
            <label class="control-label" for="email">Email Address *</label>
            <div class="input-group">
            <input type="email" class="form-control" name="email" placeholder="Enter your email" />
            <span class="input-group-addon"><i class="fa fa-envelope" style="color:#0CF;"></i></span>
            </div>
        </div>
        
        <div class="form-group">
            <label class="control-label" for="email">Mobile Number *</label>
            <div class="input-group">
            <input type="text" class="form-control" name="mobile" placeholder="9963XXXX68" />
            <span class="input-group-addon"><i class="fa fa-mobile" style="color:#0CF;"></i></span>
            </div>
        </div>
        
        <div class="form-group">
        <label class="control-label" for="message">Message *</label>
        <div class="input-group">
        <textarea rows="5" cols="30" class="form-control" name="message" placeholder="Enter your message" ></textarea>
        <span class="input-group-addon"><i class="fa fa-edit" style="color:#0CF;"></i></span>
        </div>
        <span class="help-block" style="display: none;">Please enter a message.</span>
        </div>
        
<button type="submit" name="submit" class="cus_form_btn">&nbsp; &nbsp; SEND &nbsp; &nbsp;</button>
<button type="reset" class="cus_form_btn">&nbsp; &nbsp; CLEAR &nbsp; &nbsp; </button>
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
