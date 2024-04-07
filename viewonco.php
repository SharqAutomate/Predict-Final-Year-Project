  <?php include("server.php");?>
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
    <li><a href="#pro"><h6>MY PROFILE</h6></a></li>
    <li><a href="#pre"><h6>PREDICT CANCER</h6></a></li>
    <li><a href=""><h6>RECOMMANDED TEST</h6></a></li>
    <li><a href="viewonco.php"><h6>VIEW ONCOLOGIST </h6></a></li>
    <li><a href="feedback.php"><h6>FEEDDBACK</h6></a></li>
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

<section>
    <div class="container p20_0"> 
        	
          <div class="col-md-4 col-sm-4 col-xs-12">
          	  <div class="main_h3" style="color:#0CF;" align="center">DOCTOR DETAILS</div>
         	  <div class="line" align="center"><img class="img-responsive" src="images/undr.png" /></div>
          
          	  <!--<form action="" method="post" enctype="multipart/form-data">
              	  <input type="text" name="doc_name" placeholder="Doctor" class="form-control cus_form" value="<?php echo $edit_row['doc_name'];?>" />
                  <input type="submit" name="submit" value="SUBMIT" class="cus_form_btn_1 btn-block" />
              </form> -->
          </div>  
          
          <div class="col-md-8 col-sm-8 col-xs-12" style="padding-top:65px;">
          
          	  <div style="overflow-x:scroll">
                <table class="table table-bordered" id="pages">
                    <thead>
                        <tr>
                            <th class="text-center">S.No</th>
                            <th class="text-center">DOCTOR NAMES</th>
							 <th class="text-center">Hospital</th>
                           <!-- <th class="text-center">Action</th> -->
                        </tr>
                    </thead>
                    <tbody>
                    	<?php
							$i = 1;
							$sql = $db->query("select * from `add_doctor` ORDER BY doc_id DESC") or die(mysqli_error());
							while($row = mysqli_fetch_assoc($sql)){
								echo '<tr align="center">';
								echo '<td>'.$i.'</td>';
								echo '<td>'.$row['doc_name'].'</td>';
								echo '<td>'.$row['hos_name'].'</td>';
								//echo '<td><a href="viewdoc.php?doc_id='.$row['doc_id'].'" class="btn btn-sm btn-warning">Edit</a>&nbsp;&nbsp;&nbsp;<a href="delete.php?doc_id='.$row['doc_id'].'" class="btn btn-sm btn-danger">Delete</a></td>';
								echo '</tr>';
								$i++;
							}
						?>                      
                    </tbody>
                 </table>
            </div>

		
		    </div>  
			</div>
		</div>
	</div>
</div>
            
</section> 

<?php 
	include('footer.php');
	include('js_files.php');
?>
</body>
</html>