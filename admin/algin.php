<?php
include("../master.php");
if(isset($_POST['login']))
{
    $uname=stripcleantohtml($_POST['username']);
    $pass=md5(stripcleantohtml($_POST['passphrase']));
    //$params = array($uname,$pass);
    if (!filter_var($uname, FILTER_VALIDATE_EMAIL))
    {
      $a= "Invalid credentials!";
      header("location:index.php?a=".$a);
      exit();
    }
    include("../connection.php");
    $query="SELECT * FROM adminusers WHERE mail='".$uname."' and pass='".$pass."'";
    $data=mysqli_query($con,$query);
    if(mysqli_num_rows($data)==1)
    {
        session_start();
        $_SESSION['email']=$uname;
        header("location:dashboard.php");
    }
    else
    {
        $a="Invalid Credentials!";
        header("location:index.php?a=".$a);
    }
}
?>
