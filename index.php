
    <?php
    $path = "";
    include "header.php";
    ?>
<script src="http://maps.google.com/maps/api/js?key=AIzaSyBBIDRWIkjHUNShIZYVSaBmiCqGeyVjlWE"
          type="text/javascript"></script>
          <div style="padding:2%">
<center><h2>EXHIBITIONS AROUND YOU</h2></center>
</div>
  <div id="map" style="width: 100%; height: 600px;"></div>


  <script type="text/javascript">



    var locations = [
      ['Jaipur Exhibition', 26.922070, 75.778885, 4],
      ['Handicrafts ASIA 2018', 26.4499, 74.6399, 5],
      ['EXPO 2018', 26.49061, 74.55419, 3],
      ['Delhi Handicrafts', 28.644800, 77.046051	, 2],
      ['Udhyog 2017', 10.0889, 77.0595, 1]
    ];
/*
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 5,
      center: new google.maps.LatLng(21.146633, 79.088860),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });
*/
  // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

            infoWindow.setPosition(pos);
            infoWindow.setContent('Location found.');
            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }

    var map = new google.maps.Map(document.getElementById('map'), {
          //center: {lat: , lng: },
          zoom: 6
        });
        var infoWindow = new google.maps.InfoWindow({map: map});




      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
      }
/*
      $.ajax({
        method: "GET",
         url:'exhibitionData.php?lat='+position.coords.latitude+"&long="+position.coords.longitude
      })
        .done(function( data ) {
      console.log("fad"+data);

      var locations= JSON.parse(data);
      console.log(locations);
      loadScript();


        });
*/


    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < locations.length; i++) {
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }
  </script>
<?php
include "footer.php";
?>
