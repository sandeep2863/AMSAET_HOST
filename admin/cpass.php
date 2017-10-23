<?php include("header.php"); ?>

<div id="admin">
<h2>Change Account Password</h2>
<br><br>
<form method="POST" action="changepass.php">
<div class="row">
<div class="col-md-6">
<input type="password" name="oldpass" class="form-control" placeholder="Enter Current Password" required>
<br>
<input type="password" name="newpass" class="form-control" placeholder="Enter New Pasword" required>
<br>
<input type="password" name="confirm" class="form-control" placeholder="Re-Enter New Password" required>
<br>
<button type="submit" name="cpass" class="btn btn-block btn-primary">Submit</button>
</form>
</div>
<div class="col-md-6">
<p style="color:red;">
<?php
if(isset($_GET['m']))
{
  $ch=$_GET['m'];
  switch($ch)
  {
    case 1:
      echo "Password Changed Successfully!";
      break;
    case 2:
      echo "Please enter same password in the New Password & Confirm Password.";
      break;
    case 0:
      echo "Internal Error. Try Again!";
      break;
    case '-1':
      echo "Incorrect Current Password!";
      break;
  }
}
?>
</p>
</div>
</div>
</div>
<?php include("footer.php"); ?>
