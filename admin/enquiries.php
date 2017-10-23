<?php
include("header.php");

$query="SELECT * FROM enquiry_rep";
$data=mysqli_query($con,$query);
$num = mysqli_num_rows($data);
$j = ceil($num/6);
				if(isset($_GET['page']))
				{
					 $page = $_GET['page'];
				     $page = ($page-1)*6;
					$qry2 = "select * from enquiry_rep limit 6 offset $page";
				}
				else
				{
					$qry2 = "select * from enquiry_rep limit 6 offset 0";
				}
				$result = mysqli_Query($con,$qry2);
?>

<div id="admin"><br>
<div id="list">
<table class="table table-responsive table-hover">
    <tr>
        <th><h3 class="text-danger" style="font-size:24px;">Name</h3></th>
        <th><h3 class="text-danger" style="font-size:24px;">Message</h3></th>
        <th><h3 class="text-danger" style="font-size:24px;">IP Address</h3></th>
    </tr>
        <?php
            while($row=mysqli_fetch_array($result))
            {
        ?>
     <tr>
        <td><p><?php echo $row[1]; ?></p></td>
        <td><p><a href="msg.php?m=<?php echo $row[0]; ?>">View Details</a></p></td>
        <td><p><?php echo $row[5]; ?></p></td>
    </tr>
    <?php } ?>
</table>
<ul class="pagination">
						<?php
						for($i=1;$i<=$j;$i++)
						{
						?>
						<li><a href="enquiries.php?page=<?php  echo $i; ?>"><?php echo $i; ?></a></li>
					<?php
					}
					?>
						</ul>
</div>
</div>
<?php
include("footer.php");
?>
