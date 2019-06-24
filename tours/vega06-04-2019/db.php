<?php
$host = '127.0.0.1';
$user = 'root';
$pass = '';
$db = 'vegaa';
$link = mysqli_connect ($host, $user, $pass, $db) or die (mysqli_error()); //die digunakan untuk memberhentikan syntax sampai disini
 ?>

<?php
//session_start();
function result ($query) {
  global $link;
  if ($result = mysqli_query($link, $query) or die ('gagal menampilkan data')){
  return $result;
  }
}

function run($query) {
  global $link;
  if (mysqli_query ($link, $query)) return true;
  else return false;
  }

function user($email) {
  $query = "SELECT * FROM login WHERE email='$email'";
  return result ($query);
}

function update_token($code,$email) {
$query = "UPDATE login SET token='$code' WHERE email='$email'";
return run ($query);
}

function update_pass($konfir_pass,$email) {
$query = "UPDATE login SET password='$konfir_pass' WHERE email='$email'";
return run ($query);
}
 ?>
