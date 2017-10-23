<?php
include("../connection.php");
include("../master.php");
if(isset($_POST['search']))
{
  $id=stripcleantohtml($_POST['uid']);
  $qry="SELECT * FROM uid_management where id='".$id."'";
  $data=mysqli_query($con,$qry);
  if(mysqli_num_rows($data)==1)
  {
    $r=mysqli_fetch_assoc($data);
    header("location:details.php?m=".$r['H_id']);
    exit();
  }
  else {
    header("location:dashboard.php?m=0");
  }
}
?>
