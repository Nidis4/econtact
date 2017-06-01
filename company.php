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

    <title>e-contact.gr Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <!-- Custom styles for this template -->
    <link href="css/econtact.css?version=7" rel="stylesheet">
    <link href="css/carousel.css?version=4" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>

  <body>

  <!-- HEADER -->
  <?php include 'header.php';?>

   
   <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
    <div class="row image-head company">
  
    </div>

    <div class="container marketing">

      <div class="row">
        <h2 class="title">H Εταιρία </h2>
      </div>
      
      <div class="row ">
        Το όραμα της εταιρίας είναι η διαφήμιση επαγγελματιών τοπικά, στην περιοχή μόνιμης κατοικίας ή εργασίας τους, με σκοπό να αποφεύγονται μακρινές διαδρομές 
        και επομένως να εξοικονομείται πολύτιμος χρόνος. Αυτό θα ωφελεί ταυτόχρονα τους επαγγελματίες μας και τους ενδιαφερόμενους των. <br><br>

  Από την πλευρά των ενδιαφερόμενων, το όραμα μας έγκειται στο να μπορούν να βρουν τον επαγγελματία που χρειάζονται για οποιονδήποτε σκοπό άμεσα, 
  γρήγορα και αποτελεσματικά. Να μπορούν δηλαδή να ανακαλύψουν επαγγελματίες που ενδεχομένως κατοικούν ή εργάζονται κοντά τους και δεν τους γνωρίζουν. 
  Κατ΄ αυτόν τον τρόπο επιτυγχάνεται η έγκαιρη και βέλτιστη παροχή υπηρεσιών. 

      </div>

      <!-- Three columns of text below the carousel -->
      
      <br><br>


      <!-- FOOTER -->
      <?php include 'footer.php';?>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/econtact.js?version=6"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
