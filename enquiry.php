<?php
session_start();
require("master.php");
if(verifyFormToken('form2'))
{
	if(isset($_POST['enquire']))
	{
			$name = stripcleantohtml($_POST['userid']);
			$email = stripcleantohtml($_POST['email']);
			//$phone = stripcleantohtml($_POST['pno']);
			$msg = stripcleantohtml($_POST['message']);
			$mail="amsaet2017@poornima.edu.in";
			$sub="Enquiry for AMSAET 2017";
			$ip=$_SERVER["REMOTE_ADDR"];
			$host=gethostbyaddr($ip);
			$date=date("d M Y");
			$msgs=$msg."\r\n\r\n".$name."\r\n".$date;
			mail($mail,$sub,$msgs,$email);
			include("connection.php");
			$q="INSERT INTO enquiry_rep (Name,Email,Msg,IP,Host_name,Date) values ('".$name."','".$email."','".$msg."','".$ip."','".$host."','".$date."')";
			mysqli_query($con,$q);
			mysqli_close($con);
			$m="ab47638b836e4766a1d024a843a9a72f";
			session_destroy();
			header("location:index.php?m=".$m);
	}
	else {
		session_destroy();
		header("location:index.php");
	}
}
else {
	$msg="a487518ff7742038d26b2f43fbb22826";
	writelog('EnquiryForm');
	session_destroy();
	header("location:index.php?m=".$msg);
}
?>
