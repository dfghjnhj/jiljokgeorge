<?php
session_start();
include("dbconnect.php");
$email=$_POST['email'];
//$password=$_POST['password'];
$password = md5($_POST['password']);
$sql="SELECT * FROM login WHERE email='$email' and password='$password'";
$result=mysqli_query($con,$sql);
//$row=mysqli_fetch_array($result);
//print_r($row);
if(mysqli_num_rows($result)>0)
{
	while($row=mysqli_fetch_array($result))
	{
		
		$email=$row['email'];
		$password=$row['password'];
		$who=$row['who'];
		if($email==$email && $password==$password && $who=='Ground' )
		{
		$_SESSION['email']="$email";
		$_SESSION['password']="$password";
		$_SESSION['who']="$who";

			header("location:ground/grindex.php");

		}
       
        elseif($email==$email && $password==$password && $who=='Event')
		{
	    $_SESSION['email']="$email";
		$_SESSION['password']="$password";
		$_SESSION['who']="$who";

			header("location:event/evindex.php");
		
			
		}
		elseif($email==$email && $password==$password && $who=='Club')
		{         
	    $_SESSION['email']="$email";
		$_SESSION['password']="$password";
		$_SESSION['who']="$who";
      
			header("location:club/clindex.php");
			
		}
		elseif($email==$email && $password==$password && $who=='Admin')
		{               
	    $_SESSION['email']="$email";
		$_SESSION['password']="$password";
		$_SESSION['who']="$who";

			header("location:admin/adindex.php");
			
		}
		else
		{
			header("location:login.php?error=Wrong password!!");
		}
		}
		}
		else
		{
		header("location:login.php?error=Wrong password!!");
		}
		
		
		


//echo $rowcount;
//echo $u_id;
//echo $u_pass;
?>