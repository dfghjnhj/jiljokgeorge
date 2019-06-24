<!DOCTYPE html>
<html lang="en">

<body>

<?php
session_start();
// remove all session variables
//session_unset();
session_unset();
// destroy the session
session_destroy();
header("location:../../login.php");
?>

</body>
</html>
