<?php
session_start();
include("database.php");

$advance = $_POST['advance'];
$cost = $_POST['cost'];
$distance = $_POST['distance'];


       

        $amount = $cost * $distance - $advance;
   
  
        echo $amount;
     ?>
      


    
