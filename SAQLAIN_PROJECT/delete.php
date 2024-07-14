<?php 
include 'CONNECTION.php';

$delete = $_REQUEST['delete'];

$sql = mysqli_query($joint,"DELETE FROM `practice` WHERE id ='$delete'");

if ($sql) {
	
	header("location:display.php");

}
else {
	die('error');
}

 ?>
