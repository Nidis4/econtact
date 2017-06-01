<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
//include 'mainfunctions.php';
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

    <title>e-contact.gr - Αίτηση συμμετοχής</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <!-- Custom styles for this template -->
    <link href="css/econtact.css?version=8" rel="stylesheet">
    <link href="css/carousel.css?version=10" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>

  <body>

<!--  <div class="logo">
    <a class="navbar-brand" href="#"><img src="images/logo.png" /></a>
  </div>-->

   
   <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
    <div class="row image-head landing">
  
    </div>

    <div class="container ">

      <div class="row">
        <div class="col-md-6">
         <h2 class="title">
          <img src="images/logo.png" width=200px />
         </h2>
         <h4> Ποιος επαγγελματίας θα ήθελε να εξοικονομεί ΧΡΟΝΟ, έχοντας ΠΕΛΑΤΕΣ κοντά στην περιοχή εργασίας του; </h4>
         <div class="row ">
            <ul>
              <li>Προσωρινά ΔΩΡΕΑΝ εγγραφή</li>
              <li>Μοναδική Ιστοσελίδα εξεύρεσης επαγγελματιών μέσω χάρτη</li>
              <li>Αναζήτηση επαγγελματία τοπικά στην περιοχή εργασίας του</li>
              <li>Ανάπτυξη πελατολογίου στην περιοχή εργασίας του επαγγελματία</li>
              <li>Ταχύτερη εξυπηρέτηση πελατών - εκμηδενισμός αποστάσεων</li>
              <li>Φιλοξενία μεγάλου φάσματος επαγγελμάτων</li>
            </ul>
      </div>
        </div>

        <div class="col-md-6">
          <div class="row">
            <h2 class="title">Θες να βρίσκεσαι εκεί που θα σε ψάξουν; <span class="text-muted">Μπες στο e-contact.gr</h2>
          </div>
          <div class="row">
            <h4 class="title">Δηλώσε συμμετοχή ΤΩΡΑ</h4>
          </div>
          <form class="form-horizontal" id="formProfessional" method="post" enctype="multipart/form-data" action="thankyou.php">
              <div class="form-group">
                <label for="inputfirstname" class="col-sm-3 control-label">Όνομα *</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="inputfirstname" name="inputfirstname" placeholder="Όνοματεπώνυμο" required>
                </div>
              </div>
              <div class="form-group">
                <label for="inputemail" class="col-sm-3 control-label">E-mail*</label>
                <div class="col-sm-9">
                  <input type="email" class="form-control" id="inputemail" name="inputemail" placeholder="E-mail" required>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9">
                  <button type="submit" class="btn btn-default" id="btn_submit">Αποστολή</button>
                </div>
              </div>
            </form>
        </div> 
      </div>
      

      <!-- Three columns of text below the carousel -->
      
      
      
      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading" style="margin-top: 40px;">Θες να βρίσκεσαι εκεί που θα σε ψάξουν; <span class="text-muted">Μπες στο e-contact.gr</span></h2>
          <p class="lead">Δηλώστε συμμετοχή και κάποιος συνεργάτης θα επικοινωνήσει άμεσα μαζί σας!</p>
          <div class="row" style="text-align: center;">
            <!--<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fecontactgr%2F&tabs=timeline&width=340&height=250&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=236621306414844" width="340" height="300" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>-->
          </div>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="images/services.png" alt="Generic placeholder image">
        </div>
      </div>


      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER 
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2016 e-contact.gr, Inc. &middot; <a href="#">Πολιτική απορρήτου</a> &middot; <a href="#">Όροι χρήσης</a></p>
      </footer>

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
