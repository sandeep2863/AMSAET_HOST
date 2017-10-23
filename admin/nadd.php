<?php
session_start();
if(!$_SESSION['email'])
{
	header("location:index.php");
	exit();
}
if(isset($_POST['add']))
{
  $m=$_SESSION['email'];
  $name=$_POST['namenew'];
  $email=$_POST['emailnew'];
  $old=md5($_POST['opass']);
  include("../connection.php");
  $qry="SELECT pass FROM adminusers WHERE mail='".$m."'";
  $d=mysqli_query($con,$qry);
  if(mysqli_num_rows($d)==1)
  {
    $r=mysqli_fetch_assoc($d);
    if($r['pass']===$old)
    {
      $npass=$name."@".uniqid(rand(), true);
      $n=md5($npass);
      $query="INSERT INTO adminusers (Name,pass,mail) values ('".$name."','".$n."','".$email."')";
      mysqli_query($con,$query);
      $mail="amsaet.poornima.edu.in";
      $sub="AMSAET 2017 Credentials";
      $msg="You have been added as an admin for the AMSAET 2017 Website. Handle the below credentials carefully! \r\n\r\nLogin Credentials :-\r\n\r\n Username: ".$email."\r\n Password: ".$npass." \r\n\r\n Login URL: http://amsaet.poornima.edu.in/admin \r\n\r\n Please Change Your Password on first login!";
      mail($email,$sub,$msg,$mail);
      header("location:nadmin.php?m=1");
    }
    else {
      header("location:nadmin.php?m=0");
    }
  }
  else {
    session_destroy();
    header("location:index.php");
  }
}


?>
