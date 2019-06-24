<?php
session_start();
include("database.php");

$datefirst = $_POST['datefirst'];
$datesecond = $_POST['datesecond'];
$count = $_POST['count'];
$hid = $_POST['hid'];
$type = $_POST['type'];
$name=$_POST['name'];
$addresss=$_POST['addresss'];
$phone=$_POST['phone'];


$hn = "hotelname";

// // $sql = "select SUM(wantedrooms) from `tbl_roombook` where '$datefirst' between tbl_roombook.checkin and  tbl_roombook.checkout AND type = '$type' or '$datesecond' between tbl_roombook.checkin  and tbl_roombook.checkout AND type = '$type' or '$datefirst' <= tbl_roombook.checkin and '$datesecond' >= tbl_roombook.checkout AND type = '$type'";
// // $result = mysqli_query($con, $sql);

// // print_r($result);	

// $bookedRooms = mysqli_fetch_assoc($result)['SUM(wantedrooms)'];

// if ($bookedRooms > 0 || $bookedRooms == NULL) {
    // totla room count
    $sqlRoomCount = 'SELECT ' . $type . ' as count, ' . $type . 'price as price FROM `hoteldetails` WHERE `hdid` = "' . $hid . '"';
    $res = mysqli_query($con, $sqlRoomCount);
    $data = mysqli_fetch_assoc($res);
    $totalRooms = $data['count'];
    $price = $data['price'];
    

    // if (($totalRooms - $bookedRooms) <= 0) {
    //     echo "<script>alert('room not avilable! $totalRooms-$bookedRooms-$count,$type;');</script>";
        
    // }

// calculate amount
        //  -- date difference
        $date1 = date_create($datefirst);
        $date2 = date_create($datesecond);

        $dateDiff = date_diff($date1, $date2)->days;

        $amount = $price * $count * $dateDiff;
    //  $insertQuery = mysqli_query($con, "INSERT INTO `tbl_roombook`(`hid`,`hname`,`checkin`,`checkout`,`name`,`address`,`phone`,`wantedrooms`,`type`,`payment`) VALUES('$hid','$hn','$datefirst','$datesecond','$name','$addresss','$phone','$count','$type','not succes')");
   
        echo $amount;
     ?>
      


    
