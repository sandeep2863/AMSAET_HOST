<!DOCTYPE html>
<?php
include("../master.php");
 ?>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Admin Login</title>


    <link rel="stylesheet" href="css/adminreset.css">
  <link href='https://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/adminstyle.css">
  </head>

  <body>
    <br><br><br>
    <span style="text-align:center;font-size:23px;color:black;"><p>
      <?php
      if(isset($_GET['a']))
      {
        $msg=$_GET['a'];
        if($msg=="Invalid Credentials!")
        {
          echo $msg;
        }
        else {
          writelog('Admin Login');
          die("Hack Attempt Detected! You have been logged!");
        }
      }
      ?>
    </p></span>
<div class="module form-module">
  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
  </div>
  <div class="form">
    <h2>Login to your account</h2>
    <form action="algin.php" method="POST">
      <input type="email" placeholder="Enter your Email" name="username"/>
      <input type="password" name="passphrase" placeholder="Password" />
      <button type="submit" name="login">Login</button>
    </form>
  </div>
  <div class="cta"><a href="">Forgot your password?</a></div>
</div>
<br>
    <script src='../js/bootstrap.jquery.js'></script>
    <script src="js/admin.js"></script>
  </body>
</html>
