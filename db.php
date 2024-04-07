<?php
error_reporting(0);
$db = new mysqli('localhost', 'root', '', 'predict');
if($db->connect_errno){
	die('Sorry Database not connected !!!');
}
?>