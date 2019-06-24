<?php
include '../dbconnect.php';
?>
<?php

$imagess = addslashes(file_get_contents($_FILES["imagess"]["tmp_name"])); 
$sql="INSERT INTO `images`( `imagess`) VALUES ('$imagess')";
$res1=mysqli_query($con,$sql);
	header("location:image.php?success=registration sucess!!");
	
?>
