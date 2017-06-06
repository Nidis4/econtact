<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
include 'mainfunctions.php';
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
  $notes = $prof[11];
  $member = $prof[12];
}
else{
  $id=0;
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

    <title><?php echo $firstname." ".$lastname ?> - Προφίλ Επαγγελματία - e-contact.gr</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <!-- Custom styles for this template -->
    <link href="css/econtact.css?version=2" rel="stylesheet">
    <link href="css/carousel.css?version=1" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>

  <body class="profile">

  <!-- HEADER -->
  <?php include 'header.php';?>


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
    <div class="row image-head">
  
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <div class="row">
            <h2><?php echo $firstname." ".$lastname; ?></h2>
          </div>
          <div class="row">
            <h6><strong>Ειδικότητα: </strong><?php echo $spec; ?></h6> 
          </div>
          <div class="row">
            <h6><strong>Κύριο Τηλέφωνο: </strong><?php echo $telephone; ?></h6> 
          </div>
          <div class="row">
            <h6><strong>Δευτερεύον Τηλέφωνο: </strong><?php echo $mobile; ?></h6> 
          </div>
          <div class="row">
            <h6><strong>E-mail: </strong><?php echo $email; ?></h6>
          </div>
          <div class="row">
            <h6><strong>Πληροφορίες: </strong> <?php echo $notes; ?> </h6>
          </div>
        </div>
        <div class="col-md-5">
          <div class="row" id="map">
          </div><!-- /.row -->
        </div>
      </div>
    

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
    <script>
    function initMap() {
      var bounds = new google.maps.LatLngBounds();

      lat1=38.038;
      lgn1=23.830;
      

      var zoom1=11;

      
      var myLatLng = {lat: lat1, lng: lgn1};
      var map = new google.maps.Map(document.getElementById('map'), {
                  zoom: zoom1,
                  center: myLatLng,
                  scrollwheel:false,
                  icon:'http://econtact.digiverse.gr/images/logo.png',
                  styles: [
                          {
                            featureType: 'all',
                            stylers: [
                              { saturation: -80 }
                            ]
                          },{
                            featureType: 'road.arterial',
                            elementType: 'geometry',
                            stylers: [
                              { hue: '#00ffee' },
                              { saturation: 50 }
                            ]
                          },{
                            featureType: 'poi.business',
                            elementType: 'labels',
                            stylers: [
                              { visibility: 'off' }
                            ]
                          }
                        ]
      });

      // Multiple Markers
      var markers = [
        <?php
              echo "['London Eye, London', $lati, $long],";
            
        ?>
      ];

      // Info Window Content
    var infoWindowContent = [
        <?php
              echo "[\"<div class='info_content'><h3>$firstname</h3> <a href='https://www.google.gr/maps/dir//$lati,$long/@$lati,$long,15z' target='_blank'>Οδηγίες </a></div>\"],";
        ?>
    ];

    // Display multiple markers on a map
    var infoWindow = new google.maps.InfoWindow(), marker, i;
    
    // Loop through our array of markers & place each one on the map  
    for( i = 0; i < markers.length; i++ ) {
        var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
        bounds.extend(position);
        marker = new google.maps.Marker({
            position: position,
            map: map,
            icon:'http://econtact.digiverse.gr/images/poi.png',
            title: markers[i][0]
        });
        
        // Allow each marker to have an info window    
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
                infoWindow.setContent(infoWindowContent[i][0]);
                infoWindow.open(map, marker);
            }
        })(marker, i));

        // Automatically center the map fitting all markers on the screen
        map.fitBounds(bounds);
    }

    // Override our map zoom level once our fitBounds function runs (Make sure it only runs once)
    var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
        this.setZoom(11);
        google.maps.event.removeListener(boundsListener);
    });

      
  
}
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCKtPqegEeDcVyi0UO6sCa8lsAoWDc8vLU&callback=initMap&language=en&region=EN"
    async defer></script>
  </body>
</html>
