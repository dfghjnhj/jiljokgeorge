<img src="" />
<?php

include '../dbconnect.php';
?>
<?php 
session_start();

	 $bba_name =$_POST['bba_name'];
	 $bc_no =$_POST['bc_no'];
	 $bmonth =$_POST['bmonth'];
	 $byear=$_POST['byear'];
	 $bc_name=$_POST['bc_name'];
	 $bcvv=$_POST['bcvv'];
	 $bamount=$_POST['bamount'];
	 $email=$_SESSION['email'];
	$sql="select * from pay_detailss where bba_name='$bba_name' and bc_no='$bc_no' and bmonth='$bmonth' and byear='$byear' and bc_name='$bc_name' and bcvv='$bcvv'"; 
	$res1=mysqli_query($con,$sql);
	
	if($res1)
	{
	while($row=mysqli_fetch_array($res1))
		{
		$amount1=$row['Amount'];
		if($amount1<$amount)
		{
		
		 header("location:evbook.php?error=username not paid");
		}
		else
		{
		$amt=$amount1-$amount;
		$sql2="update pay_detailss set Amount='$amt' where bc_no='$bc_no'";
		$res2=mysqli_query($con,$sql2);
		$_SESSION['ENABLE_MENU']=1;
		$sql1="INSERT INTO `alog`(`email`) VALUES ('$email')";
	$res1=mysqli_query($con,$sql1);
$sql3="INSERT INTO `bpayment`(`bpa_id`, `bba_name`, `bc_no`, `bmonth`, `byear`, `bc_name`, `bcvv`, `email`, `bamount`) VALUES ('','$bba_name','$bc_no','$bmonth','$byear','$bc_name','$bcvv','$email',
'$bamount')";
		$res3=mysqli_query($con,$sql3);
		header("location:evbook.php?success=paid");
		}
		}
	}
	else
	{
	header("location:evbook.php?success=invalid data entering");
	}

	
		
?>
