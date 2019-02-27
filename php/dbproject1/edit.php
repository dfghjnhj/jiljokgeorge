<?php
include "dbconnect.php";
$edit=$_GET["eid"];
$result=mysqli_query($con,"select * FROM student WHERE id='$edit'");
$row=mysqli_fetch_array($result);
//header("location:view.php");
 ?>
<html>
<head>
</head>
<body>
<form action="update.php" method="post">
name
  <input type="text" name="name" value="<?php echo $row['name'];?>"> </br>
address>
<input type="text" name="address" value=<?php echo $row['address'];?>> </br>
Phone
<input type="text" name="phone" value=<?php echo $row['phone'];?>> </br>
<input type="hidden" name="abc" value=<?php echo $edit; ?>>
<input type="submit" name="submit" value="update">
</form>
</body>
<html>
