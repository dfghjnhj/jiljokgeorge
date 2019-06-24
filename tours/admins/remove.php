<?php
$id=$_GET['id'];

?>
<?php
    include("database.php");
     
    // $from = date('Y-m-d', $from);
  
//    echo  $next_date_object = date_modify($today,'-1 day');
   
	 
    
        echo "<script>alert('removed!');window.location.href='viewpak.php';</script>";
        $sql1="update `tbn_addpak` set status='1' where pid='$id'";
        $resul1=mysqli_query($con,$sql1);
     
    ?>