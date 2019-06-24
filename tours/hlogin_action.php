<?php
session_start();
include("database.php");

$u_id=$_POST['username'];
$u_pass=$_POST['password'];
$sql="SELECT * FROM hotel WHERE uname='$u_id'";
$result=mysqli_query($con,$sql);

if(!mysqli_num_rows($result))
{
    header("hlogin.php");
    exit;
}



$row=mysqli_fetch_array($result);
    
        $dbu_id=$row['hid'];
        $dbu_name=$row['hname'];
        $dbu_city=$row['hcity'];
        $dbu_uname=$row['uname'];
        $dbu_pass=$row['pass'];
        $dbu_approve=$row['approve'];

        $_SESSION['name']="$dbu_name";
        $_SESSION['city']="$dbu_city";
        $_SESSION['h_id']="$dbu_id";
        $_SESSION['uname']="$dbu_uname";
		$_SESSION['pass']="$dbu_pass";

        if($dbu_uname==$u_id &&  $dbu_pass==$u_pass && $dbu_approve=='0')
        {
            header("location:hotel-admin/index.php");
           // echo "hai";

        }
       
        
        else
        {
         header("location:hlogin.php");
         echo "hai";
        }
        


//echo $rowcount;
//echo $u_id;
//echo $u_pass;
?>