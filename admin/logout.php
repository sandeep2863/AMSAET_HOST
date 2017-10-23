<?php
session_start();
mysqli_close($con);
session_destroy();
header("location:index.php");
?>
