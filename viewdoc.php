<?php
@ob_start();
session_start();
?>
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
         <img src="images/admin-top.jpg"  class="img-responsive">
		 
		</div>
        </section>
		<?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE);
include('db.php');
include('admin_nav_bar.php'); 
if(isset($_SESSION['a_name'])){ 
//Edit Query
if(isset($_GET['doc_id'])){
	$id = $_GET['doc_id'];
	
	$edit_query = $db->query("select * from add_doctor where doc_id='$id'") or die(mysqli_error());
	$edit_row = mysqli_fetch_assoc($edit_query);
}
?>
<div class="welcome_page">
	<!-- Start Section 1 -->
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
								//echo '<td><a href="add_sub_menu_items.php?doc_id='.$row['doc_id'].'" class="btn btn-sm btn-warning">Edit</a>&nbsp;&nbsp;&nbsp;<a href="delete.php?doc_id='.$row['doc_id'].'" class="btn btn-sm btn-danger">Delete</a></td>';
								echo '</tr>';
								$i++;
							}
						?>                      
                    </tbody>
                 </table>
            </div>

		
		    </div>  
            
    </div>
	<!-- End Section 1 -->
</div>  
<!-- End Content -->
		
		
<?php 
include('footer.php');
include('js_files.php');
}/*else{
	header("location:index.php");
	}*/
?>
</body>
</html>