function initMap() {
      alert("initMap");
      var contentString1 = '<b><p style="font-size:16px;">Αττική</p></b>';
      var contentString2 = '<b><p style="font-size:16px;">Αττική</p></b>';
      var contentString3 = '<b><p style="font-size:16px;">Αττική</p></b>';

      var arraymaps=[];
      arraymaps.push(
        {"latitude": 38.038, "longitude": 23.830, "infoContent": contentString1}, 
        {"latitude": 37.9928429, "longitude": 23.5718508, "infoContent": contentString1},//Νομός Αττικής
                  {"latitude": 38.3668362, "longitude": 22.8510406, "infoContent": contentString2},//Νομός Βοιωτίας 
                  {"latitude": 35.1771512, "longitude": 24.9604213, "infoContent":contentString3}//Νομός Ηρακλείου

      );

      var index=document.getElementById("state").selectedIndex;
      lat1=arraymaps[index].latitude;
      lgn1=arraymaps[index].longitude;
      var contentString=arraymaps[index].infoContent;

      var zoom1;

      if(index==0){
            zoom1=5;
            //document.getElementById('map').style.display = "none";

      }else{
            zoom1=10;
      //document.getElementById('map').style.display = "block";
      }
      
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

      if(index!=0){
            var infowindow = new google.maps.InfoWindow({
                  content: contentString
            });
                      
            var marker = new google.maps.Marker({
                      position: myLatLng,
                      map: map,
                      scrollwheel:false,
                      icon:'http://econtact.digiverse.gr/images/poi.png',
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
                  
            marker.addListener('click', function() {
            infowindow.open(map, marker);
            });

            infowindow.open(map, marker);
            //map.disableScrollWheelZoom();

      } // if index!=0
}