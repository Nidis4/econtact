<?php
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);
include 'mainfunctions.php';
header('Content-Type: text/html; charset=utf-8');
$arr = $_POST;
$name = $arr['inputfirstname'];
$lastname = $arr['inputlastname'];
$email = $arr['inputemail'];
$tel = $arr['inputtelephone'];
$spec = $arr['inputspec'];
$address = $arr['inputaddress'];
$ps = $arr['inputps'];

$to = "gkonstantinidis@digiverse.gr";
$subject = "Αίτηση νέου μέλους";
$txt = "Όνομα: $name \n\r <br> Επίθετο: $lastname \n\r<br> Email: $email \n\r<br> Τηλέφωνο: $tel<br> \n\r Ειδικότητα: $spec <br>\n\r Διεύθυνση: $address \n\r <br>
ΤΚ: $ps ";
$headers = "From: e-contact" . "\r\n" .
//"CC:  gkonstantinidis@digiverse.gr". "\r\n" .
"Content-Type: text/html; charset=UTF-8";
mail($to,$subject,$txt,$headers);

?>