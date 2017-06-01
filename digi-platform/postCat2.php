<?php
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);
include 'functions.php';

$cat1 = $_POST['catlevel1'];

$result = retrieveCategoryLevel2($cat1);
$anse ="<option value='' disabled>Επιλέξτε Κατηγορία</option>";
 while ($row = mysqli_fetch_row($result)) {
    $anse =  $anse."<option value='$row[0]'>$row[1]</option>";
 }
echo $anse;
?>