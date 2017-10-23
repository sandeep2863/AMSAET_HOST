<?php
  include("header.php");
  $id=$_GET['m'];
  $query="SELECT * FROM enquiry_rep where sno='".$id."'";
  $data=mysqli_query($con,$query);
  $row=mysqli_fetch_array($data);
?>
  <div id="admin"><br>
    <p class="bold" style="font-size:24px;">Name  :</p><p><?php echo $row[1]; ?></p><br><br>
    <p class="bold" style="font-size:24px;">Email :</p><p><?php echo $row[2]; ?></p><br><br>
    <p class="bold" style="font-size:24px;">Query :</p><p><?php echo $row[3]; ?></p><br><br>
  </div>
  <?php include("footer.php"); ?>
