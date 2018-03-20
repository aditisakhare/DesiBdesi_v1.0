<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SHG HOMEPAGE INTERESTED</title>
    <script>
        var dests = [];
        function showUser(str) {
    	    if (str == "") {
    	        document.getElementById("txtHint").innerHTML = "";
    	        return;
    	    } else {
    	        if (window.XMLHttpRequest) {
    	            // code for IE7+, Firefox, Chrome, Opera, Safari
    	            xmlhttp = new XMLHttpRequest();
    	        } else {
    	            // code for IE6, IE5
    	            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    	        }
    	        xmlhttp.onreadystatechange = function() {
    	            if (this.readyState == 4 && this.status == 200) {
    	                document.getElementById("txtHint").innerHTML = this.responseText;
    	            }
    	        };
    	        xmlhttp.open("GET","item.php?q="+str,true);
    	        xmlhttp.send();
    	    }
    	}

    </script>
</head>
<body>
<?php
include 'shg_header.php';
$path="../";
include '../header.php';
?>
<div class="content-wrapper">
<div class="container">
<div class="row pad-botm">
    <div class="col-md-12">
        <h4 class="header-line">SEARCH ADVERTISEMENT </h4>

    </div>
<?php
$sql_category = "select * from category";
$res_category = mysqli_query($connect,$sql_category);
$shg_item_id = $_SESSION['shg_item_id'];
?>
<form method="GET" action="shg_searched.php">
    <div class="col-md-3">
        <select name="category" onclick="showUser(this.value)" class="form-control">
        <option value="" selected disabled>Select Category</option>
        <?php
        while($row=mysqli_fetch_array($res_category)){
            echo '<option value="'.$row[0].'">'.$row[1].'</option>';
        }
        ?>
        </select>
    </div>
    <div class="col-md-3">
    <select id='txtHint' name = "item" class="form-control">
        <option value="" selected disabled>Select Item</option>
    </select>
    </div>
    <div class="col-md-3"><input type="submit" value="Search" name="search" class="btn btn-default"></div>

</form>
<div class="row" style="padding-bottom:2%">
    <div class="col-md-3">
        Your SHG Location : <strong><?php echo $_SESSION['shg_district'];?></strong>
    </div>
</div>
<div class="col-md-12">
    <h4 class="header-line">VIEW ALL ADVERTISEMENT </h4>

</div>

<?php

