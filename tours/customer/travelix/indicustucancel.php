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
        echo "<script>alert('BOOKING CANCELD!');window.location.href='indicbookingf.php';</script>";
        $sql1="updatetbl_pic set status='1' where pbiid='$id'";
     $resul1=mysqli_query($con,$sql1);
     $sqlone="select pid from `tbl_pic` where pbiid='$id'";
     $resultone=mysqli_query($con,$sqlone);
     $pid= mysqli_fetch_assoc($resultone)['pid'];
      $sqltwo="select seat from`tbn_addpak` where pid='$pid'";
      $resulttwo=mysqli_query($con,$sqltwo);
      $x= mysqli_fetch_assoc($resulttwo)['seat'];
      $y=$x+1;
     $sql6="update tbn_addpak set seat='$y' where pid='$pid'";
     $resul6=mysqli_query($con,$sql6);
      
    }
    else
    {
        echo "<script>alert('cancelation not possible! CANCELATION ONLY ALLOWED before TWO DAY');window.location.href='indicbookingf.php';</script>";  
    }
    ?>