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
	  	//echo "in function";
	  	mysqli_query($conn,"INSERT INTO `PROFESSIONALS`(`FIRSTNAME`, `LASTNAME`, `EMAIL`, `MOBILE`, `TELEPHONE`, `ADDRESS`, `ADDRESS1`, `ADDRESS2`, `SPECIALIZATION`, `AVAILABLE`, `NOTES`, `REGISTRATION`) VALUES ('$name', '$surname','$email','$mob','$tel','$address','$address1','$address2','$spec','$avail','$notes',now())");  
	  	//echo "INSERT INTO `PROFESSIONALS`(`FIRSTNAME`, `LASTNAME`, `EMAIL`, `MOBILE`, `TELEPHONE`, `ADDRESS`, `ADDRESS1`, `ADDRESS2`, `SPECIALIZATION`, `AVAILABLE`, `NOTES`, `REGISTRATION`) VALUES ('$name', '$surname','$email','$mob','$tel','$address','$address1','$address2','$spec','$avail','$notes',now())";
	  	//echo "End";
	  }

	  function retrieveCategories($category){
	  	$conn = initDB();

	  	//echo "in function: ".$category;
	  	$query = "SELECT * FROM `CATEGORIES` WHERE `CAT_LEVEL1`='".$category."'";
	  	//echo $query;

	  	$result = mysqli_query($conn,"SELECT * FROM `CATEGORIES` WHERE `CAT_LEVEL1`='".$category."' AND `DISPLAY`=1 ORDER BY `CAT_LEVEL2`");
	  	//$row_cnt = mysqli_num_rows($result);

	  	//echo $row_cnt;
	  	return $result; 
	  	//echo "INSERT INTO `PROFESSIONALS`(`FIRSTNAME`, `LASTNAME`, `EMAIL`, `MOBILE`, `TELEPHONE`, `ADDRESS`, `ADDRESS1`, `ADDRESS2`, `SPECIALIZATION`, `AVAILABLE`, `NOTES`, `REGISTRATION`) VALUES ('$name', '$surname','$email','$mob','$tel','$address','$address1','$address2','$spec','$avail','$notes',now())";
	  	//echo "End";
	  }
	  function getCategoryImage($cat){
	  	$conn = initDB();

	  	//echo "in function: ".$category;
	  	$query = "SELECT `IMAGE_NAME` FROM `CATEGORIES` WHERE `CATEGORY_ID`='".$cat."'";
	  	//echo $query;

	  	$result = mysqli_query($conn,"SELECT `IMAGE_NAME` FROM `CATEGORIES` WHERE `CATEGORY_ID`='".$cat."'");
	  	//$row_cnt = mysqli_num_rows($result);
	  	$row = mysqli_fetch_row($result);
	  	//echo $row_cnt;
	  	return $row[0];
	  	//echo "INSERT INTO `PROFESSIONALS`(`FIRSTNAME`, `LASTNAME`, `EMAIL`, `MOBILE`, `TELEPHONE`, `ADDRESS`, `ADDRESS1`, `ADDRESS2`, `SPECIALIZATION`, `AVAILABLE`, `NOTES`, `REGISTRATION`) VALUES ('$name', '$surname','$email','$mob','$tel','$address','$address1','$address2','$spec','$avail','$notes',now())";
	  	//echo "End";
	  }
	   function getProfNameByID($id){
	  	$conn = initDB();

	  	//echo "in function: ".$category;
	  	$query = "SELECT `FIRSTNAME`, `LASTNAME` FROM `PROFESSIONALS` WHERE `PROF_ID`='".$id."'";
	  	//echo $query;

	  	$result = mysqli_query($conn,"SELECT `FIRSTNAME`, `LASTNAME` FROM `PROFESSIONALS` WHERE `PROF_ID`='".$id."'");
	  	//$row_cnt = mysqli_num_rows($result);
	  	$row = mysqli_fetch_row($result);
	  	//echo $row_cnt;
	  	return $row[0]." ".$row[1]; 
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

	  function retrieveMarkers($cat){
	  	$conn = initDB();


	  	//echo "in function: ".$category;
	  	$query = "SELECT `LATITUDE`,`LONGTITUDE` FROM `PROF_LOCATION` ORDER BY `LOC_ID` ";
	  	//echo $query;
	  	if ($cat == 0){
	  		$result = mysqli_query($conn,"SELECT * FROM `PROF_LOCATION` ORDER BY `LOC_ID`");
	  	}
	  	else{
	  		$result = mysqli_query($conn,"SELECT * FROM `PROF_LOCATION` WHERE `PROF_ID` IN (SELECT `PROF_ID` FROM `PROF_CAT` WHERE `CAT_ID`=$cat) ORDER BY `LOC_ID`");
	  	}
	  	//$row_cnt = mysqli_num_rows($result);
	  	//echo $row_cnt;
	  	return $result; 
	  	//echo "INSERT INTO `PROFESSIONALS`(`FIRSTNAME`, `LASTNAME`, `EMAIL`, `MOBILE`, `TELEPHONE`, `ADDRESS`, `ADDRESS1`, `ADDRESS2`, `SPECIALIZATION`, `AVAILABLE`, `NOTES`, `REGISTRATION`) VALUES ('$name', '$surname','$email','$mob','$tel','$address','$address1','$address2','$spec','$avail','$notes',now())";
	  	//echo "End";
	  }
	  
	  	 
?>