<?php include("server.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Predict</title>
     
   
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
            
             <img src="images/user_page.jpg"  class="img-responsive">
                        
        </div>
           
<!--   nav bar starting         -->
  
<nav class="rest_nav_bar navbar navbar-inverse navbar-static-top" role="navigation" style="border-top:2px solid #0CF; border-bottom:2px solid #0CF;">
 <div class="container">
  <div class="row">
   <div class="col-xs-12">
      <div class="navbar-header">
       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
</div>
<div class="collapse navbar-collapse navbar-ex1-collapse">
   <ul class="nav navbar-nav navbar">
    <li><a class="nav-link scroll" href="index.php" class="active"><h6>HOME</h6></a></li>
    <li><a href="#profile"><h6>MY PROFILE</h6></a></li>
    <li><a href="#predict"><h6>PREDICT CANCER</h6></a></li>
    <li><a href=""><h6>RECOMMANDED TEST</h6></a></li>
    <li><a href="viewonco.php"><h6>VIEW ONCOLOGIST</h6></a></li>
    <li><a href="feedback.php"><h6>FEEDBACK</h6></a></li>
</ul>
</div>
</div>
</div>
</div>
</nav>
<!--top nav bar-->

<nav class="navbar navbar-inverse navbar-fixed-top">
<div>
 <ul class="topnav">
     <li style="font-family: 'Dancing Script', cursive;"><a class="navbar-brand js-scroll-trigger" href="#">PREDICT</a></li>
 <li style="float:right"><a href="logout.php"><h6>LOG OUT</h6></a></li>
 </ul>
</div>
</nav>
<!--   nav bar end         -->

            <!--   page start         -->
            

    <section class="my-profile">
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="section-title">
                <div class="main_h3">My <span class="color" style="color:#0CF;">Profile</span></div>
         <div class="line"><img class="img-responsive" src="images/undr.png" /></div> 
    </div>
    </div> 
            
<div class="header">
	<h2>My Profile </h2>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>
        
    
    <!-- logged in user information -->
    
    <?php  
  if (isset($_SESSION['username'])) : ?>
    	<p><center>Welcome <strong><?php echo $_SESSION['username']; ?></strong></center></p>
        <p>NAME: <?php echo $_SESSION['username']; ?></p>
        <p>EMAIL: <?php echo $_SESSION['email']; ?></p>
           
    <?php endif ?>
</div>
        
            </div>    
            <div class="clearfix p20_0"></div> 

     </section>
        

<!--CANCER PREDICTION      -->
      <section class="can-predict" >  
     <div class="clearfix p20_0"></div> 
    <div class="container-fluid"id="predict">
        <div class="main_h3">Predict <span class="color" style="color:#0CF;">Cancer </span></div>
         <div class="line"><img class="img-responsive" src="images/undr.png" /></div> 
        <div class="col-md-12" >
            <div class="section-title">
        	<div class="main_h3" style="color:#0CF;" align="center">PREDICTION FORM</div>
         <div class="line" align="center"><img class="img-responsive" src="images/undr.png" /></div> 
    </div>
    </div>          
                                    
            <form id="can_predict" method="post" action="radio.php">
		
                <div class="input-group">
			<label>PATIENT NAME</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>AGE</label>
			<input type="text" name="Age" value="<?php echo $email; ?>">
		</div>
		<div>
			<label>GENDER</label><br>
            <input type="radio" name="Gender" value="male" >Male<br>
			<input type="radio" name="Gender" value="female">Female<br>
		</div>

		<div>
			<label>ALCOHOL USAGE</label><br>
			<input type="radio" name="Alcohol usage" value="Yes">Yes<br>
			<input type="radio" name="Alcohol usage" value="No">No<br>
		</div>
		<div >
			<label>DUST ALLERGY</label><br>
		    <input type="radio" name="Dust Allergy" value="Yes">Yes<br>
			<input type="radio" name="Dust Allergy" value="No">No<br>
		</div>
		<div >
			<label>GENETIC RISK</label><br>
		    <input type="radio" name="Genetic risk" value="Yes">Yes<br>
			<input type="radio" name="Genetic risk" value="No">No<br>
		</div>
		<div >
			<label>CHRONIC LUNG DISEASE</label><br>
		    <input type="radio" name="chronic lung disease" value="Yes">Yes<br>
			<input type="radio" name="chronic lung disease" value="No">No<br>
		</div>
		<div >
			<label>BALANCE DIET</label><br>
		    <input type="radio" name="Balanced diet" value="Yes">Yes<br>
			<input type="radio" name="Balanced diet" value="No">No<br>
		</div>
		<div >
			<label>OBESITY</label><br>
		    <input type="radio" name="Obesity" value="Yes">Yes<br>
			<input type="radio" name="Obesity" value="No">No<br>
		</div>
		<div >
			<label>SMOKING</label><br>
		    <input type="radio" name="Smoking" value="Yes">Yes<br>
			<input type="radio" name="Smoking" value="No">No<br>
		</div>
		<div >
			<label>PASSIVE SMOKER</label><br>
		    <input type="radio" name="Passive smoker" value="Yes">Yes<br>
			<input type="radio" name="Passive smoker" value="No">No<br>
		</div>
		<div>
			<label>CHEST PAIN</label><br>
		    <input type="radio" name="Chest pain" value="Yes">Yes<br>
			<input type="radio" name="Chest pain" value="No">No<br>
		</div>
		<div >
			<label>BLOOD COUGHING</label><br>
		    <input type="radio" name="Coughing of blood" value="Yes">Yes<br>
			<input type="radio" name="Coughing of blood" value="No">No<br>
		</div>
		<div >
			<label>FATIGUE</label><br>
		    <input type="radio" name="Fatigue" value="Yes">Yes<br>
			<input type="radio" name="Fatigue" value="No">No<br>
		</div>
		<div >
			<label>WEIGHT LOSS</label><br>
		    <input type="radio" name="Weight loss" value="Yes">Yes<br>
			<input type="radio" name="Weight loss" value="No">No<br>
		</div>
		<div>
			<label>BREATHE SHORTNESS</label><br>
		    <input type="radio" name="Shortness of breathe" value="Yes">Yes<br>
			<input type="radio" name="Shortness of breathe" value="No">No<br>
		</div>
		<div>
			<label>WHEEZING</label><br>
		    <input type="radio" name="Wheezing" value="Yes">Yes<br>
			<input type="radio" name="Wheezing" value="No">No<br>
		</div>
		<div >
			<label>FINGER NAILS CLUBBING</label><br>
		    <input type="radio" name="clubbing of finger nails" value="Yes">Yes<br>
			<input type="radio" name="clubbing of finger nails" value="No">No<br>
		</div>
		<div >
			<label>FREQUENT COLD</label><br>
		    <input type="radio" name="Frequent cold" value="Yes">Yes<br>
			<input type="radio" name="Frequent cold" value="No">No<br>
		</div>
		<div>
			<label>DRY COUGH</label><br>
		    <input type="radio" name="Dry cough" value="Yes">Yes<br>
			<input type="radio" name="Dry cough" value="No">No<br>
		</div>
        <button type="submit" name="submit" class="cus_form_btn">&nbsp; &nbsp; SEND &nbsp; &nbsp;</button>
        <button type="reset" class="cus_form_btn">&nbsp; &nbsp; CLEAR &nbsp; &nbsp; </button>
		
	</form>
            </div>  
            
            <div class="clearfix p20_0"></div>    
</section> 
            
<?php
include('footer.php'); 
include('js_files.php'); 
?> 
</body>
</html>