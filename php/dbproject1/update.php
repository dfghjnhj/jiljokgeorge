<?php
include "dbconnect.php";
if(isset($_POST["submit"]))
{
	$name=$_POST["name"];
	$address=$_POST["address"];
	$phone=$_POST["phone"];
  $id=$_POST["abc"];
mysqli_query($con,"UPDATE `student` SET `name`='$name',`address`='$address',`phone`='$phone' WHERE id='$id'");
header("location: view.php");
}

?>
