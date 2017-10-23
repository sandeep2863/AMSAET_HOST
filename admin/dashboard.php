<?php include("header.php"); ?>

<div id="admin">
	<h1>AMSAET 2017</h1>
	<br><br>
	<div class="row">
	<div class="col-md-8">
	<?php
	include("connection.php");
	$qry = "select * from adminusers where mail='".$_SESSION['email']."'";
	$res = mysqli_query($con,$qry);
	$row=mysqli_fetch_array($res)
	?>
	<h3>Admin Details</h3>
	<p><u>Name</u> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:- &nbsp&nbsp&nbsp<?php echo $row['Name']; ?><br><u>Email</u> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:- &nbsp&nbsp&nbsp<?php echo $row['mail']; ?><br /></p>
	</div>
	<div class="col-md-4">
	<h3><?php echo date("d/m/Y"); ?></h3>
	<h3><div id="txt"></div></h3>

	</div>
	</div>
	<br><br>
	<div class="row">
		<div class="col-lg-6">
    <div class="input-group">
			<form action="search.php" method="post">
      <input type="text" class="form-control" name="uid" placeholder="Enter ID of Participant">
      <span class="input-group-btn">
        <button class="btn btn-default" type="submit" name="search">Go</button>
      </span>
		</form>
		<br><br>
		<p>
		<?php
			if(isset($_GET['m']))
			{
				$id=stripcleantohtml($_GET['m']);
				if($id==0)
				{
					echo "No participant found!";
				}
				else {
					writelog('Participant Search');
				}
			}
		?></p>
    </div>
  </div>	</div>
</div>

<?php include("footer.php"); ?>
