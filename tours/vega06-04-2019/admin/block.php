<img src="" />
<?php
include("../dbconnect.php");
			$sql="SELECT * FROM login";
			$result=mysqli_query($con,$sql);


	$uid=$_POST['block'];
	$block=$_POST['submit'];
	if($block=='unblock')
	{
			$sql="update login set block=1 where email='$uid'";
			$result=mysqli_query($con,$sql);
			header('location:views.php');
	}
	elseif($block=='block')
	{
		
			$sql="update login set block=0 where email='$uid'";
			$result=mysqli_query($con,$sql);
			header('location:views.php');

	}
		


?>