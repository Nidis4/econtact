<?php
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);
include 'functions.php';

$name = "sadas";

$arr = $_POST; //you need to grab the data via the POST (or request) global.
$email = $arr['inputEmail'];
$password = $arr['inputPassword'];
$num = 0;
$num = loginAction($email, $password);
if ($num>0){
	echo $num;
   	session_start();
   	$_SESSION['user'] = $email;
}
else{
	echo "klarino";
}
?>