$sql_buyer_adv_post = "SELECT * FROM buyer_adv_post ORDER BY item_id <> $shg_item_id, quantity DESC ";
$res_buyer_adv_post = mysqli_query($connect, $sql_buyer_adv_post);
$dest_array = array();
/*echo "<table border='1' name='mytable' id='mytable'>";
echo "<tr>";
echo "<thead>";
echo "<td>" . "ADVERTISEMENT ID" . "</td>";
echo "<td>" . "BUYER NAME" . "</td>";
echo "<td>" . "ITEM " . "</td>";
echo "<td>" . "DESCRIPTION" . "</td>";
echo "<td>" . "QUANTITY" . "</td>";
echo "<td>" . "REQUEST PRICE" . "</td>";
echo "<td>" . "DELIVERY DISTRICT" . "</td>";
echo "<td>" . "DELIVERY MONTHS" . "</td>";
echo "<td>" . "TIMESTAMP" . "</td>";
echo "<td>" . "DISTANCE" . "</td>";
echo "<td>" . "INTERESTED" . "</td>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";*/
$counter = 0;
$no_dests = mysqli_num_rows($res_buyer_adv_post);
while ($row_buyer_adv_post = mysqli_fetch_array($res_buyer_adv_post)) {
    //echo "<tr>";

    $adv_id = $row_buyer_adv_post['adv_id'];
    $buyer_id = $row_buyer_adv_post['buyer_id'];
    $item_id = $row_buyer_adv_post['item_id'];
    $description = $row_buyer_adv_post['description'];
    $quantity = $row_buyer_adv_post['quantity'];
    $request_price = $row_buyer_adv_post['request_price'];
    $delivery_district_id = $row_buyer_adv_post['delivery_district_id'];
    $delivery_months = $row_buyer_adv_post['delivery_months'];
    $timestamp = $row_buyer_adv_post['timestamp'];

    $sql = "SELECT name FROM buyer_reg WHERE buyer_id=$buyer_id";
    $buyer_name = mysqli_fetch_array(mysqli_query($connect, $sql))[0];
    $sql = "SELECT * FROM items WHERE item_id=$item_id";
    $temp_item_name = mysqli_fetch_array(mysqli_query($connect, $sql));
    $item_name = $temp_item_name[1];
    $category_id = $temp_item_name[2];
    $unit_id = $temp_item_name[3];
    $sql = "SELECT category_name FROM category WHERE category_id=$category_id";
    $category_name = mysqli_fetch_array(mysqli_query($connect, $sql))[0];
    $sql = "SELECT unit_symbol FROM units WHERE unit_id=$unit_id";
    $unit_name = mysqli_fetch_array(mysqli_query($connect, $sql))[0];
    $sql = "SELECT * FROM district_table WHERE district_id=$delivery_district_id";
    $delivery_district_name = mysqli_fetch_array(mysqli_query($connect, $sql))[1];
    $delivery_state_id = mysqli_fetch_array(mysqli_query($connect, $sql))[3];
    $sql = "SELECT state_name FROM state_table WHERE state_id=$delivery_state_id";
    $delivery_state_name = mysqli_fetch_array(mysqli_query($connect, $sql))[0];
    //echo $delivery_district_name.$sql;

    /*echo "<td>" . $adv_id . "</td>";
    echo "<td>" . $buyer_name . "</td>";
    echo "<td>" . $category_name . " / " . $item_name . "</td>";
    echo "<td>" . $row_buyer_adv_post['description'] . "</td>";
    echo "<td>" . $row_buyer_adv_post['quantity'] . "  " . $unit_name . "</td>";
    echo "<td>" . $row_buyer_adv_post['request_price'] . "</td>";
    echo "<td>" . $delivery_district_name . ", " . $delivery_state_name . "</td>";
    echo "<td>" . $row_buyer_adv_post['delivery_months'] . "</td>";
    echo "<td>" . $row_buyer_adv_post['timestamp'] . "</td>";
    echo "<td name='" . $counter . "' id='" . $counter . "'>" . "</td>";
    echo "<td>" . "<a href='shg_interested.php?adv_id=" . $row_buyer_adv_post['adv_id'] . "&qty=". $row_buyer_adv_post['quantity'] ." '> <input type='button' name='submit_shg' value='Interested here!!'/> </a>" . "</td>";
    echo "</tr>";*/
?>
    <div class="col-md-4 col-sm-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <?php echo $buyer_name." : ".$delivery_district_name . ", " . $delivery_state_name;?>
            </div>
            <div class="panel-body">
                <p class="wella">Item : <strong><?php echo $item_name;?></strong></p>
                <p class="wella">Category : <?php echo $category_name;?></p>
                <p class="wella">Description : <?php echo $row_buyer_adv_post['description'];?></p>
                <p class="wella">Quantity : <?php echo $row_buyer_adv_post['quantity'];?></p>
                <p class="wella">Request Price : <?php echo $row_buyer_adv_post['request_price'];?> ₹</p>
                <p class="wella">Delivery Time: <?php echo $row_buyer_adv_post['delivery_months']." months";?></p>
            </div>
            <div class="panel-footer" >
                <div >
                    <?php echo "<a href='shg_interested.php?adv_id=" . $row_buyer_adv_post['adv_id'] . "&qty=". $row_buyer_adv_post['quantity'] ." '> <input type='button' class='btn btn-success' name='submit_shg' value='Respond'/> </a>";?>

                </div>
            </div>
        </div>
    </div>
<?php
    array_push($dest_array, $delivery_district_name . ", " . $delivery_state_name);
    echo "<script> dests.push('" . $delivery_district_name . ", " . $delivery_state_name . "');</script>";
    $counter++;
}

/*echo "</tbody>";
echo "</table>";*/
//print_r($dest_array);
?>

