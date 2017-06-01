<?php
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);
include '../functions.php';


$catid = $_POST['cat_id'];
$profid = $_GET['prof_id'];
deleteProfessionalCategory($profid, $catid);
echo "$catid $profid";
?>