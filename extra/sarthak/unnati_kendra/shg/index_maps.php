<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MAPS PAGE</title>
    <script>
        var latlng = 0;
        var lat = 0;
        var lng = 0;
    </script>
</head>
<body>

<div>
    <label> Latitude : </label>
    <input type="text" name="lat" id="lat"/>
    <br>
    <label> Longitude : </label>
    <input type="text" name="lon" id="lon"/>
    <br>
    <label> State : </label>
    <input type="text" name="state" id="state"/>
    <br>
    <label> District : </label>
    <input type="text" name="district" id="district"/>
    <br>
    <label> Town : </label>
    <input type="text" name="town" id="town"/>
    <br>
    <br>
    <div id="selected_map" style="width:100%;height:400px;"></div>
    <br>
    <br>
    <label>Product Type : </label>


</div>


</body>

<!--
FUNCTION TO GET USER LOCATION
To calculate the latitude and longitude of the device using HTML navigator.geolocation function
Needs a secure server to run in case of Google Chrome 50+, in all other servers it yeilds results.
-->
<script>
    // TO GET USER LOCATION
    window.onload = getLocation();
    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
        } else {
            alert("Geolocation is not supported by this browser.");
        }
    }

    function showPosition(position) {
        lat = position.coords.latitude;
        lng = position.coords.longitude;
        document.getElementById("lat").value = lat;
        document.getElementById("lon").value = lng;
        latlng = {lat: parseFloat(lat), lng: parseFloat(lng)};
    }
</script>



<!--
FUNCTION TO SET STATE, DISTRICT, TOWN BASED ON USER LOCATION
Uses HTML navigator.geolocation function to calculate the present latitutde and longitude
Reverse Geocode the latitude and longitude to find the State(adminsitrative_area_level_1), District(administrative_area_level_2), Town(locality)
Based on the current latitude and longitude of the user, Generate the dropdown for police station within 5 KM radius.
-->
<script>
    // TO SET THE STATE, DISTRICT, TOWN, POLICE STATIONS IN FORM
    var selected_map;

    function mysleep() {
        setTimeout(initMap, 1000);
    }
    function initMap() {
        selected_map = new google.maps.Map(document.getElementById('selected_map'), {
            zoom: 12,
            center: latlng,
        });

        var geocoder = new google.maps.Geocoder;
        var infowindow = new google.maps.InfoWindow;

        var marker = new google.maps.Marker({
            position: latlng,
            map: selected_map
        })

        geocodeLatLng(geocoder, selected_map, infowindow);
    }

    function geocodeLatLng(geocoder, map, infowindow) {

        navigator.geolocation.getCurrentPosition(function (position) {
            lat = position.coords.latitude;
            lng = position.coords.longitude;

            var service;


            /*

            //FOR SEARCHING NEARBY RADIUS
            service = new google.maps.places.PlacesService(map);
            service.nearbySearch({
                    location: latlng,
                    radius: 5000, //5km radius
                    //type: ['store']
                    keyword: ['hospital']
                },
                function (results, status) {
                    if (status === google.maps.places.PlacesServiceStatus.OK) {
                        no_nearby_hospitals = results.length;
                        //alert("Updating no hospitals " + no_nearby_hospitals);

                        for (var i = 0; i < 7; i++) {
                            var x = document.getElementById("nearby_hospitals");
                            var option = document.createElement("option");
                            option.text = results[i].name + " - " + results[i].vicinity;
                            option.value = results[i].name;
                            x.add(option);
                            var templatlng = results[i].geometry.location;
                            //templatlng = templatlng.replace('(', '{').replace(')', '}')
                            marker_hospitals.push(templatlng);
                            var temploc;
                            temploc = {lat: parseFloat(templatlng.lat()), lng: parseFloat(templatlng.lng())};
                            var tempmarker = new google.maps.Marker({
                                position: temploc,
                                map: map_hospitals
                            });
                            option.value = templatlng;
                            x.add(option);

                        }
                    }
                }
            );//END OF SERVICE.NEARBYSEARCH
            //FINISHED SEARCHING HOSPITALS


            */

            geocoder.geocode({'location': latlng}, function (results, status) {
                    if (status === google.maps.GeocoderStatus.OK) {
                        if (results[1]) {
                            //alert (results[1].formatted_address);

                            // TO SET THE STATE, DISTRICT AND TOWN IN FORM 1
                            for (var i = 0; i < results[1].address_components.length; i++) {
                                for (var k = 0; k < results[1].address_components[i].types.length; k++) {
                                    //FOR STATE
                                    if (results[1].address_components[i].types[k] == "administrative_area_level_1")
                                        document.getElementById('state').value = results[1].address_components[i].long_name;

                                    //FOR DISTRICT
                                    if (results[1].address_components[i].types[k] == "administrative_area_level_2")
                                        document.getElementById('district').value = results[1].address_components[i].long_name;

                                    //FOR TOWN
                                    if (results[1].address_components[i].types[k] == "locality")
                                        document.getElementById('town').value = results[1].address_components[i].long_name;
                                        //document.getElementById('town').value = "HI";

                                    //alert(results[1].address_components[i].types[k]+"-> "+results[1].address_components[i].long_name)
                                }
                            }
                        }
                        else {
                            window.alert('No results found');
                        }
                    }
                    else {
                        window.alert('Geocoder failed due to: ' + status);
                    }
                }
            ); //END OF GEOCODER.GEOCODE FUNCTION


        });// ENDING CURRENTPOSITION

    }//END OF FUNCTION GEOCODELATLNG


</script>


<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDOrUu1FXuJNQEpthSsCVNZ51-D8vqe9Fk&libraries=places&callback=mysleep">
    //google API key =AIzaSyDOrUu1FXuJNQEpthSsCVNZ51-D8vqe9Fk
</script>

</html>