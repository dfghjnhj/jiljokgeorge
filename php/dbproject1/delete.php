<?php
include ("dbconnect.php");
$kid =$_GET["uid"];
mysqli_query($con,"DELETE FROM student WHERE id='$kid'");
header("location:view.php");
 ?>
