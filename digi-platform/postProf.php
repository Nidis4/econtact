<?php
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);
include 'functions.php';

$name = "sadas";

$arr = $_POST; //you need to grab the data via the POST (or request) global.
$name = $arr['inputfirstname'];
$surname = $arr['inputlastname'];
$email = $arr['inputemail'];
$mob = $arr['inputMobile'];
$tel = $arr['inputtelephone'];
$address = $arr['inputaddress'];
$address1 = $arr['inputaddress1'];
$address2 = $arr['inputaddress2'];
$spec = $arr['inputspec'];
$avail = $arr['inputavail'];
$notes = $arr['inputnotes'];

$cat = $arr['inputcat2'];


insertProfessional($name, $surname, $email, $mob, $tel, $address, $address1, $address2, $spec, $avail, $notes);
insertProfLocation($email,$address1,$address2);
insertProfCategory($email,$cat);
?>