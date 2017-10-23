<?php
session_start();
if(!$_SESSION['email'])
{
	header("location:index.php");
  exit();
}
include("../master.php");

if(isset($_POST['cpass']))
{
  $m=$_SESSION['email'];
  $oldpass=md5(stripcleantohtml($_POST['oldpass']));
  $newpass=md5(stripcleantohtml($_POST['newpass']));
  $conf=md5(stripcleantohtml($_POST['confirm']));

  include("../connection.php");
  $query="SELECT pass FROM adminusers where mail='".$m."'";
  $data=mysqli_query($con,$query);
  if(mysqli_num_rows($data)==1)
  {
    $r=mysqli_fetch_assoc($data);
    if($r['pass']===$oldpass)
    {
      if($newpass===$conf)
      {
        $q="UPDATE adminusers set pass='".$newpass."' where mail='".$m."'";
        if(mysqli_query($con,$q))
        {
          header("location:cpass.php?m=1");
          exit();
        }
        else {
          header("location:cpass.php?m=0");
        }
      }
      else {
        header("location:cpass.php?m=2");
      }

    }
    else {
      header("location:cpass.php?m=-1");
      exit();
    }
  }
  else {
    session_destroy();
    header("location:index.php");
  }
}
else {
  header("location:cpass.php");
}

?>
