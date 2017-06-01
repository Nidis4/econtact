<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
      include '../functions.php';
if ( isset( $_GET['id'] ) && !empty( $_GET['id'] ) ){
  $id = $_GET['id'];
  $prof = getProfDetailsByID($id);
  $firstname = $prof[1];
  $lastname = $prof[2];
  $email = $prof[3];
  $mobile = $prof[4];
  $telephone = $prof[5];
  $address = $prof[6];
  $lati = $prof[7];
  $long = $prof[8];
  $spec =$prof[9];
  $avail = $prof[10];
  $notes = $prof[11];
  $member = $prof[12];
  
  $categories = retrieveCategoryByProf($id); 
  $cat1 = $categories[1];
  $cat2 = $categories[2];
}
else{
  $id=0;
}
?>
<?php
      if (!isset($_SESSION['user'])){
        //session_start();
        //$_SESSION['name']='Bob';
        header("Location: http://econtact.digiverse.gr/digi-platform/");
        die();
      }

    ?>
<!DOCTYPE html>
<html lang="el">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>e-contact.gr Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../css/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">e-contact.gr</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Help</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a href="../dashboard.php">Overview <span class="sr-only">(current)</span></a></li>
            <li><a href="index.php">Professionals</a></li>
            <li><a href="../insProf.php">Insert Professional</a></li>
            <li class="active"><a href="#">Edit Professional</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">Insert Categories</a></li>
            <li><a href="">Edit Categories</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">Something Else</a></li>
            <li><a href="">Something Else</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Edit Professional</h1>

          <div class="row">
			<form class="form-horizontal" id="formProfessional" method="post" enctype="multipart/form-data" action="updateProf.php">
			  <div class="form-group">
  				<label for="inputfirstname" class="col-sm-2 control-label">Όνομα</label>
  				<div class="col-sm-10">
  				  <input type="text" class="form-control" id="inputfirstname" name="inputfirstname" placeholder="Όνομα" value="<?php echo $firstname ?>">
  				</div>
			  </div>
        <div class="form-group">
          <label for="inputlastname" class="col-sm-2 control-label">Επίθετο</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputlastname" name="inputlastname" placeholder="Επίθετο" value="<?php echo $lastname ?>">
          </div>
        </div>
        <div class="form-group">
          <label for="inputemail" class="col-sm-2 control-label">E-mail</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputemail" name="inputemail" placeholder="E-mail" value="<?php echo $email ?>">
          </div>
        </div>
        <div class="form-group">
          <label for="inputMobile" class="col-sm-2 control-label">Κινητό</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputMobile" name="inputMobile" placeholder="Κινητό" value="<?php echo $mobile ?>">
          </div>
        </div>
        <div class="form-group">
          <label for="inputtelephone" class="col-sm-2 control-label">Τηλέφωνο</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputtelephone" name="inputtelephone" placeholder="Τηλέφωνο" value="<?php echo $telephone ?>">
          </div>
        </div>
        <div class="form-group">
          <label for="inputaddress" class="col-sm-2 control-label">Διεύθυνση</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputaddress" name="inputaddress" placeholder="Διεύθυνση" value="<?php echo $address ?>">
          </div>
        </div>
        <div class="form-group">
          <label for="inputaddress1" class="col-sm-2 control-label">Latitude</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputaddress1" name="inputaddress1" placeholder="Διεύθυνση" value="<?php echo $lati ?>">
          </div>
        </div>
        <div class="form-group">
          <label for="inputaddress2" class="col-sm-2 control-label">Longtitude</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputaddress2" name="inputaddress2" placeholder="Διεύθυνση" value="<?php echo $long ?>">
          </div>
        </div>
        <div class="form-group">
          <label for="inputspec" class="col-sm-2 control-label">Ειδίκευση</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputspec" name="inputspec" placeholder="Ειδίκευση" value="<?php echo $spec ?>">
          </div>
        </div>
        <div class="form-group">
          <label for="inputcat1" class="col-sm-2 control-label">Κατηγορία</label>
          <div class="col-sm-10">
            <a href ="editCategory.php?id=<?php echo $id;?>"> Edit Category</a>
          </div>
        </div>
        <!--<div class="form-group">
          <label for="inputcat1" class="col-sm-2 control-label">Κατηγορία</label>
          <div class="col-sm-10 cat1">
            <select name ="inputcat1">
              <option value="" disabled>Επιλέξτε Κατηγορία</option>
              <?php
                  $result = retrieveCategoryLevel1();
                  while ($row = mysqli_fetch_row($result)) {
                    if ($cat1==$row[0]){
                      echo "<option value='$row[0]' selected>".$row[0]."</option>";
                    }
                    else{
                      echo "<option value='$row[0]'>".$row[0]."</option>";
                    }
                   }
              ?>
            </select>
          </div>
        </div>
        <div class="form-group cat2">
          <label for="inputcat2" class="col-sm-2 control-label">Υπο-Κατηγορία</label>
          <div class="col-sm-10 ">
            <select name ="inputcat2" value="<?php echo $cat2 ?>">
               <?php echo "<option value='$cat2'>".$cat2."</option>"; ?>
              
            </select>
          </div>
        </div>-->
        <div class="form-group">
          <label for="inputavail" class="col-sm-2 control-label">Διαθεσιμότητα</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputavail" name="inputavail" placeholder="Διαθεσιμότητα" value="<?php echo $avail ?>">
          </div>
        </div>
			  <div class="form-group">
				<label for="inputnotes" class="col-sm-2 control-label">Περιγραφή</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" id="inputnotes" name="inputnotes" placeholder="Περιγραφή" value="<?php echo $notes ?>">
				</div>
			  </div>

			  <div class="form-group">
  				<div class="col-sm-offset-2 col-sm-4">
  				  <button type="submit" class="btn btn-default btn-primary" id="btn_submit">Ανανέωση</button>
  				</div>
          <div class="col-sm-offset-2 col-sm-4">
            <input type="text" class="btn btn-default delete_class btn-danger" id="prof<?php echo $id ?>" value="Διαγραφή" />
          </div>
			  </div>
			</form>
		  </div>

          
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../assets/js/ie10-viewport-bug-workaround.js"></script>

    <script type="text/javascript">
    function validateForm() {
      var x = document.forms["formProfessional"]["inputfirstname"].value;
      if (x == null || x == "") {
        alert("Name must be filled out");
        return false;
      }
      var x = document.forms["formProfessional"]["inputlastname"].value;
      if (x == null || x == "") {
        alert("Lastname must be filled out");
        return false;
      }
      var x = document.forms["formProfessional"]["inputemail"].value;
      if (x == null || x == "") {
        alert("Email must be filled out");
        return false;
      }

      //var x = document.forms["formProfessional"]["inputcat1"].value;
      //if (x == null || x == "") {
      //  alert("Category must be filled out");
      //  return false;
      //}
      //var x = document.forms["formProfessional"]["inputcat2"].value;
      //if (x == null || x == "") {
      //  alert("Categories must be filled out");
      //  return false;
      //}

      var x = document.forms["formProfessional"]["inputaddress"].value;
      var y = document.forms["formProfessional"]["inputaddress1"].value;
      var z = document.forms["formProfessional"]["inputaddress2"].value;
      if (x == null || x == "") {
        if (y == null || y == "" || z == "" || z == "") {
          alert("Address must be filled out");
          return false;
        }
      }
      var x = document.forms["formProfessional"]["inputspec"].value;
      if (x == null || x == "") {
        alert("Specilization must be filled out");
        return false;
      }
      return true;
    }
    </script>

    <script>
    $(document).ready(function() {
        $('form').submit(function(msg) {

            if (validateForm()==true){  
            //alert($(this).serialize()); // check to show that all form data is being submitted
            $.post("updateProf.php",$(this).serialize(),function(data){
                //alert(data); //post check to show that the mysql string is the same as submit  
                alert("Η ανανέωση ολοκληρώθηκε!");
                window.location="http://econtact.digiverse.gr/digi-platform/professional/";
                //$('#formProfessional')[0].reset();                      
            });
            return false; // return false to stop the page submitting. You could have the form action set to the same PHP page so if people dont have JS on they can still use the form
            }
            else{
              return false;
            }
        });

    });
    </script>
    <script>
    $(document).ready(function(){
      $(".delete_class").click(function(){
        var r = confirm("Είστε σίγουροι;");
        if (r == true) {
            var del_id = $(this).attr('id');
            var profid = del_id.substring(4);
                 //alert(profid);
            $.ajax({
              type:'POST',
              url:'deleteProf.php',
              data:'delete_id='+profid,
              success:function(data) {
                if(data) {   
                  //alert(data);
                  window.location="http://econtact.digiverse.gr/digi-platform/professional/";
                } 
                else { alert("Η Διαγραφή δεν ολοκληρώθηκε!");
                }
              }
            });
        } 
        else {
            
        } 

         
      });
  });
    </script>
    <!-- <script>
      $('.cat1 select').on('change', function() {
        //alert( this.value ); // or $(this).val()
        var cat1 = this.value;
        $('.cat2').show();
        $.post( "../postCat2.php", { catlevel1: cat1 })
  .done(function( data ) {
    //alert( "Data Loaded: " + data );
    //alert (cat1);
    $('.cat2 select').html(data);
  });
      });
    </script>-->

  </body>
</html>
