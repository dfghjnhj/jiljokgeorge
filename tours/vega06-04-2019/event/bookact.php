<?php
include '../dbconnect.php';
?>
<?php 
session_start();
	$gname =$_POST['gname'];
	$fdate =$_POST['fdate'];
	$tdate=$_POST['tdate'];
	$time =$_POST['time'];
	$type=$_POST['type'];
	$block='0';
	 $gid=$_POST['name'];
	$email=$_SESSION['email'];
	
							$sql="INSERT INTO `book`(`b_id`, `gname`, `fdate`, `tdate`, `time`, `type`, `email`, `gid`,`block`) VALUES ('','$gname','$fdate','$tdate','$time','$type','$email',$gid,$block)";
	//$u_pass=md5($u_pass);
	$res=mysqli_query($con,$sql);

//$b_id=$row['b_id'];
$sql2="select * from book";
$res=mysqli_query($con,$sql2);

	while($row=mysqli_fetch_array($res))
		{
$b_id=$row['b_id'];
}
echo $b_id;
	
	header("location:bookpay.php?b_id=$b_id ");
	
		
?>

