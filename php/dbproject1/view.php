<html>
<head>
</head>
<body>
</body>
<a href="studinfo.php">Add User</a>
<table border=3;>
  <tr>
    <td>Id</td>
    <td>Name</td>
    <td>Address</td>
    <td>Phone</td>
    <td>Delete</td>
    <td>Edit</td>

  </tr>

              <?php
              include ("dbconnect.php");
              $result = mysqli_query($con,"SELECT * FROM student");



              while($row = mysqli_fetch_array($result))
              {


              echo "<tr>";
              echo "<td>" . $row['id'] . "</td>";
              echo "<td>" . $row['name'] . "</td>";
              echo "<td>" . $row['address'] . "</td>";
              echo "<td>" . $row['phone'] . "</td>";
              echo '<td> <a href="delete.php?uid='.$row["id"].';"> delete</a></td>';
              echo '<td> <a href="edit.php?eid='.$row["id"].';"> edit</a></td>';
              echo "</tr>";

              }


              ?>
</table>
</body>
</html>
