//select ddistrict on dstate
<?php
 $con = mysqli_connect("localhost","root","","mainprojectdb");

if(isset($_POST['status'])&& $_POST['status']=="1")
{
  $snme = $_POST['country'];
  $query = "SELECT `sid`, `sname` FROM `tbl_state` WHERE `cid` = '$snme' AND `status` = '1'";
  $result=mysqli_query($con,$query);
  echo "<option value = > Select State </option>";
  while($row=mysqli_fetch_array($result))
  {
    echo "<option value='".$row['sid']."'>".$row['sname']."</option>";
  }
}
?>