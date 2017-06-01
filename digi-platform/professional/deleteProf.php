<?php
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);
include '../functions.php';


$id = $_POST['delete_id'];
$query = "delete from TABLE NAME where ID = $id";
deleteProfessional($id);
echo "$id!";
?>