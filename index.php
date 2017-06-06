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
    <link href="css/econtact.css?version=6" rel="stylesheet">
    <link href="css/carousel.css?version=11" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>

  <body>
  <div class="logo">
    <a class="navbar-brand" href="/"><img src="images/logo.png" /></a>
  </div>


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <!--<li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>-->
      </ol>
      <div class="carousel-inner" role="listbox">
        <!--<div class="item ">
          <img class="first-slide" src="images/services_marketing.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Βρες αυτό που ψάχνεις.</h1>
              <p>Απλά, εύκολα και γρήγορα.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Αναζητήστε</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="images/becomemember.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Μοναδική ευκαιρία!</h1>
              <p>Μπείτε κι εσείς στην μεγαλύτερη επαγγελματική συνοικία</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Δήλωσε συμμετοχή</a></p>
            </div>
          </div>
        </div>-->
        <div class="item active">
          <img class="third-slide" src="images/map_slider.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <!--<h1>Μοναδική ευκαιρία!</h1>
              <p>Μπείτε κι εσείς στην μεγαλύτερη επαγγελματική συνοικία</p>
              <p><a class="btn btn-lg btn-primary" href="signup.php" role="button">Δήλωσε συμμετοχή</a></p>-->
            </div>
          </div>
        </div>
        
      </div>
     <!--<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>-->
    </div><!-- /.carousel -->


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">
      
      <div class="row">
        <div class="col-md-4">
          <div class="img-options">
            <a href="http://gpoulimenakos.e-contact.gr "><img src="images/mission_serv.png" /></a>
          </div>
          <h4>Εταιρία</h4>
        </div>
        <div class="col-md-4">
          <div class="img-options">
            <a href="contact.php"><img src="images/contact_serv.png" /></a>
          </div>
          <h4>Επικοινωνία</h4>
        </div>
        <div class="col-md-4">
          <div class="img-options">
            <a href="signup.php"><img src="images/sign-up_serv.png" /></a>
          </div>
          <h4>Γίνε μέλος</h4>
        </div>
      </div>

      <div class="row">
        <h2 class="title">Διαλέξτε Νομό</h2>
      </div>
      
      <div class="row stateselect">
        <select id="state" onchange="initMap();">
          <option value="Atticaa">Διαλέξτε Νομό</option>
          <option value="Attica">Νομός Αττικής</option>
        </select>
      </div>

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <h2 class="title">Διαλέξτε Κατηγορία</h2>
      </div>
      
      <div class="row">
        <div class="col-md-3 beauty">
        <a href="#secService">
          <img class="img-circle" src="images/beauty.png" alt="Ομορφιά" width="140" height="140">
          <h3>Ομορφιά</h3>
          <!--<p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>-->
          <!--<p><a class="btn btn-default" href="#secService" role="button">View  &raquo;</a></p>-->
          </a>
        </div><!-- /.col-lg-4 -->
        <div class="col-md-3 construction" >
        <a href="#secService">
          <img class="img-circle" src="images/construction.png" alt="Construction" width="140" height="140" >
          <h3>Τεχνίτες</h3>
          <!--<p><a class="btn btn-default" href="#secService" role="button">View  &raquo;</a></p>-->
          </a>
        </div><!-- /.col-lg-4 -->
        <div class="col-md-3 entertainment">
        <a href="#secService">
          <img class="img-circle" src="images/entertainment.png" alt="Generic placeholder image" width="140" height="140" >
          <h3>Διασκέδαση</h3>
          <!--<p><a class="btn btn-default" href="#secService" role="button">View  &raquo;</a></p>-->
        </div><!-- /.col-lg-4 -->
        <div class="col-md-3 freelancer">
        <a href="#secService">
          <img class="img-circle" src="images/free_lancer.png" alt="Generic placeholder image" width="140" height="140" >
          <h3>Freelancer</h3>
          <!--<p><a class="btn btn-default" href="#secService" role="button">View  &raquo;</a></p>-->
        </div><!-- /.col-lg-4 -->
      </div>
      <div class="row">
        <div class="col-md-3 houseneeds">
        <a href="#secService">
          <img class="img-circle" src="images/house_needs.png" alt="Generic placeholder image" width="140" height="140">
          <h3>Οικογενειακές Ανάγκες</h3>
          <!--<p><a class="btn btn-default" href="#secService" role="button">View  &raquo;</a></p>-->
        </div><!-- /.col-lg-4 -->
        <div class="col-md-3 study">
        <a href="#secService">
          <img class="img-circle" src="images/study.png" alt="Generic placeholder image" width="140" height="140" >
          <h3>Διδασκαλία</h3>
          <!--<p><a class="btn btn-default" href="#secService" role="button">View  &raquo;</a></p>-->
        </div><!-- /.col-lg-4 -->
        <div class="col-md-3 technology">
        <a href="#secService">
          <img class="img-circle" src="images/technology.png" alt="Generic placeholder image" width="140" height="140" >
          <h3>Τεχνολογία</h3>
          <!--<p><a class="btn btn-default" href="#secService" role="button">View  &raquo;</a></p>-->
          </a>
        </div><!-- /.col-lg-4 -->
        <div class="col-md-3 doctor">
        <a href="#secService">
          <img class="img-circle" src="images/medical.png" alt="Generic placeholder image" width="140" height="140" >
          <h3>Γιατροί</h3>
          <!--<p><a class="btn btn-default" href="#secService" role="button">View  &raquo;</a></p>-->
          </a>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->

      <div id="secService">
        <div class="row">
          <h2 class="title">Διαλέξτε Υπηρεσία</h2>
        </div>
        
        <div id="beauty">
          <div class="row">
          <?php
            $result = retrieveCategories("ΟΜΟΡΦΙΑ ΚΑΙ ΕΥΕΞΙΑ");
            while ($row = mysqli_fetch_row($result)) {
              echo "<div class='col-md-3'>";
              echo "<a href='mapfinder.php?cat=$row[0]'>".$row[2]."</a>";
              echo "</div>";
            }  
          ?>
          </div>
        </div>
        <div id="study">
          <div class="row">
          <?php
            $result = retrieveCategories("ΔΙΔΑΣΚΑΛΙΑ - ΕΚΠΑΙΔΕΥΣΗ");
            while ($row = mysqli_fetch_row($result)) {
              echo "<div class='col-md-3'>";
              echo "<a href='mapfinder.php?cat=$row[0]'>".$row[2]."</a>";
              echo "</div>";
            }  
          ?>
          </div>
        </div>
        <div id="construction">
          <div class="row">
          <?php
            $result = retrieveCategories("ΕΠΙΣΚΕΥΕΣ, ΚΑΤΑΣΚΕΥΕΣ ΚΑΙ ΑΝΑΚΑΙΝΙΣΕΙΣ ΧΩΡΩΝ");
            while ($row = mysqli_fetch_row($result)) {
              echo "<div class='col-md-3'>";
              echo "<a href='mapfinder.php?cat=$row[0]'>".$row[2]."</a>";
              echo "</div>";
            }  
          ?>
          </div>
        </div>
        <div id="entertainment">
          <div class="row">
          <?php
            $result = retrieveCategories("ΨΥΧΑΓΩΓΙΑ - ΔΙΑΣΚΕΔΑΣΗ");
            while ($row = mysqli_fetch_row($result)) {
              echo "<div class='col-md-3'>";
              echo "<a href='mapfinder.php?cat=$row[0]'>".$row[2]."</a>";
              echo "</div>";
            }  
          ?>
          </div>
        </div>
        <div id="houseneeds">
          <div class="row">
          <?php
            $result = retrieveCategories("ΑΝΑΓΚΕΣ ΣΠΙΤΙΟΥ");
            while ($row = mysqli_fetch_row($result)) {
              echo "<div class='col-md-3'>";
              echo "<a href='mapfinder.php?cat=$row[0]'>".$row[2]."</a>";
              echo "</div>";
            }  
          ?>
          </div>
        </div>
        <div id="freelancer">
          <div class="row">
          <?php
            $result = retrieveCategories("ΕΛΕΥΘΕΡΟΣ ΕΠΑΓΓΕΛΜΑΤΙΑΣ");
            while ($row = mysqli_fetch_row($result)) {
              echo "<div class='col-md-3'>";
              echo "<a href='mapfinder.php?cat=$row[0]'>".$row[2]."</a>";
              echo "</div>";
            }  
          ?>
          </div>
        </div>
          <div id="technology">
            <div class="row">
          <?php
            $result = retrieveCategories("ΤΕΧΝΟΛΟΓΙΑ");
            while ($row = mysqli_fetch_row($result)) {
              echo "<div class='col-md-3'>";
              echo "<a href='mapfinder.php?cat=$row[0]'>".$row[2]."</a>";
              echo "</div>";
            }  
          ?>
            </div>
          </div>
          <div id="medical">
            <div class="row">
          <?php
            $result = retrieveCategories("ΓΙΑΤΡΟΙ");
            while ($row = mysqli_fetch_row($result)) {
              echo "<div class='col-md-3'>";
              echo "<a href='mapfinder.php?cat=$row[0]'>".$row[2]."</a>";
              echo "</div>";
            }  
          ?>
            </div>
          </div>
        
      </div> <!-- secService -->

      <!-- START THE FEATURETTES -->

      <!--<hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Γρήγορα, οικονομικά, αποτελεσματικά. <span class="text-muted">Αναζητήστε τον ειδικό.</span></h2>
          <p class="lead">Μπορείτε να βρείτε ακριβώς την υπηρεσία που ψάχνετε για τα καλύτερα αποτελέσματα.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
      </div>


      <hr class="featurette-divider"> -->

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <?php include 'footer.php';?>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/econtact.js?version=7"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
