<?php include("header.php"); ?>


<div id="admin">
<div class="container" style="margin-top:2%;">

  <ul class="nav nav-tabs">
	<li class="active"><a data-toggle="tab" href="#add">Add</a></li>
    <li><a data-toggle="tab" href="#edit">Edit</a></li>

  </ul>

  <div class="tab-content">
    <div id="add" class="tab-pane fade in active">
			<br><br>
		<h2>Speakers</h2><br><br>
		<div class="container">
			<form class="form-horizontal" action="delete.php" method="post">

					<div class="form-group">
						<label class="control-label col-sm-4">Name</label>
							<div class="col-sm-8">
								<input type="text" name="sname" value="" class="form-control" placeholder="Speaker name" required/>
							</div>
					</div><br>

					<div class="form-group">
						<label class="control-label col-sm-4">Category</label>
							<div class="col-sm-8">
								<select name="scat" class="form-control" required>
									<option value="" selected>---Choose Category---</option>
									<option value="National">National</option>
									<option value="International">International</option>
								</select>
							</div>
					</div><br>

						<div class="form-group">
								<label class="control-label col-sm-4">Country</label>
								<div class="col-sm-8">
									<input type="text" name="country" value="" class="form-control" placeholder="Enter Country Name" />
								</div>
							</div><br><br>

					<div class="form-group">
						<div class="col-sm-4">
							</div>
					<div class="col-sm-2">
						<input type="submit" name="add" value="add" class="btn btn-md btn-info btn-block" />
					</div>
				</div>
			</form>
			</div>
			<?php
				if(isset($_POST['add']))
				{
					$s_name = stripcleantohtml($_POST['sname']);
					$s_cat = stripcleantohtml($_POST['scat']);
					$country = stripcleantohtml($_POST['country']);
					$query = "insert into speakers(s_name,s_cat,country) values('".$s_name."','".$s_cat."','".$country."')";
					mysqli_query($con,$query);
				}
			?>

		<br /><br /><br />
		<h2>Committee</h2><br><br>
		<div class="container">
			<form class="form-horizontal" method="post" action="delete2.php">

					<div class="form-group">
						<label class="control-label col-sm-4">Name</label>
							<div class="col-sm-8">
								<input type="text" name="mname" value="" class="form-control" placeholder="Member name" required/>
							</div>
					</div>
					<br>


					<div class="form-group">
						<label class="control-label col-sm-4">Category</label>
							<div class="col-sm-8">
								<select name="ccat" class="form-control" required>
									<option value="" selected>---Choose Category---</option>
									<option value="Local Administrative Committee">Local Administrative Committee</option>
									<option value="PF advisory Committee">PF Advisoty Committee</option>
									<option value="Technical Program Committee">Technical Program Committee</option>
								</select>
							</div>
					</div><br>



							<div class="form-group">
						<label class="control-label col-sm-4">Designation</label>
							<div class="col-sm-8">
								<input type="text" name="designation" value="" class="form-control" placeholder="Designation" required/>
							</div>
					</div>
					<br>

							<div class="form-group">
							<div class="col-sm-4">
							</div>
								<div class=" col-sm-2">
									<input type="submit" name="addc" value="add" class="btn btn-md btn-info btn-block" />
							</div>
						</div>

			</form>
			</div>

			<?php
				if(isset($_POST['addc']))
				{
					$m_name = stripcleantohtml($_POST['mname']);
					$c_cat = stripcleantohtml($_POST['ccat']);
					$designation = stripcleantohtml($_POST['designation']);
					$query = "insert into committee(m_name,c_cat,designation) values('".$m_name."','".$c_cat."','".$designation."')";
					mysqli_query($con,$query);
				}
			?>
	</div>




    <div id="edit" class="tab-pane fade">
		<br /><br />
		<ul class="nav nav-tabs">
			<li class="active"><a data-toggle="tab" href="#speaker">Speakers</a></li>
			<li><a data-toggle="tab" href="#committee">Committee</a></li>
		</ul><br><br>
		<div class="tab-content">
			<div id="speaker" class="tab-pane fade in active">
				<table class="table table-responsive table-bordered">
				<tr>
						<th>Speaker Name</th>
						<th>Category</th>
						<th>Country</th>
						<th>Action</th>
				</tr>
					<?php
						$qry = "select * from speakers";
						$r = mysqli_query($con,$qry);
						while($row=mysqli_fetch_assoc($r))
						{

						?>
					<tr>
						<td><p><?php echo $row['s_name']; ?></p></td>
						<td><p><?php echo $row['s_cat']; ?></p></td>
						<td><p><?php echo $row['country']; ?></p></td>
						<td><a href="delete.php?id=<?php echo $row['s_id'];?>">Delete</a></td>

					</tr>
			<?php
				}
				?>
				</table>

			</div>
			<div id="committee" class="tab-pane fade">
					<table class="table table-responsive table-bordered">
					<tr>
						<th>Member Name</th>
						<th>Committee Category</th>
						<th>Designation</th>
						<th>Action</th>
					</tr>
					<?php

						$qry = "select * from committee";
						$r = mysqli_query($con,$qry);
						while($row=mysqli_fetch_assoc($r))
						{

						?>
					<tr>
						<td><p><?Php echo $row['m_name']; ?></p></td>
						<td><p><?php echo $row['c_cat'];  ?></p></td>
						<td><p><?php echo $row['designation'];  ?></p></td>
						<td><a href="delete2.php?id=<?php echo $row['id'];?>">Delete</a></td>
					</tr>
					<?php
					}
					?>
				</table>
			</div>
		</div>
    </div>
  </div>
</div>


</div>

<?php include("footer.php"); ?>
