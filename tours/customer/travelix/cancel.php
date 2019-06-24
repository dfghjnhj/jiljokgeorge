<?php
$id=$_GET['id'];
$from=$_GET['from'];
?>
<?php
    include("database.php");
    $date= date('Y-m-d', strtotime('-1 day', strtotime($from)));
     $currrentdate=date('Y-m-d');
    if($currrentdate<$date)
    {
        echo "<script>alert('canceled! advance amount cannot refund');window.location.href='boookedtraveler.php';</script>";
        $sql1="update tbl_travelerbook set status='1' where tbid='$id'";
    $resul1=mysqli_query($con,$sql1);
    }
    else
    {
        echo "<script>alert('cancelation not possible! CANCELATION ONLY ALLOWED before ONE DAY');window.location.href='boookedtraveler.php';</script>";  
    }
    ?>

