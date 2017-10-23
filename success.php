<?php
session_start();
if(!$_SESSION['_token'])
{
  header("location:register.php");
  session_destroy();
}
include("header.php");
include("master.php");
include("connection.php");
$flag=0;
if(isset($_GET['etoken']))
{
  $id=stripcleantohtml($_GET['etoken']);
  $q="SELECT * FROM uid_management WHERE H_id='".$id."'";
  $dta=mysqli_query($con,$q);
  if(mysqli_num_rows($dta)==1)
  {
    $flag=1;
    $r=mysqli_fetch_assoc($dta);
    $i=$r['id'];
  }
  session_destroy();
}
else {
  writelog('sucess_page');
  session_destroy();
  header("http://thisismyworld.pe.hu/m.html");
  exit();
}
?>
<div id="reg_success" style="text-align:center;">
  <?php
  if($flag==1)
  {
  echo '<h1> Thank You for Registering for AMSAET 2017!</h1>
  <br><br><br><br>
  <h2>Your AMSAET 2017 Unique ID is '.$i.'</h2>
  <br><br><br><br>
  <div id="disclaimer" style="text-align:left;margin-left:7%;margin-right:7%;">
    <h3><u>Note:-</u></h3>
    <p class="bold justify">Please keep this ID safe for future reference. It is very important that you have this ID, as it will be needed while uploading your Abstract/Paper. <u>Before leaving this page note down your ID as it is one-time generated only</u>. Also keep track of the dates, do the submissions on time. For any queries <a href="contact.php">Click Here!</a></p>
  </div>';
  }
  else {
    echo '<h1>Sorry for the inconvenience, there has been an Internal Error!</h1>
    <br><br><br><br>
    <h2>Please Try Again!</h2>';
  } ?>
</div>
<?php include("footer.php"); ?>
