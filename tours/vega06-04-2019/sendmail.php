<?php
$to = "henelpj@mca.ajce.in";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: henelpj1818@gmail.com" . "\r\n" .
"CC: henelpj@mca.ajce.in.";

mail($to,$subject,$txt,$headers);
?>