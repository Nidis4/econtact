<?php
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);
include 'mainfunctions.php';
header('Content-Type: text/html; charset=utf-8');
$arr = $_POST;
$name = $arr['inputfirstname'];

$email = $arr['inputemail'];

$to = "gkonstantinidis@digiverse.gr";
$subject = $arr['inputtopic'];
$txt = "O χρήστης $name με e-mail $email έστειλε το ακόλουθο μήνυμα: ".$arr['inputmessage'];
$headers = "From: e-contact" . "\r\n" .
//"CC:  gkonstantinidis@digiverse.gr". "\r\n" .
"Content-Type: text/html; charset=UTF-8";
mail($to,$subject,$txt,$headers);

?>