<?php 	  

	  function initDB(){
		  $conn = mysqli_connect('localhost', 'digivers_contact', 'C9R[qPG^I)MK','digivers_econtact');
		  if (mysqli_connect_errno()) {
    		echo ("Connect failed: ". mysqli_connect_error());
    		exit();
			}
		  //$db   = mysql_select_db('digivers_econtact', $conn);
		  mysqli_query($conn, "SET NAMES 'utf8'");
		  mysqli_query($conn, "SET CHARACTER SET 'utf8'");
		  //echo "Connectnion Made <br>";
		  return $conn;
	  }

	  function loginAction($username, $password){
		  $conn = initDB();

		  // To protect MySQL injection for Security purpose
		  $username = stripslashes($username);
		  $password = stripslashes($password);
		  //$username = mysql_real_escape_string($username);
		  //$password = mysql_real_escape_string($password);
		  $hashed = md5($password);

		  // SQL query to fetch information of registerd users and finds user match.
		  $result = mysqli_query($conn, "SELECT * FROM ADMINIS WHERE PASSWORD='$hashed' AND EMAIL='$username' ");
		  //echo "SELECT * FROM ADMINIS WHERE PASSWORD='$hashed' AND EMAIL='$username'";
		  //$query = mysql_query("select * from ADMINIS where PASSWORD='$hashed' AND EMAIL='$username'", $connection);
		  //$rows = mysql_num_rows($query);
		  $row_cnt = mysqli_num_rows($result);
		  //echo $row_cnt;
		  return $row_cnt;
	  }
	  
	  function insertProfessional($name, $surname, $email, $mob, $tel, $address, $address1, $address2, $spec, $avail, $notes){
	  	$conn = initDB();
	  	//echo "in function"
	  	mysqli_query($conn,"INSERT INTO `PROFESSIONALS`(`FIRSTNAME`, `LASTNAME`, `EMAIL`, `MOBILE`, `TELEPHONE`, `ADDRESS`, `ADDRESS1`, `ADDRESS2`, `SPECIALIZATION`, `AVAILABLE`, `NOTES`, `REGISTRATION`) VALUES ('$name', '$surname','$email','$mob','$tel','$address','$address1','$address2','$spec','$avail','$notes',now())");  
	  	//echo "INSERT INTO `PROFESSIONALS`(`FIRSTNAME`, `LASTNAME`, `EMAIL`, `MOBILE`, `TELEPHONE`, `ADDRESS`, `ADDRESS1`, `ADDRESS2`, `SPECIALIZATION`, `AVAILABLE`, `NOTES`, `REGISTRATION`) VALUES ('$name', '$surname','$email','$mob','$tel','$address','$address1','$address2','$spec','$avail','$notes',now())";
	  	//echo "End";
	  }

	  function updateProfessional($name, $surname, $email, $mob, $tel, $address, $address1, $address2, $spec, $avail, $notes){
	  	$conn = initDB();
	  	//echo "in function"
	  	mysqli_query($conn,"UPDATE `PROFESSIONALS` SET `FIRSTNAME`='$name',`LASTNAME`='$surname',`MOBILE`='$mob',`TELEPHONE`='$tel',`ADDRESS`='$address',`ADDRESS1`='$address1',`ADDRESS2`='$address2',`SPECIALIZATION`='$spec',`AVAILABLE`='$avail',`NOTES`='$notes' WHERE `EMAIL`='$email' ");
	  	//echo "INSERT INTO `PROFESSIONALS`(`FIRSTNAME`, `LASTNAME`, `EMAIL`, `MOBILE`, `TELEPHONE`, `ADDRESS`, `ADDRESS1`, `ADDRESS2`, `SPECIALIZATION`, `AVAILABLE`, `NOTES`, `REGISTRATION`) VALUES ('$name', '$surname','$email','$mob','$tel','$address','$address1','$address2','$spec','$avail','$notes',now())";
	  	//echo "End";
	  }

	  function deleteProfessional($id){
	  	$conn = initDB();
	  	//echo "in function"
	  	mysqli_query($conn,"DELETE FROM `PROFESSIONALS` WHERE `PROF_ID`=$id ");
	  	deleteLocByProf($id);
	  	deleteCatByProf($id);
	  	//echo "INSERT INTO `PROFESSIONALS`(`FIRSTNAME`, `LASTNAME`, `EMAIL`, `MOBILE`, `TELEPHONE`, `ADDRESS`, `ADDRESS1`, `ADDRESS2`, `SPECIALIZATION`, `AVAILABLE`, `NOTES`, `REGISTRATION`) VALUES ('$name', '$surname','$email','$mob','$tel','$address','$address1','$address2','$spec','$avail','$notes',now())";
	  	//echo "End";
	  }

	  function insertProfLocation($email, $address1, $address2){
	  	$conn = initDB();
	  	//echo "in function";
	  	$result = mysqli_query($conn,"SELECT `PROF_ID` FROM `PROFESSIONALS` WHERE `EMAIL` = '$email' ");
		$row = mysqli_fetch_row($result);
	  	$id  = $row[0];
	  	mysqli_query($conn,"INSERT INTO `PROF_LOCATION`(`PROF_ID`, `LATITUDE`, `LONGTITUDE`, `STATE_ID`) VALUES ('$id', '$address1','$address2',0)");  
	  	//echo "INSERT INTO `PROFESSIONALS`(`FIRSTNAME`, `LASTNAME`, `EMAIL`, `MOBILE`, `TELEPHONE`, `ADDRESS`, `ADDRESS1`, `ADDRESS2`, `SPECIALIZATION`, `AVAILABLE`, `NOTES`, `REGISTRATION`) VALUES ('$name', '$surname','$email','$mob','$tel','$address','$address1','$address2','$spec','$avail','$notes',now())";
	  	//echo "End";
	  }

	  function updateProfLocation($email, $address1, $address2){
	  	$conn = initDB();
	  	//echo "in function";
	  	$result = mysqli_query($conn,"SELECT `PROF_ID` FROM `PROFESSIONALS` WHERE `EMAIL` = '$email' ");
		$row = mysqli_fetch_row($result);
	  	$id  = $row[0];
	  	mysqli_query($conn,"UPDATE `PROF_LOCATION` SET `LATITUDE`=$address1,`LONGTITUDE`=$address2 WHERE `PROF_ID`=$id ");  
	  	//echo "INSERT INTO `PROFESSIONALS`(`FIRSTNAME`, `LASTNAME`, `EMAIL`, `MOBILE`, `TELEPHONE`, `ADDRESS`, `ADDRESS1`, `ADDRESS2`, `SPECIALIZATION`, `AVAILABLE`, `NOTES`, `REGISTRATION`) VALUES ('$name', '$surname','$email','$mob','$tel','$address','$address1','$address2','$spec','$avail','$notes',now())";
	  	//echo "End";
	  }
	  function deleteLocByProf($id){
	  	$conn = initDB();
	  	mysqli_query($conn,"DELETE FROM `PROF_LOCATION` WHERE `PROF_ID`=$id");  
	  	//echo "INSERT INTO `PROFESSIONALS`(`FIRSTNAME`, `LASTNAME`, `EMAIL`, `MOBILE`, `TELEPHONE`, `ADDRESS`, `ADDRESS1`, `ADDRESS2`, `SPECIALIZATION`, `AVAILABLE`, `NOTES`, `REGISTRATION`) VALUES ('$name', '$surname','$email','$mob','$tel','$address','$address1','$address2','$spec','$avail','$notes',now())";
	  	//echo "End";
	  }

	  function insertProfCategory($email, $cat){
	  	$conn = initDB();
	  	//echo "in function";
	  	$result = mysqli_query($conn,"SELECT `PROF_ID` FROM `PROFESSIONALS` WHERE `EMAIL` = '$email' ");
		$row = mysqli_fetch_row($result);
	  	$id  = $row[0];
	  	mysqli_query($conn,"INSERT INTO `PROF_CAT`(`PROF_ID`, `CAT_ID`) VALUES ('$id', '$cat')");  
	  	//echo "INSERT INTO `PROFESSIONALS`(`FIRSTNAME`, `LASTNAME`, `EMAIL`, `MOBILE`, `TELEPHONE`, `ADDRESS`, `ADDRESS1`, `ADDRESS2`, `SPECIALIZATION`, `AVAILABLE`, `NOTES`, `REGISTRATION`) VALUES ('$name', '$surname','$email','$mob','$tel','$address','$address1','$address2','$spec','$avail','$notes',now())";
	  	//echo "End";
	  }

	  function updateProfCategory($email, $cat){
	  	$conn = initDB();
	  	//echo "in function";
	  	$result = mysqli_query($conn,"SELECT `PROF_ID` FROM `PROFESSIONALS` WHERE `EMAIL` = '$email' ");
		$row = mysqli_fetch_row($result);
	  	$id  = $row[0];
	  	mysqli_query($conn,"UPDATE `PROF_CAT` SET `CAT_ID`='$cat' WHERE `PROF_ID`='$id' ");  
	  	//echo "INSERT INTO `PROFESSIONALS`(`FIRSTNAME`, `LASTNAME`, `EMAIL`, `MOBILE`, `TELEPHONE`, `ADDRESS`, `ADDRESS1`, `ADDRESS2`, `SPECIALIZATION`, `AVAILABLE`, `NOTES`, `REGISTRATION`) VALUES ('$name', '$surname','$email','$mob','$tel','$address','$address1','$address2','$spec','$avail','$notes',now())";
	  	//echo "End";
	  }

	  function deleteCatByProf($id){
	  	$conn = initDB();
	  	mysqli_query($conn,"DELETE FROM `PROF_CAT` WHERE `PROF_ID`=$id");  
	  	//echo "INSERT INTO `PROFESSIONALS`(`FIRSTNAME`, `LASTNAME`, `EMAIL`, `MOBILE`, `TELEPHONE`, `ADDRESS`, `ADDRESS1`, `ADDRESS2`, `SPECIALIZATION`, `AVAILABLE`, `NOTES`, `REGISTRATION`) VALUES ('$name', '$surname','$email','$mob','$tel','$address','$address1','$address2','$spec','$avail','$notes',now())";
	  	//echo "End";
	  }

	  function addProfessionalCategory($profid, $catid){
	  	$conn = initDB();
	  	mysqli_query($conn,"INSERT INTO `PROF_CAT`(`PROF_ID`, `CAT_ID`) VALUES ($profid,$catid)");
	  }

	  function deleteProfessionalCategory($profid, $catid){
	  	$conn = initDB();
	  	mysqli_query($conn,"DELETE FROM `PROF_CAT` WHERE `PROF_ID`=$profid AND `CAT_ID`=$catid "); 
	  }

	  function retrieveAllProfessionals(){
	  	$conn = initDB();
	  	//echo "in function";

	  	$result = mysqli_query($conn,"SELECT * FROM `PROFESSIONALS`");
	  	
	  	return $result; 
	  	//echo "INSERT INTO `PROFESSIONALS`(`FIRSTNAME`, `LASTNAME`, `EMAIL`, `MOBILE`, `TELEPHONE`, `ADDRESS`, `ADDRESS1`, `ADDRESS2`, `SPECIALIZATION`, `AVAILABLE`, `NOTES`, `REGISTRATION`) VALUES ('$name', '$surname','$email','$mob','$tel','$address','$address1','$address2','$spec','$avail','$notes',now())";
	  	//echo "End";
	  }
	  function retrieveCategoryByProf($id){
	  	$conn = initDB();
	  	//echo "in function";
	  	$result = mysqli_query($conn,"SELECT * FROM `CATEGORIES` WHERE `CATEGORY_ID` IN (SELECT `CAT_ID` FROM `PROF_CAT` WHERE `PROF_ID`=$id) ");
	  	$row = mysqli_fetch_row($result);	
	  	return $row; 
	  	//echo "INSERT INTO `PROFESSIONALS`(`FIRSTNAME`, `LASTNAME`, `EMAIL`, `MOBILE`, `TELEPHONE`, `ADDRESS`, `ADDRESS1`, `ADDRESS2`, `SPECIALIZATION`, `AVAILABLE`, `NOTES`, `REGISTRATION`) VALUES ('$name', '$surname','$email','$mob','$tel','$address','$address1','$address2','$spec','$avail','$notes',now())";
	  	//echo "End";
	  }

	  function retrieveCategoriesByProf($id){
	  	$conn = initDB();
	  	//echo "in function";
	  	$result = mysqli_query($conn,"SELECT `CAT_LEVEL1`,`CAT_LEVEL2`, `CATEGORY_ID` FROM `CATEGORIES` WHERE `CATEGORY_ID` IN (SELECT `CAT_ID` FROM `PROF_CAT` WHERE `PROF_ID`=$id) ");
	  	//echo "INSERT INTO `PROFESSIONALS`(`FIRSTNAME`, `LASTNAME`, `EMAIL`, `MOBILE`, `TELEPHONE`, `ADDRESS`, `ADDRESS1`, `ADDRESS2`, `SPECIALIZATION`, `AVAILABLE`, `NOTES`, `REGISTRATION`) VALUES ('$name', '$surname','$email','$mob','$tel','$address','$address1','$address2','$spec','$avail','$notes',now())";
	  	//echo "End";
	  	return $result;
	  }

	  function retrieveCategoryLevel1(){
	  	$conn = initDB();
	  	//echo "in function";
	  	$result = mysqli_query($conn,"SELECT DISTINCT(`CAT_LEVEL1`) FROM `CATEGORIES`");	
	  	return $result; 
	  	//echo "INSERT INTO `PROFESSIONALS`(`FIRSTNAME`, `LASTNAME`, `EMAIL`, `MOBILE`, `TELEPHONE`, `ADDRESS`, `ADDRESS1`, `ADDRESS2`, `SPECIALIZATION`, `AVAILABLE`, `NOTES`, `REGISTRATION`) VALUES ('$name', '$surname','$email','$mob','$tel','$address','$address1','$address2','$spec','$avail','$notes',now())";
	  	//echo "End";
	  }
	  function retrieveCategoryLevel2($level1){
	  	$conn = initDB();
	  	//echo "in function";
	  	$result = mysqli_query($conn,"SELECT `CATEGORY_ID`,`CAT_LEVEL2` FROM `CATEGORIES` WHERE `CAT_LEVEL1`='$level1' ");	
	  	return $result; 
	  	//echo "INSERT INTO `PROFESSIONALS`(`FIRSTNAME`, `LASTNAME`, `EMAIL`, `MOBILE`, `TELEPHONE`, `ADDRESS`, `ADDRESS1`, `ADDRESS2`, `SPECIALIZATION`, `AVAILABLE`, `NOTES`, `REGISTRATION`) VALUES ('$name', '$surname','$email','$mob','$tel','$address','$address1','$address2','$spec','$avail','$notes',now())";
	  	//echo "End";
	  }
	  function getProfDetailsByID($id){
	  	$conn = initDB();
	  	$result = mysqli_query($conn,"SELECT * FROM `PROFESSIONALS` WHERE `PROF_ID`='".$id."'");
	  	//$row_cnt = mysqli_num_rows($result);
	  	$row = mysqli_fetch_row($result);
	  	//echo $row_cnt;
	  	return $row; 
	  	//echo "INSERT INTO `PROFESSIONALS`(`FIRSTNAME`, `LASTNAME`, `EMAIL`, `MOBILE`, `TELEPHONE`, `ADDRESS`, `ADDRESS1`, `ADDRESS2`, `SPECIALIZATION`, `AVAILABLE`, `NOTES`, `REGISTRATION`) VALUES ('$name', '$surname','$email','$mob','$tel','$address','$address1','$address2','$spec','$avail','$notes',now())";
	  	//echo "End";
	  }
	  
	  	 
?>