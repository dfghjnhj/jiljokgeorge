//select ddistrict on dstate
<?php
 $con = mysqli_connect("localhost","root","","mainprojectdb");

if(isset($_POST['status'])&& $_POST['status']=="1")
{
  $sn= $_POST['co'];
  $query = "SELECT `sid`, `sname` FROM `tbl_state` WHERE `cid` = '$sn' AND `status` = '1'";
  $result=mysqli_query($con,$query);
  echo "<option value = > Select State </option>";
  while($row=mysqli_fetch_array($result))
  {
    echo "<option value='".$row['sid']."'>".$row['sname']."</option>";
  }
}
?>