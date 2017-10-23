<?php
include("header.php");
?>
	<div class="container" style="margin-top:2%;">
	<br><p class="bold" style="font-size:24px;">The following speakers are expected to be present at the conference.</p><br>

  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home"><b>National</b></a></li>
    <li><a data-toggle="tab" href="#menu1"><b>International</b></a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
		<div class="row">

											<table class="table table-responsive table-hover">
											<?php
											include("connection.php");
											$qry = "select * from speakers where s_cat='National'";
											$res = mysqli_query($con,$qry);
											$rows=mysqli_num_rows($res);
											$c=1;
											$r=ceil($rows/3);
											while($r>0)
											{
												echo "<tr>";
												while($c<=3)
												{
													$row=mysqli_fetch_array($res);
													$name = array($row['s_name']);
													echo "<td><b>".$name[0]."</b></td>";
													$c=$c+1;
												}
												if($c>3)
												{
													$c=1;
													echo "</tr>";
												}
												$r=$r-1;
											}
											?>

											</table>
                                        </div>


        </div>


    <div id="menu1" class="tab-pane fade">
      <div class="row">

											<table class="table table-responsive table-hover">
											<th class="text-primary" style="font-size:24px;">Name</th>
											<th class="text-primary" style="font-size:24px;">Country</th>
											`<?php
											include("connection.php");
											$qry = "select * from speakers where s_cat='International'";
											$res = mysqli_query($con,$qry);

											while($row=mysqli_fetch_array($res))
											{

													$name = $row['s_name'];
													$country=$row['country'];
													echo "<tr>";
													echo "<td><b>".$name."</b></td>";
													echo "<td>".$country."</td>";
													echo "</tr>";

											}


											?>

											</table>
                                        </div>


        </div>
    </div>
  </div>

<?php
include("footer.php");
?>
