<?php 
session_start();
include ("../dbconnect.php");
            //$u_name=$_POST['u_name'];
			
$Badminton ="";
$Cricket="";
$Basketball="";
$Football="";
$Volleyball="";
if(isset($_POST['Badminton'])){
	$Badminton =$_POST['Badminton'];
}
if(isset($_POST['Cricket'])){
	$Cricket =$_POST['Cricket'];
}
if(isset($_POST['Basketball'])){
	$Basketball =$_POST['Basketball'];
}
if(isset($_POST['Football'])){
	$Football =$_POST['Football'];
}
if(isset($_POST['Volleyball'])){
	$Volleyball =$_POST['Volleyball'];
}

			$gid=$_POST['gid'];
			$gname=$_POST['gname'];
			$gaddress=$_POST['gaddress'];
			//$seats=$_POST['seats'];
			$sno=$_POST['sno'];
			$amount=$_POST['amount'];
			
		
			//$photo=$_POST['photo']
			$email=$_SESSION['email'];
			$sql="UPDATE `grounds` SET `gname`='$gname',`gaddress`='$gaddress',`sno`=$sno,`amount`=$amount WHERE gid=$gid";
			
	$result=mysqli_query($con,$sql);
	
	$sql1="UPDATE `items` SET `Badminton`='$Badminton',`Cricket`='$Cricket',`Basketball`='$Basketball',`Football`='$Football',`Volleyball`='$Volleyball' WHERE gid=$gid";
	$result1=mysqli_query($con,$sql1);
	
	
	header('location:ground1.php');
	?>