<?php 
session_start();
include ("../dbconnect.php");
            //$u_name=$_POST['u_name'];
            $name=$_POST['name'];
			$address=$_POST['address'];
			$gender=$_POST['gender'];
			$mobile=$_POST['mobile'];
			
			//$photo=$_POST['photo']
			$email=$_SESSION['email'];
			$sql="UPDATE `registration` SET `name`='$name',`address`='$address',`gender`='$gender',`mobile`='$mobile' WHERE email='$email'";
	$result=mysqli_query($con,$sql);
	header('location:profile.php');
	?>