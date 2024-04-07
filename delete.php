<?php
include('db.php');
if(isset($_GET['gal_id'])){
	$id = $_GET['gal_id'];
	$sql = $db->query("delete from gallery where id='$id'") or die(mysqli_error());
	header("location:up_gallery.php?del=del");	
}
if(isset($_GET['doc_id'])){
	$id = $_GET['doc_id'];
	$sql = $db->query("delete from add_doctor where doc_id='$id'") or die(mysqli_error());
	header("location:add_doctors.php?del=del");	
}
if(isset($_GET['sub_item_id'])){
	$id = $_GET['sub_item_id'];
	$sql = $db->query("delete from sub_menu where sub_item_id='$id'") or die(mysqli_error());
	header("location:doctor_detail.php?del=del");	
}
?>