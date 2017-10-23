<?php include("header.php"); ?>

    <?php
		if(isset($_GET['m']))
		{
			$id = $_GET['m'];
			$qry = "select * from participantsconfer where uid='".$id."'";
			$r = mysqli_query($con,$qry);
			$row=mysqli_fetch_assoc($r);
	   }
?>
<div id="admin">
<h2>Details of <i><?php echo $row['name']; ?></i></h2>
<br><br>
<div class="row">
			<div class="col-md-6" style="">
				<form action="cpay.php" method="POST" class="form-horizontal">
          <input type="hidden" value="<?php echo $id; ?>" name="uid" />
  <div class="form-group">
    <label class="control-label col-sm-2">Name</label>
	<div class="col-sm-10">
	<input type="text" class="form-control" name="name" value="<?php echo $row['name']; ?>" disabled/><br>
	</div>
  </div>

  <div class="form-group">
	    <label class="control-label col-sm-2">Designation</label>
		<div class="col-sm-10">
    <input type="text" class="form-control" name="designation" value="<?php echo $row['designation']; ?>" disabled/><br>
	</div>
  </div>

	 <div class="form-group">
		  <label class="control-label col-sm-2">Organization</label>
		  <div class="col-sm-10">
    <input type="text" class="form-control" name="organization" value="<?php echo $row['organization']; ?>" disabled/><br>
	</div>
  </div>

  <div class="form-group">
  <label class="control-label col-sm-2">Address</label>
	<div class="col-sm-10">
  <input type="text" class="form-control" name="address" value="<?php echo $row['address']; ?>" disabled/><br>
  </div>
  </div>

  	 <div class="form-group">
	 <label class="control-label col-sm-2">Mobile</label>
	 <div class="col-sm-10">
    <input type="number" class="form-control" name="mobile" value="<?php echo $row['mobile']; ?>" disabled><br>
	</div>
  </div>

  <div class="form-group">
  <label class="control-label col-sm-2">Email</label>
  <div class="col-sm-10">
    <input type="email" class="form-control" name="mail" value="<?php echo $row['mail']; ?>" disabled><br>
	</div>
  </div>
<div class="form-group">
<label class="control-label col-sm-2">Title of the paper</label>
<div class="col-sm-10">

	<textarea type="text" class="form-control" name="title" disabled><?php echo $row['title']; ?></textarea><br>
	</div>
  </div>

  <div class="form-group">
<label class="control-label col-sm-2">Role</label>
<div class="col-sm-10">
    <input type="text" class="form-control" name="role" value="<?php echo $row['role']; ?>" disabled><br>
	</div>
  </div>

  <div class="form-group">
  <label class="control-label col-sm-2">Author 1</label>
  <div class="col-sm-10">
  <input type="text" id='textbox1' class="form-control" name="author1" value="<?php echo $row['author1']; ?>" disabled><br>
</div>
	</div>
	  <div class="form-group">
  <label class="control-label col-sm-2">Author 2</label>
  <div class="col-sm-10">
  <input type="text" id='textbox1' class="form-control" name="author2" value="<?php echo $row['author2']; ?>" disabled><br>
</div>
	</div>
	  <div class="form-group">
  <label class="control-label col-sm-2">Author 3</label>
  <div class="col-sm-10">
  <input type="text" id='textbox1' class="form-control" name="author3" value="<?php echo $row['author3']; ?>" disabled><br>
</div>
	</div>



<div class="form-group">
<label class="control-label col-sm-2">DD No.</label>
<div class="col-sm-10">
<input type="text" class="form-control" name=""  value="<?php echo $row['ddno_or_name'];?>" disabled/><br>
</div>
</div>

<div class="form-group">
<label class="control-label col-sm-2">Date</label>
<div class="col-sm-10">
<input type="text" class="form-control" name="date" value="<?php echo $row['date']; ?>" disabled/><br>
</div>
</div>


<div class="form-group">
<label class="control-label col-sm-2">Bank</label>
<div class="col-sm-10">
<input type="text" class="form-control" name="bank" value="<?php echo $row['bank']; ?>" disabled/><br>
</div>
</div>

<div class="form-group">
<label class="control-label col-sm-2">Amount</label>
<div class="col-sm-10">
  <div class="input-group" style="margin:0px;">
      <div class="input-group-addon">Rs.</div>
      <input type="number" class="form-control" name="fee" value="<?php echo $row['fee']; ?>" disabled>
      <div class="input-group-addon">.00</div>
    </div>
</div>
</div><br>
 <div class="form-group">
<?php
$q="SELECT * FROM payment_status where ID='".$id."'";
$data=mysqli_query($con,$q);
$r=mysqli_fetch_array($data);
if(mysqli_num_rows($data)==1)
{
  $flag=1;
  if($r['Status']==0)
  {
    $label="";
    $p="Not Paid!";
  }
  else {
    $label="disabled";
    $p="Paid!";
  }
}
else {
  $flag=-1;
}
?>
	<button type="submit" name="payc" class="btn btn-info btn-block" style="width:85	%;float:right;" <?php echo $label; ?> />Confirm Payment</button>
   </div>
</form>
</div>
<div class="col-md-5" style="font-size:25px;">
<label class="control-label">Payment Status: </label>&nbsp&nbsp&nbsp&nbsp<?php echo $p; ?>
<br><br>
<?php
$pconf="SELECT Abstract,Full_Paper,dir_path from participantsconfer where uid='".$id."'";
$d=mysqli_query($con,$pconf);
$res=mysqli_fetch_assoc($d);
if($res['Abstract']==0)
{
  $a="Not Submitted!";
}
else {
  $a="<a href='../".$res['dir_path']."' target='_blank'>View Abstract</a>";
}
if($res['Full_Paper']==0)
{
  $b="Not Submitted!";
}
else {
  $b="<a href='../".$res['dir_path']."' target='_blank'>View Paper</a>";
}
?>
<label>Abstract : </label>&nbsp&nbsp&nbsp&nbsp<?php echo $a; ?>
<br><br>
<label>Full Paper: </label>&nbsp&nbsp&nbsp&nbsp<?php echo $b; ?>
</div>
	</div>
	</div>

<?php include("footer.php"); ?>
