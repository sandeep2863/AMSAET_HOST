<?php
include("header.php");

$query="SELECT * FROM participantsconfer";
$data=mysqli_query($con,$query);
$num = mysqli_num_rows($data);
$j = ceil($num/6);
				if(isset($_GET['page']))
				{
					 $page = $_GET['page'];
				     $page = ($page-1)*6;
					$qry2 = "select * from participantsconfer limit 6 offset $page";
				}
				else
				{
					$qry2 = "select * from participantsconfer limit 6 offset 0";
				}
				$result = mysqli_Query($con,$qry2);
?>

<div id="admin"><br>
<div id="list">
<table class="table table-responsive table-hover">
    <tr>
        <th><h3 class="text-danger" style="font-size:24px;">Name of Participant</h3></th>
        <th><h3 class="text-danger" style="font-size:24px;">Details</h3></th>
    </tr>
        <?php
            while($row=mysqli_fetch_array($result))
            {
        ?>
     <tr>
        <td><p><?php echo $row[1]; ?></p></td>
        <td><p><a href="details.php?m=<?php echo $row[0]; ?>">View Details</a></p></td>
    </tr>
    <?php } ?>
</table>
<ul class="pagination">
						<?php
						for($i=1;$i<=$j;$i++)
						{
						?>
						<li><a href="pmang.php?page=<?php  echo $i; ?>"><?php echo $i; ?></a></li>
					<?php
					}
					?>
						</ul>
</div>
</div>
<?php
include("footer.php");
?>
