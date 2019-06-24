<?php
 include("database.php");
 
 if(isset($_POST["submit"]))
 {
	$ptype=$_POST["type"];
    $pname=$_POST["pname"];
	$pdesi=$_POST["pdestination"];
    $pseat=$_POST["pseat"];
    $pcost=$_POST["pcost"];
    $pduration=$_POST["pduration"];
		$pdate=$_POST["pdate"];
		$ptime=$_POST["ptime"];
		$pstart=$_POST["pstart"];
		$pdetails=$_POST["pdetails"];
		$pfacilities=$_POST["pfacilities"];
		$pmore=$_POST["message"];
		$target_dir = "uploads/";
						$target_file = $target_dir . basename($_FILES["image"]["name"]);
						move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
    $suc=mysqli_query($con,"INSERT INTO `tbn_addpak`(`ptype`,`pname`,`pdestination`,`seat`,`cost`,`duration`,`date`,`time`,`sp`,`details`,`facilities`,`more`,`pimage`) VALUES('$ptype','$pname','$pdesi','$pseat','$pcost','$pduration','$pdate','$ptime','$pstart','$pdetails','$pfacilities','$pmore','$target_file')");
        header("location:index.php");
        //echo print_r($suc);
 }
	?>
	