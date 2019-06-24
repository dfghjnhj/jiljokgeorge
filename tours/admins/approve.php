<?php
 include("database.php");; 
 //$id=$_SESSION['Log_id'];
$query=("SELECT * FROM  hotel where approve='1'");
$result=mysqli_query($con,$query);
$rowm=mysqli_fetch_array($result);
$id=$rowm['hid'];


$aid=$_GET['id'];
//echo $r;
$sql="UPDATE hotel set approve=0 where `hid` = $aid";
//echo $sql;
$res=mysqli_query($con, $sql);
//$row=mysqli_fetch_array($rowm);

 


if($res=1)
{
   echo "<script>alert('approved');window.location.href='index.php';</script>";
      //  echo"<script>alert('Approved.........');
 
      ///  document.location=('index.php');
       // </script>";
    } 
  
?>