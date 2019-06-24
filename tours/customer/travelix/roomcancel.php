<?php
$id=$_GET['id'];
$from=$_GET['from'];
?>
<?php
    include("database.php");
     
    // $from = date('Y-m-d', $from);
    $date= date('Y-m-d', strtotime('-2 day', strtotime($from)));
     $currrentdate=date('Y-m-d');
     
//    echo  $next_date_object = date_modify($today,'-1 day');
   
	 
    if($currrentdate<$date)
    {
        echo "<script>alert('canceled!');window.location.href='roombook.php';</script>";
        $sql1="update tbl_roombook set status='1' where bid='$id'";
     $resul1=mysqli_query($con,$sql1);
    }
    else
    {
        echo "<script>alert('cancelation not possible! CANCELATION ONLY ALLOWED before ONE DAY');window.location.href='roombook.php';</script>";  
    }
    ?>