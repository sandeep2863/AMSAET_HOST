<?php
	include("../master.php");
	include("../connection.php");
	$id = $_GET['id'];

	$qry = "delete from speakers where s_id=$id";
	mysqli_query($con,$qry);
	header("location:headedit.php");
?>
