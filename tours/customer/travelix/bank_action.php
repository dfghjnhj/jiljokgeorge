<?php
session_start();
include("database.php");

 ?>

<?php
if(isset($_POST['pay']))
{
    $name=$_POST['name'];
     $from=$_POST['date'];
     $to=$_POST['todate'];
     $destination=$_POST['destination'];
     $event=$_POST['event'];
     $arrival=$_POST['arrival'];
     $root=$_POST['root'];
     
	
     $sql3="INSERT INTO `tbl_vehiclebooking`(`name`, `from`, `to`,`destination`, `event`,`root`,`arrival`) VALUES ('$name','$from','$to','$destination','$event','$root','$arrival')";

}

if(isset($_POST['submit']))
{	
	include("database.php");
	
	
    $ba_name =$_POST['bank'];
    $c_no =$_POST['c_no'];
    $month =$_POST['month'];
    $year=$_POST['year'];
    $c_name=$_POST['c_name'];
    $cvv=$_POST['cvv'];
    $amount=$_POST['amount'];
	$sql="select * from `tbl_bank` where ba_name='$ba_name' and c_no='$c_no' and month='$month' and year='$year' and c_name='$c_name' and cvv='$cvv'"; 

	$result=mysqli_query($con,$sql);
	$rowcount=mysqli_num_rows($result);
	if($rowcount!=0)
	  {
		  echo "hai";
	while($row=mysqli_fetch_array($result))
		{
		$amount1=$row['amount'];
		echo $amount;
		if($amount1<$amount)
		{
			echo "<script>alert('not suffient balance!');window.location.href='daye.php';</script>";
		}
else
	      {
		$amt=$amount1-$amount;
		$sql2="update tbl_bank set amount='$amt' where c_no='$c_no'";
		$res2=mysqli_query($con,$sql2);
	
	//	$_SESSION['ENABLE_MENU']=1;
		//$sql1="INSERT INTO `alog`(`email`) VALUES ('$email')";
	//	$res1=mysql_query($sql1,$con);
		
		echo "<script>alert('succeesfuly Booked!');window.location.href='daye.php';</script>";
		}
		}
}
	else
	{
	echo "<script>alert(' Paiment not succeesfuly!');window.location.href='details.php';</script>";
	}
}			
	?>
	