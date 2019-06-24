<img src="" />
<?php
include("../dbconnect.php");
			$sql="SELECT * FROM book";
			$result=mysqli_query($con,$sql);


	//$uid=$_POST['block'];
	$block=$_POST['submit'];
	$b_id=$_POST['b_id'];
	if($block=='unblock')
	{
			//echo "haii";
			$sql="update book set block=1 where b_id='$b_id'";
			$result=mysqli_query($con,$sql);
			header('location:views.php');
	}
	elseif($block=='block')
	{
			echo "hloo";
			$sql="update book set block=0 where b_id='$b_id'";
			$result=mysqli_query($con,$sql);
			header('location:views.php');

	}
		


?>