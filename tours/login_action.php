<?php
session_start();
include("database.php");

$u_id=$_POST['username'];
$u_pass=$_POST['password'];
$sql="SELECT * FROM tbn_login WHERE email='$u_id'";
$result=mysqli_query($con,$sql);

if(!mysqli_num_rows($result))
{
    header("login.php");
    exit;
}



$row=mysqli_fetch_array($result);
    
        $dbu_id=$row['lid'];
        $dbu_name=$row['name'];
        $dbu_email=$row['email'];
        $dbu_type=$row['type'];
        $dbu_pass=$row['password'];
        $dbu_status=$row['status'];

        $_SESSION['type']="$dbu_type";
        $_SESSION['email']="$dbu_email";
        $_SESSION['u_id']="$dbu_id";
        $_SESSION['u_pass']="$dbu_pass";
        $_SESSION['u_status']="$dbu_status";

        if($dbu_email==$u_id && $dbu_pass==$u_pass && $dbu_type=='1' )
        {
            header("location:customer/travelix/index.php");
           // echo "hai";

        }
       
        elseif($dbu_email==$u_id && $dbu_pass==$u_pass && $dbu_type=='2')
        {
             
           header("location:admins/index.php");
          // echo "hello";
        
            
        }
        //elseif($dbu_email!=$u_id)
       // {
         //header("location:login.php");
         
        //}
        //elseif($dbu_email==$u_id && $dbu_pass!=$u_pass && $dbu_type=='1')
        //{
         //header("location:login.php");
        //}
        //elseif($dbu_email!=$u_id && $dbu_pass!=$u_pass && $dbu_type=='1')
        //{
         //header("location:login.php");
        //}
        else
        {
         header("location:login.php");
         echo "hai";
        }
        


//echo $rowcount;
//echo $u_id;
//echo $u_pass;
?>