<?php
$idb=$_GET['idb'];
$from=$_GET['from'];
?>
<?php
    include("database.php");
     
    // $from = date('Y-m-d', $from);
    $date= date('Y-m-d', strtotime('-1 day', strtotime($from)));
     $currrentdate=date('Y-m-d');
     
//    echo  $next_date_object = date_modify($today,'-1 day');
   
	 
    if($currrentdate<$date)
    {
        echo "<script>alert('canceled!');window.location.href='bookedvehicles.php';</script>";
        $sql1="update tbl_vehiclebooking set status='1' where vid='$idb'";
     $resul1=mysqli_query($con,$sql1);
    }
    else
    {
        echo "<script>alert('cancelation not possible! CANCELATION ONLY ALLOWED before ONE DAY');window.location.href='bookedvehicles.php';</script>";  
    }
    ?>