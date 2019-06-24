
<?php
session_start();
$id=$_SESSION['h_id'];
 include("database.php");
 
 if(isset($_POST["submit"]))
 {
  include("database.php");
 
	$name=$_POST["name"];
    $address=$_POST["address"];
    $landmark=$_POST["landmark"];
    $city=$_POST["city"];
    $de=$_POST["de"];
    $dc=$_POST["dc"];
    $fa=$_POST["fa"];
    $fac=$_POST["fac"];
    $faci=$_POST["faci"];
    $pr=$_POST["pr"];
    $pc=$_POST["pc"];
    $bu=$_POST["bu"];
    $bc=$_POST["bc"];
    $dis=$_POST["dist"];
    
  
		$target_dir = "uploads/";
						$target_file = $target_dir . basename($_FILES["dimage"]["name"]);
                        move_uploaded_file($_FILES["dimage"]["tmp_name"], $target_file);
                      
	  $target_fileone = $target_dir . basename($_FILES["pimage"]["name"]);
                        move_uploaded_file($_FILES["pimage"]["tmp_name"], $target_fileone);
                        $target_dir = "uploads/";
 $target_filetwo = $target_dir . basename($_FILES["bimage"]["name"]);
                        move_uploaded_file($_FILES["bimage"]["tmp_name"], $target_filetwo);
                        
                 
                       
 $succc=mysqli_query($con,"INSERT INTO `hoteldetails`(`name`,`hid`,`city`,`address`,`landmark`,`delux`,`deluxprice`,`fa`,`di`,`premium`,`premiumprice`,`fac`,`pi`,`budget`,`budgetprice`,`faci`,`bi`,`facilities`,`status`) VALUES('$name','$id','$city','$address','$landmark','$de','$dc','$fa','$target_file','$pr','$pc','$fac','$target_fileone','$bu','$bc','$faci','$target_filetwo','$faci',1)");
// echo "INSERT INTO `hoteldetails`(`name`,`hid`,`city`,`address`,`landmark`,`delux`,`deluxprice`,`fa`,`di`,`premium`,`premiumprice`,`fac`,`pi`,`budget`,`budgetprice`,`faci`,`bi`,`facilities`,`status`) VALUES('$name','$id','$city','$address','$landmark','$de','$dc','$fa','$target_dir','$pr','$pc','$fac','$target_fileone','$bu','$bc','$faci','$target_filetwo','$faci',1)";   
       header("location:detailslist.php");
				
 }
 ?>