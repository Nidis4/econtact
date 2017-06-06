<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
include 'mainfunctions.php';
if ( isset( $_GET['cat'] ) && !empty( $_GET['cat'] ) ){
  $cat = $_GET['cat'];
  $imgURL = getCategoryImage($cat);
}
else{
  $cat=0;
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

    <title>Χάρτης - e-contact.gr</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <!-- Custom styles for this template -->
    <link href="css/econtact.css?version=10" rel="stylesheet">
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
    <div class="row" style="text-align: center; margin-bottom:30px">
      <img src="images/categories/<?php echo $imgURL;?>.png" />
        
    </div>
    
    <div class="container maps">


      <!-- Three columns of text below the carousel -->
      
      
      <div class="row" id="map">
        
      </div><!-- /.row -->

      


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
            $result = retrieveMarkers($cat);
            while ($row = mysqli_fetch_row($result)) {
              $long = $row[3];
              $lati =   $row[2];
              echo "['London Eye, London', $lati, $long],";
            }  
        ?>
      ];

      // Info Window Content
    var infoWindowContent = [
        <?php
        $result = retrieveMarkers($cat);
        while ($row = mysqli_fetch_row($result)) {
              $contr_id = $row[1];
              $name = getProfNameByID($row[1]);
              echo "[\"<div class='info_content'><h3><a href='profile.php?id=$contr_id'>$name</a></h3></div>\"],";
            }
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
