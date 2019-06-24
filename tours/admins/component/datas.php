<?php
$con = mysqli_connect("localhost","root","","mainprojectdb");
if(isset($_POST['status'])&&$_POST['status']=="1")
{
  $dnme = $_POST['state'];
  $query = "SELECT `did`, `dname` FROM `tbl_district` WHERE `sid` = '$dnme' AND `status` = '1'";
  $result=mysqli_query($con,$query);
  echo "<option value = >Select District</option>";
  while($row=mysqli_fetch_array($result))
  {
    echo "<option value='".$row['did']."'>".$row['dname']."</option>";
  }
}
?>