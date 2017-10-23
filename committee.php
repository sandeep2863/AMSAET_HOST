<?php
include("header.php");
?>
<div class="container" style="margin-top:2%;">
	
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home"><b>Local Administrative Committee</b></a></li>
    <li><a data-toggle="tab" href="#menu1"><b>Poornima Foundation Advisory Committee</b></a></li>
	<li><a data-toggle="tab" href="#menu2"><b>Technical Program Committee</b></a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
		<div class="row">
			<table class="table table-responsive table-hover">
											<th class="text-primary" style="font-size:24px;">Name</th>
											<th class="text-primary" style="font-size:24px;">Designation</th>
											`<?php
											include("connection.php");
											$qry = "select * from committee where c_cat='Local Administrative Committee'";
											$res = mysqli_query($con,$qry);
											
											while($row=mysqli_fetch_array($res))
											{

													$name = $row['m_name'];
													$designation=$row['designation'];
													echo "<tr>";
													echo "<td><b>".$name."</b></td>";
													echo "<td>".$designation."</td>";
													echo "</tr>";

											}
											
											
											?>
											
											</table>
        </div>
	</div>
    

    <div id="menu1" class="tab-pane fade">
      <div class="row">
				<table class="table table-responsive table-hover">
											<th class="text-primary" style="font-size:24px;">Name</th>
											<th class="text-primary" style="font-size:24px;">Designation</th>
											`<?php
											include("connection.php");
											$qry = "select * from committee where c_cat='PF Advisory Committee'";
											$res = mysqli_query($con,$qry);
											
											while($row=mysqli_fetch_array($res))
											{

													$name = $row['m_name'];
													$designation=$row['designation'];
													echo "<tr>";
													echo "<td><b>".$name."</b></td>";
													echo "<td>".$designation."</td>";
													echo "</tr>";

											}
											
											
											?>
											
											</table>							
      </div>
     </div>
	 
	 <div id="menu2" class="tab-pane fade">
      <div class="row">
				<table class="table table-responsive table-hover">
											<th class="text-primary" style="font-size:24px;">Name</th>
											<th class="text-primary" style="font-size:24px;">Designation</th>
											`<?php
											include("connection.php");
											$qry = "select * from committee where c_cat='Technical program Committee'";
											$res = mysqli_query($con,$qry);
											
											while($row=mysqli_fetch_array($res))
											{

													$name = $row['m_name'];
													$designation=$row['designation'];
													echo "<tr>";
													echo "<td><b>".$name."</b></td>";
													echo "<td>".$designation."</td>";
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