</div>
<div id="output" style="display: none"></div>
</div>
<div id="map"></div>
<script>
    function initMap() {
        var bounds = new google.maps.LatLngBounds;
        var markersArray = [];

        var origin1 = '<?php echo $_SESSION['shg_district'];?>';
        //var origin2 = "Greenwich, England";
        var destinationA = "Thane, Maharashtra";

        var no_dests = <?php echo $no_dests;?>;


        var destinationIcon = 'https://chart.googleapis.com/chart?' +
            'chst=d_map_pin_letter&chld=D|FF0000|000000';
        var originIcon = 'https://chart.googleapis.com/chart?' +
            'chst=d_map_pin_letter&chld=O|FFFF00|000000';
        var map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: 55.53, lng: 9.4},
            zoom: 10
        });
        var geocoder = new google.maps.Geocoder;

        var service = new google.maps.DistanceMatrixService;
        service.getDistanceMatrix({
            origins: [origin1],
            destinations: dests,
            //destinations :[destinationA],
            travelMode: 'WALKING',
            unitSystem: google.maps.UnitSystem.METRIC,
            avoidHighways: false,
            avoidTolls: false
        }, function (response, status) {
            if (status !== 'OK') {
                alert('Error was: ' + status);
            } else {
                //alert(dests);
                var originList = response.originAddresses;
                var destinationList = response.destinationAddresses;
                var outputDiv = document.getElementById('output');
                outputDiv.innerHTML = '';
                deleteMarkers(markersArray);

                var showGeocodedAddressOnMap = function (asDestination) {
                    var icon = asDestination ? destinationIcon : originIcon;
                    return function (results, status) {
                        if (status === 'OK') {
                            map.fitBounds(bounds.extend(results[0].geometry.location));
                            markersArray.push(new google.maps.Marker({
                                map: map,
                                position: results[0].geometry.location,
                                icon: icon
                            }));
                        } else {
                            console.log('Geocode was not successful due to: ' + status);
                        }
                    };
                };

                for (var i = 0; i < originList.length; i++) {
                    var results = response.rows[i].elements;
                    geocoder.geocode({'address': originList[i]},
                        showGeocodedAddressOnMap(false));
                    for (var j = 0; j < results.length; j++) {
                        geocoder.geocode({'address': destinationList[j]},
                            showGeocodedAddressOnMap(true));
                        outputDiv.innerHTML += originList[i] + ' to ' + destinationList[j] +
                            ': ' + results[j].distance.text + ' in ' +
                            results[j].duration.text + '<br>';
                        var dist = results[j].distance.text;
                        dist = dist.split(".")[0];
                        dist = dist.split(" ")[0];
                        dist = dist.replace(',', '');
                        dist = parseInt(dist);
                        document.getElementById(j).innerHTML = dist;
                        console.log(document.getElementById(j).innerHTML);
                    }
                }
            }
        });
    }

    function deleteMarkers(markersArray) {
        for (var i = 0; i < markersArray.length; i++) {
            markersArray[i].setMap(null);
        }
        markersArray = [];
    }
</script>

<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDOrUu1FXuJNQEpthSsCVNZ51-D8vqe9Fk&libraries=places&callback=initMap">
    //google API key =AIzaSyDOrUu1FXuJNQEpthSsCVNZ51-D8vqe9Fk
</script>


<script>
    function sortTable() {
        var table, rows, switching, i, x, y, shouldSwitch;
        table = document.getElementById("mytable");
        switching = true;
        /*Make a loop that will continue until
         no switching has been done:*/
        while (switching) {
            //start by saying: no switching is done:
            switching = false;
            rows = table.getElementsByTagName("TR");
            //console.log("Rows are "+rows.length);
            /*Loop through all table rows (except the
             first, which contains table headers):*/
            for (i = 1; i < (rows.length - 1); i++) {
                //start by saying there should be no switching:
                shouldSwitch = false;
                /*Get the two elements you want to compare,
                 one from current row and one from the next:*/
                x = rows[i].getElementsByTagName("TD")[9];
                y = rows[i + 1].getElementsByTagName("TD")[9];
                //check if the two rows should switch place:
                if (x.innerHTML > y.innerHTML) {
                    //if so, mark as a switch and break the loop:
                    console.log(x.innerHTML + " smaller than " + y.innerHTML);
                    shouldSwitch = true;
                    break;
                }
            }
            if (shouldSwitch) {
                /*If a switch has been marked, make the switch
                 and mark that a switch has been done:*/
                rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                switching = true;
            }
        }
    }
</script>


<p>
    <button onclick="sortData()">Sort</button>
</p>

<script>
    // Table data sorting starts....
    function sortData() {
        var tableData = document.getElementById('mytable').getElementsByTagName('tbody').item(0);
        var rowData = tableData.getElementsByTagName('tr');
        var v1, v2;
        alert(rowData.length);
        for (var i = 0; i < rowData.length - 1; i++) {
            for (var j = 0; j < rowData.length - (i + 1); j++) {
                v1 = parseInt(rowData.item(j).getElementsByTagName('td').item(9).innerHTML);
                v2 = parseInt(rowData.item(j + 1).getElementsByTagName('td').item(9).innerHTML);
                console.log(v1 + " " +v2);
                if (v1 > v2) {
                    tableData.insertBefore(rowData.item(j + 1), rowData.item(j));
                }
            }
        }
        console.log("Data sorted");
    }
    // Table data sorting ends....
</script>
</div>
</div>
</body>
<?php
include '../footer.php'; ?>
</html>
