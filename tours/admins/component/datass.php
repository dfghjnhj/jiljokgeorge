<?php
$con = mysqli_connect("localhost","root","","mainprojectdb");
if(isset($_POST['status'])&&$_POST['status']=="1")
{
  $citynme = $_POST['dist'];
  $query = "SELECT `hdid`, `name` FROM `hoteldetails` WHERE `did` = '$citynme' AND `status` = '1'";
  $result=mysqli_query($con,$query);
  echo "<option value = >Select hotel</option>";
  while($row=mysqli_fetch_array($result))
  {
    echo "<option value='".$row['name']."'>".$row['name']."</option>";
  }
}
?>