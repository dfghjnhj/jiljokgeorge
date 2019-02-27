<?php
include ("dbconnect.php");
if(isset($_POST["submit1"]))
{
	$n=$_POST["name"];
	$a=$_POST["address"];
	$p=$_POST["phone"];
	mysqli_query($con,"INSERT INTO `student`(`name`,`address`,`phone`) VALUES('$n','$a','$p')");
  header("location: view.php");
}

?>
<html>
<body>
<form action="#" method ="POST">
<table>
<tr>
<td>Name
</td>
<td>
<input type ="text" name="name">
</td>
<tr>
<td>Address
</td>
<td>
<input type ="text" name="address">
</td>
<tr>
<td>Phone
</td>
<td>
<input type ="text" name="phone">
</td>
</tr>
<tr>
<td>
</td>
<td>
<input type ="submit" name="submit1">
</td>
</tr>
</table>
</form>
</body>


</html>
