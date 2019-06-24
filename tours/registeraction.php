<?php
include "database.php";
if(isset($_POST["submit"]))
{
    $name=$_POST["name"];
	$address=$_POST["address"];
    $gender=$_POST["gender"];
    $phone=$_POST["phone"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $suc=mysqli_query($con,"INSERT INTO `tbn_login`(`name`,`email`,`password`,`type`,`status`) VALUES('$name','$email','$password','user','1')");
$succ=mysqli_query($con,"INSERT INTO `tbn_registration`(`name`,`address`,`gender`,`phone`,`email`,`password`) VALUES('$name','$address','$gender','$phone','$email','$password')");
  header("location:signup.php");;

}

?>