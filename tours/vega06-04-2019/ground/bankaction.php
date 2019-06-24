<img src="" />
<?php

include '../dbconnect.php';
?>
<?php 
session_start();

	 $ba_name =$_POST['ba_name'];
	 $c_no =$_POST['c_no'];
	 $month =$_POST['month'];
	 $year=$_POST['year'];
	 $c_name=$_POST['c_name'];
	 $cvv=$_POST['cvv'];
	 $amount=$_POST['amount'];
	 $email=$_SESSION['email'];
	$sql="select * from pay_details where bank='$ba_name' and c_no='$c_no' and month='$month' and year='$year' and c_name='$c_name' and cvv='$cvv'"; 
	$res1=mysqli_query($con,$sql);
	
	if($res1)
	{
	while($row=mysqli_fetch_array($res1))
		{
		$amount1=$row['Amount'];
		if($amount1<$amount)
		{
		
		 header("location:grindex.php?error=username not paid");
		}
		else
		{
		$amt=$amount1-$amount;
		$sql2="update pay_details set Amount='$amt' where c_no='$c_no'";
		$res2=mysqli_query($con,$sql2);
		$_SESSION['ENABLE_MENU']=1;
		$sql1="INSERT INTO `alog`(`email`) VALUES ('$email')";
	$res1=mysqli_query($con,$sql1);
		$sql3="INSERT INTO `payment`(`pa_id`, `ba_name`, `c_no`, `month`, `year`, `c_name`, `cvv`, `email`, `amount`) VALUES ('','$ba_name','$c_no','$month','$year','$c_name','$cvv','$email','$amount')";
		$res3=mysqli_query($con,$sql3);
		header("location:grindex.php?success=paid");
		}
		}
	}
	else
	{
	header("location:grindex.php?success=invalid data entering");
	}

	
		
?>
