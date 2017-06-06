<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
include 'mainfunctions.php';
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

    <title>Γίνε μέλος - e-contact.gr</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <!-- Custom styles for this template -->
    <link href="css/econtact.css?version=4" rel="stylesheet">
    <link href="css/carousel.css?version=1" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>

  <body class="signup">

      <!-- HEADER -->
      <?php include 'header.php';?>


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
    <div class="row image-head">
  
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <h2>Γίνε μέλος</h2>
          </div>
          <div class="row">
            <h6><strong>Διαδικασία:</strong> Κάθε επαγγελματίας που ενδιαφέρεται να γίνει γνωστός στο ευρύ κοινό μέσω της σελίδας μας, θα υποβάλλει τα απαραίτητα προσωπικά στοιχεία που 
              αναφέρονται παρακάτω. Έτσι θα δημιουργείται ένα προσωπικό προφίλ δωρεάν. Από την άλλη ο εκάστοτε χρήστης θα επιλέγει την επαγγελματική κατηγορία 
              και θα του εμφανίζονται οι κοντινότεροι σχετικοί επαγγελματίες στην περιοχή που αναζητά. 
            </h6> 
          </div>
          <div class="row">
            <h6><strong>Τι χρειαζόμαστε:</strong> Τα συγκεκριμένα στοιχεία που πρέπει να υποβάλλει ο επαγγελματίας (συμπληρωμένα στα Ελληνικά) σε αυτή τη φόρμα 
              είναι: 
            </h6> 
          </div>
          <br><br>
          <div class="row">
            <div class="col-md-5">
              <ul>
                <li>Μοναδική Ιστοσελίδα εξεύρεσης επαγγελματιών μέσω χάρτη</li>
                <li>Αναζήτηση επαγγελματία τοπικά στην περιοχή εργασίας του</li>
                <li>Ανάπτυξη πελατολογίου στην περιοχή εργασίας του επαγγελματία</li>
                <li>Ταχύτερη εξυπηρέτηση πελατών - εκμηδενισμός αποστάσεων</li>
                <li>Φιλοξενία κάθε επαγγελματικής κατηγορίας </li>
                <li>Δημιουργία προσωπικού αυτόνομου προφίλ Επαγγελματία </li>
                <li>Προσωρινά δωρεάν εγγραφή.</li>
              </ul>
            </div>
            <div class="col-md-5">
              <form class="form-horizontal" id="formProfessional" method="post" enctype="multipart/form-data" action="postSignup.php">
                <div class="form-group">
                  <label for="inputfirstname" class="col-sm-2 control-label">Όνομα*</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputfirstname" name="inputfirstname" placeholder="Όνομα">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputlastname" class="col-sm-2 control-label">Επώνυμο*</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputlastname" name="inputlastname" placeholder="Επώνυμο">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputemail" class="col-sm-2 control-label">E-mail*</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputemail" name="inputemail" placeholder="E-mail">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputtelephone" class="col-sm-2 control-label">Τηλέφωνο</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputtelephone" name="inputtelephone" placeholder="Τηλέφωνο">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputaddress" class="col-sm-2 control-label">Διεύθυνση</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputaddress" name="inputaddress" placeholder="Διεύθυνση">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputps" class="col-sm-2 control-label">Τ.Κ.</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputps" name="inputps" placeholder="T.K.">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputspec" class="col-sm-2 control-label">Ειδίκευση</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputspec" name="inputspec" placeholder="Ειδίκευση">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default" id="btn_submit">Γίνε μέλος</button>
                  </div>
                </div>
              </form>

          </div>
        </div>

      </div>
    

<br><br>
      <!-- FOOTER -->
      <?php include 'footer.php';?>

    </div> <!-- container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/econtact.js?version=5"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
    <!-- <script src="js/gmap.js?version=8"></script> -->
    <script type="text/javascript">
    function validateForm() {
      var x = document.forms["formProfessional"]["inputfirstname"].value;
      if (x == null || x == "") {
        alert("Name must be filled out");
        return false;
      }
      var x = document.forms["formProfessional"]["inputlastname"].value;
      if (x == null || x == "") {
        alert("Last must be filled out");
        return false;
      }
      var x = document.forms["formProfessional"]["inputemail"].value;
      if (x == null || x == "") {
        alert("Email must be filled out");
        return false;
      }
      var x = document.forms["formProfessional"]["inputtelephone"].value;
      if (x == null || x == "") {
        alert("Telephone must be filled out");
        return false;
      }
      var x = document.forms["formProfessional"]["inputaddress"].value;
      if (x == null || x == "") {
        alert("Address must be filled out");
        return false;
      }
      var x = document.forms["formProfessional"]["inputps"].value;
      if (x == null || x == "") {
        alert("PS must be filled out");
        return false;
      }
      var x = document.forms["formProfessional"]["inputspec"].value;
      if (x == null || x == "") {
        alert("Spec must be filled out");
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
            $.post("postSignup.php",$(this).serialize(),function(data){
                //alert(data); //post check to show that the mysql string is the same as submit  
                alert("H αίτηση σας καταχωρήθηκε!");
                //window.location="http://www.tutorialspoint.com";
                $('#formProfessional')[0].reset();                      
            });
            return false; // return false to stop the page submitting. You could have the form action set to the same PHP page so if people dont have JS on they can still use the form
            }
            else{
              return false;
            }
        });

    });
    </script>
  </body>
</html>
