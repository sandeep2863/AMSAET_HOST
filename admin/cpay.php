<?php
session_start();
if(!$_SESSION['email'])
{
	header("location:index.php");
}
include("../connection.php");
include("../master.php");

if(isset($_POST['payc']))
{
  $id=stripcleantohtml($_POST['uid']);
  $q="UPDATE payment_status set Status='1' where ID='".$id."'";
  mysqli_query($con,$q);
  header("location:details.php?m=".$id);
}

?>
