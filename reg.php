<?php
session_start();
if(!$_SESSION['_token'])
{
  header("location:register.php");
  session_destroy();
}
require("master.php");
include("connection.php");

//$_POST['token'];
if(verifyFormToken('form1'))
{
  /*if(!filter_var($_POST['URL-main'],FILTER_VALIDATE_URL))
  {
    writelog('URL Validation');
    die('Please insert a valid URL');
  }*/

  if(isset($_POST['register']))
  {
      /*$whitelist=array('token','name','designation','organization','address','mobile','email','optcheckbox','title','author','author2','author3','modeofpayment','date','bank','account');
      foreach ($_POST as $key => $item)
      {
        if(!in_array($key,$whitelist))
        {
          writelog('Unkown Form Fields');
          session_destroy();
          die("Hack-Attempt detected.Please use only the fields in the form");
        }
      }*/

      $name=stripcleantohtml($_POST['name']);
      $desg=stripcleantohtml($_POST['designation']);
      $org=stripcleantohtml($_POST['organization']);
      $addr=stripcleantohtml($_POST['address']);
      $mobile=stripcleantohtml($_POST['phoneNumber']);
      $mail=stripcleantohtml($_POST['email']);
      $q="SELECT * FROM participantsconfer WHERE mail='".$mail."' or mobile='".$mobile."'";
      $r=mysqli_query($con,$q);
      if(mysqli_num_rows($r)>0)
      {
        $msg="f24a1c34cd88a6b03d6a905bc2861d02";
        mysqli_close($con);
        header("location:registration.php?e=".$msg);
        exit();
      }
      if (filter_var($mail, FILTER_VALIDATE_EMAIL) === false)
      {
      $msg="2ce1f3d7c903eab3f9c1f97b5dc4d9d7";
      mysqli_close($con);
      header("location:registration.php?e=".$msg);
    }
      $role=stripcleantohtml($_POST['optcheckbox']);
      $title="";
      $author1="";
      $author2="";
      $author3="";
      if($role=="Present a Paper")
      {
          $title=stripcleantohtml($_POST['title']);
          $author1=stripcleantohtml($_POST['author']);
          $author2=stripcleantohtml($_POST['author2']);
          $author3=stripcleantohtml($_POST['author3']);
      }

      $dte="";
      $bank="";
      $amount="";
      $paymentmode=stripcleantohtml($_POST['modeofpayment']);
      if($paymentmode=="dd"||$paymentmode=="neft")
      {
        $num=stripcleantohtml($_POST['no']);
        $dte=stripcleantohtml($_POST['date']);
        $bank=stripcleantohtml($_POST['bank']);
        $amount=stripcleantohtml($_POST['amount']);
      }


      $id=idgenerator();
      $uid=md5($id);

      $query="INSERT INTO participantsconfer (uid,name,designation,organization,address,mobile,mail,role,title,author1,author2,author3,Payment_mode,ddno_or_name,date,bank,fee) values ('".$uid."','".$name."','".$desg."','".$org."','".$addr."','".$mobile."','".$mail."','".$role."','".$title."','".$author1."','".$author2."','".$author3.
      "','".$paymentmode."','".$num."','".$dte."','".$bank."','".$amount."')";
      if(mysqli_query($con,$query))
      {
          $q="INSERT INTO payment_status (id) values ('".$uid."')";
          mysqli_query($con,$q);
          $idmang="INSERT INTO uid_management (H_id,id) values ('".$uid."','".$id."')";
          mysqli_query($con,$idmang);
          //mkdir("paperul/".$id);
          $sub="Acknowledgement for AMSAET 2017";
          $from="amsaet2017@poornima.edu.in";
          $msg="Your ID for the conference is ".$id." . Please keep it safe for future reference!\r\n This number is very important, don't loose it.";
          $msg=wordwrap($msg,70);
          mail($mail,$sub,$msg,$from);
          //$m="faaf7c61fc236f8badef54b4107c5e04";
          mysqli_close($con);
          header("location:success.php?etoken=".$uid);
          exit();
      }
      else
      {
        $msg="eef4911472ed5c1370d5b962630d041b";
        mysqli_close($con);
        session_destroy();
        header("location:registration.php?e=".$msg);

      }
  }
}
else
{
  echo "Hacking Attempt detected. You have been logged!";
  writelog('Formtoken');
  session_destroy();
  header("location:index.php");
}
?>
