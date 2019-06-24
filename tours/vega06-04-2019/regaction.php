<?php
include 'dbconnect.php';
?>
<?php 

	$who =$_POST['who'];
	$name =$_POST['name'];
	$address=$_POST['address'];
	$email =$_POST['email'];
	$gender =$_POST['gender'];
	$mobile =$_POST['mobile'];
	$block='0';
	//$password =$_POST['password'];
	$mypassword = md5($_POST['password']);
	$sel = "SELECT * FROM `login`";

$result = mysqli_query($con , $sel);
while($row =mysqli_fetch_array($result)){
	$a=$row['email'];
	
	//echo $a;
	if($a==$email)
	{
		$f=1;
	}
}
if($f==1)
{
	
	 echo "<script>alert('Username already exists')</script>";
	 header("location:register.php?error=Username already exists!!");
}
else
{

	echo $sql="INSERT INTO registration( who, name,address,email, gender,mobile) VALUES
		                        ('$who','$name','$address','$email','$gender',$mobile)";
	//$u_pass=md5($u_pass);
	
	$res=mysqli_query($con,$sql);
	$sql1="INSERT INTO login( email, password, who , block) VALUES
		                        ('$email','$mypassword','$who','$block')";

	$res1=mysqli_query($con,$sql1);
	header("location:login.php?success=registration sucess!!");
	
		}
?>
