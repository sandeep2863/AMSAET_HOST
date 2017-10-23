<?php
session_start();
include("../master.php");
include("../connection.php");
if(!$_SESSION['email'])
{
	header("location:index.php");
	exit();
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Admin Panel</title>
        <meta charset="UTF-8">
        <link href="../css/main.css" rel="stylesheet">
        <link href="css/m.css" rel="stylesheet">
        <link rel="stylesheet" href="../css/style.css" type="text/css" />
        <link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.css" media="all">
        <link rel="stylesheet" type="text/css" href="../css/generic.css" media="all">
        <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css" />
        <link href='https://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
    </head>
    <style>

    body div {
        margin:0 !important;
    }
    </style>
    <body onload="startTime()">
    <div id="header">
        <div class="container" style="width: 100%;">
            <nav class="navbar" style="margin:0 !important;">
  <div class="container-fluid" style="margin:0 !important;">
    <div class="navbar-header" style="margin:0 !important;">
      <button type="button" class="navbar-toggle btn btn-lg glyphicon glyphicon-th-list" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="dashboard.php" style="color:white;font-size:250%;">Dashboard</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right ">
        <li><a href="pmang.php">Participant Management</a></li>
 <li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown">Content Management<span class="caret"></span>
    </a>
    <ul class="dropdown-menu" role="menu" style="height:auto;overflow-x:hidden;">
        <!--li><a href="">Home Page</a></li>
		<li><a href="">Registration Page</a></li>
        <li><a href="">Registration Form</a></li-->
				  <li><a href="headedit.php">Speakers & Committee</a></li>
    </ul>
</li>
<li>
    <a href="enquiries.php">Enquiries
    </a>
    <!--ul class="dropdown-menu" role="menu">

		<li><a href="">Footer</a></li>
        <li><a href="">Create an Event</a></li>
        <li><a href="">Delete an Event record</a></li>
        <li><a href="nadmin.php">Add another admin</a></li>
    </ul-->
</li>
<li class="dropdown">
<a class="dropdown-toggle" data-toggle="dropdown">Account<span class="caret"></span></a>
<ul class="dropdown-menu" role="menu">
        <li><a href="cpass.php">Change Password</a></li>
		<li><a href="logout.php">Logout</a></li>
</ul>
</li>
 </ul>
</div>
  </div>
  </nav>
  </div>
        </div>
