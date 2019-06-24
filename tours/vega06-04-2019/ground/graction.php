<?php
include '../dbconnect.php';
?>
<?php 
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

session_start();
	$gname =$_POST['gname'];
	$gaddress =$_POST['gaddress'];
	$seats=$_POST['seats'];
	$sno =$_POST['sno'];
	$photo = addslashes(file_get_contents($_FILES["photo"]["tmp_name"]));
	$email=$_SESSION['email'];
	$amount =$_POST['amount'];
	
							$sql="	INSERT INTO `grounds`(`gid`, `gname`, `gaddress`, `seats`, `sno`, `photo`, `email`,`amount`) VALUES ('','$gname','$gaddress','$seats',$sno,'$photo','$email','$amount')";
	//$u_pass=md5($u_pass);
	$res=mysqli_query($con,$sql);

$gid = $con->insert_id;
								$sql1="INSERT INTO `items`(`i_id`, `Badminton`, `Cricket`, `Basketball`, `Football`, `Volleyball`, `email`, `gid`) VALUES ('','$Badminton','$Cricket','$Basketball','$Football','$Volleyball','$email','$gid')";

	$res1=mysqli_query($con,$sql1);

	header("location:grounds.php?error=registration sucess!!");
	
		
?>

