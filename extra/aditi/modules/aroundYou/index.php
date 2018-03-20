
<?php
    $path = "../";
    include "../header.php";
 ?>  
   

<?php
include 'connect.php';

//$sql_category = "select * from orders";
$sql_category = "SELECT * FROM `orders` ORDER BY completion_time DESC;";
$order_details = mysqli_query($connect,$sql_category);

?>
<center><h3> Aorund You </h3></center>
<img id="scream" src="wooden.jpeg" alt="The Scream" hidden>
<img id="ice" src="mango.jpeg" alt="The Scream" hidden>

<img id="rice" src="rice.jpg" alt="The Scream" hidden>

<img id="masala" src="masala.jpg" alt="The Scream" hidden>

<img id="sugarcane" src="candle.jpeg" alt="The Scream" hidden>

    
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           <center>View Recent Orders</center>  
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Order</th>
                                            <th>Group</th>
                                            <th>Price Agreed</th>
                                            <th>Advance Payment</th>
                                            <th>Terms and Conditions</th>
                                            <th>Completion Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <?php
                                        while($row=mysqli_fetch_array($order_details)){
                                            echo '<tr class="odd gradeX"><td>'.$row['order_id'].'</td>';
                                            echo '<td>'.$row['group_id'].'</td>';
                                            echo '<td>'.$row['price_agreed'].'</td>';
                                            echo '<td>'.$row['advance_payment'].'</td>';
                                            echo '<td>'.$row['terms_and_conditions'].'</td>';
                                            echo '<td>'.$row['completion_time'].'</td></tr>';
                                            //echo '<option value="'.$row[0].'">'.$row[1].'</option>';
                                        }
                                        ?>
                                            
                                        
                                        
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
            <br>
           
        
          
            
<!--                          
<div class="row"> <div class="col-md-3 col-sm-9 col-xs-3"></div>
    <div class="col-md-3 col-sm-9 col-xs-3"><h3> Statistics about SHGs </h3></div>
    <div class="col-md-3 col-sm-9 col-xs-3"></div>
</div>
--> 
<div class="panel-heading">
    <center><h3> Statistics about SHGs </h3></center>
 </div>       

           
            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>SHG Formations and Promotions <small> in Raigad </small></h2>
                      <br><br>
                      <ul class="nav navbar-right panel_toolbox">
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><label>Select District :</label><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Raigad</a>
                          </li>
                          <li><a href="#">Panvel</a>
                          </li>
                            <li><a href="#">Thane</a>
                          </li>
                        </ul>
                      </li>
                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <canvas id="mybarChart"></canvas>
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2> Top Rated SHGs <small> in Raigad</small></h2>
                    <br><br>
                      <ul class="nav navbar-right panel_toolbox">
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><label>Select District :</label><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Raigad</a>
                          </li>
                          <li><a href="#">Panvel</a>
                          </li>
                            <li><a href="#">Thane</a>
                          </li>
                        </ul>
                      </li>
                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <canvas id="canvasDoughnut"></canvas>
                  </div>
                </div>
              </div>
            </div>
             <div class="clearfix"></div>
          <div class="row">
            
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Demand of Products <small> in Raigad </small></h2>
                    <br><br>
                      <ul class="nav navbar-right panel_toolbox">
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><label>Select District :</label><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Raigad</a>
                          </li>
                          <li><a href="#">Panvel</a>
                          </li>
                            <li><a href="#">Thane</a>
                          </li>
                        </ul>
                      </li>
                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <canvas id="image_new" width="600px" height="100px"></canvas>
                    <canvas id="pieChart"></canvas>
                    <canvas id="image" width="600px" height="100px"></canvas>
                  </div>
                  <br>
                </div>
              </div>
         
         
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2> Products manufactured by SHGs <small> in Raigad </small></h2>
                    <br><br>
                     <ul class="nav navbar-right panel_toolbox">
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><label>Select District :</label><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Raigad</a>
                          </li>
                          <li><a href="#">Panvel</a>
                          </li>
                            <li><a href="#">Thane</a>
                          </li>
                        </ul>
                      </li>
                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                                    <canvas id="image1" width="600px" height="100px"></canvas>

                    <canvas id="polarArea"></canvas>
                                      <canvas id="image2" width="600px" height="100px"></canvas>

                  </div>
                </div>
              </div>
            </div>
         <script src="http://maps.google.com/maps/api/js?key=AIzaSyC1g7uL2wCfpFPW-6k0geeTm_5efhf_bbw" 
          type="text/javascript"></script>
    <div class="panel-heading">
    <center><h3> SHG Productions near your Area </h3></center>
 </div>  
 <div id="map" style="width: 100%; height: 400px;"></div>

  <script type="text/javascript">
    var locations = [
      ['Candle', 15.2993, 74.1240, 4],
      ['Candle', 19.7515, 75.7139, 5],
      ['Candle', 18.5204, 73.8567, 3],
      ['Candle', 9.9312, 76.2673, 2],
      ['Candle', 10.0889, 77.0595, 1]
    ];

    var locations1 = [
      ['Pickle', 22.9716, 77.5946, 4],
      ['Pickle', 25.076, 72.8777, 5],
      ['Pickle', 50.5204, 73.8567, 3],
      ['Pickle', 9.9312, 76.2673, 2],
      ['Pickle', 36.0889, 77.0595, 1]
    ];    
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
          zoom: 4
        });
        var infoWindow = new google.maps.InfoWindow({map: map});

        
      

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
      }

    //var map = new google.maps.Map(document.getElementById('map'), {
      //zoom: 6,
      //center: new google.maps.LatLng(21.146633, 79.088860),
      //mapTypeId: google.maps.MapTypeId.ROADMAP
    //});

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < locations.length; i++) {  
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map,
        icon: "candle.jpg"
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }

    for (i = 0; i < locations1.length; i++) {  
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations1[i][1], locations1[i][2]),
        map: map,
        icon: "pickle.png"
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations1[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }    
    </script>
        <!-- page content -->

             
  


 <?php
    include "../footer.php";
 ?> 
 <script>
 /*
 	var canvas = document.getElementById('image');
    var context = canvas.getContext('2d');
 	var imageObj = new Image();

      imageObj.onload = function() {
        context.drawImage(imageObj, 69, 50);
      };
      imageObj.src = 'http://www.html5canvastutorials.com/demos/assets/darth-vader.jpg';
 	*/
 	function image() {
				    var c = document.getElementById("image");
				    var ctx = c.getContext("2d");

				    ctx.beginPath();
				      ctx.rect(110, 45.5, 10, 10);
				      ctx.fillStyle = '#26B99A';
				      ctx.fill();
				      ctx.lineWidth = 7;
				      ctx.strokeStyle = '#26B99A';
				      ctx.stroke();

				    var img = document.getElementById("ice");
				    ctx.drawImage(img, 130, 10);

				    ctx.beginPath();
				      ctx.rect(330, 45.5, 10, 10);
				      ctx.fillStyle = '#A4AFB7';
				      ctx.fill();
				      ctx.lineWidth = 7;
				      ctx.strokeStyle = '#A4AFB7';
				      ctx.stroke();
				    var img = document.getElementById("scream");
				    ctx.drawImage(img, 350, 10);
                    }
    function image_new() {
				    var c = document.getElementById("image_new");
				    var ctx = c.getContext("2d");
				    ctx.beginPath();
				    ctx.lineWidth = 2
				      // set line color
				    
				     /* 
					ctx.moveTo(200,105);
					ctx.lineTo(230,150);
					ctx.lineTo(240,130);
					ctx.moveTo(230,150);
					ctx.lineTo(195,133);
					ctx.beginPath();
				      ctx.arc( 120, 65.5, 2, 0, 2 * Math.PI, false);
				      ctx.fillStyle = '#0093F5';
				      ctx.fill();
				      ctx.lineWidth = 5;
				      //ctx.strokeStyle = '#003300';
      					ctx.strokeStyle = '#0093F5';
					ctx.stroke(); */
					ctx.beginPath();
				      ctx.rect(110, 65.5, 10, 10);
				      ctx.fillStyle = '#0093F5';
				      ctx.fill();
				      ctx.lineWidth = 7;
				      ctx.strokeStyle = '#0093F5';
				      ctx.stroke();
				    var img = document.getElementById("rice");
				    ctx.drawImage(img, 130, 30);

				    
				    /*  
					ctx.moveTo(350,85);
					ctx.lineTo(340,150);
					ctx.lineTo(330,130);
					ctx.moveTo(340,150);
					ctx.lineTo(360,130);
					//ctx.strokeStyle = '#335271';
					ctx.stroke();
					
					
					ctx.moveTo(460,115.5);
					ctx.lineTo(440,150);
					ctx.lineTo(460,145);
					ctx.moveTo(440,150);
					ctx.lineTo(436,130);
					//ctx.strokeStyle = '#9A32C3';
					ctx.stroke();
					*/

					

				    var img = document.getElementById("masala");
				    ctx.drawImage(img, 300, 10);

				    ctx.beginPath();
				      ctx.rect(440, 65.5, 10, 10);
				      
				      ctx.fillStyle = '#335271';
				      ctx.fill();
				      ctx.lineWidth = 7;
				      ctx.strokeStyle = '#335271';
				      ctx.stroke();
				      ctx.beginPath();
				      ctx.rect(280, 45.5, 10, 10);
				      ctx.fillStyle = '#9A32C3';
				      ctx.fill();
				      ctx.lineWidth = 7;
				      ctx.strokeStyle = '#9A32C3';
				      ctx.stroke();

				    var img = document.getElementById("sugarcane");
				    ctx.drawImage(img, 460, 35);
                    }  

    function image1() {
				    var c = document.getElementById("image1");
				    var ctx = c.getContext("2d");

				    ctx.beginPath();
				      ctx.rect(110, 45.5, 10, 10);
				      ctx.fillStyle = '#26B99A';
				      ctx.fill();
				      ctx.lineWidth = 7;
				      ctx.strokeStyle = '#26B99A';
				      ctx.stroke();

				    var img = document.getElementById("ice");
				    ctx.drawImage(img, 130, 10);

				    ctx.beginPath();
				      ctx.rect(330, 45.5, 10, 10);
				      ctx.fillStyle = '#A4AFB7';
				      ctx.fill();
				      ctx.lineWidth = 7;
				      ctx.strokeStyle = '#A4AFB7';
				      ctx.stroke();
				    var img = document.getElementById("scream");
				    ctx.drawImage(img, 350, 10);
                    }
    function image2() {
				    var c = document.getElementById("image2");
				    var ctx = c.getContext("2d");
				    ctx.beginPath();
				    ctx.lineWidth = 2
				    
					ctx.beginPath();
				      ctx.rect(100, 65.5, 10, 10);
				      ctx.fillStyle = '#0093F5';
				      ctx.fill();
				      ctx.lineWidth = 7;
				      ctx.strokeStyle = '#0093F5';
				      ctx.stroke();
				    var img = document.getElementById("rice");
				    ctx.drawImage(img, 130, 0);


				    var img = document.getElementById("masala");
				    ctx.drawImage(img, 300, 10);

				    ctx.beginPath();
				      ctx.rect(440, 65.5, 10, 10);
				      
				      ctx.fillStyle = '#335271';
				      ctx.fill();
				      ctx.lineWidth = 7;
				      ctx.strokeStyle = '#335271';
				      ctx.stroke();
				      ctx.beginPath();
				      ctx.rect(280, 45.5, 10, 10);
				      ctx.fillStyle = '#9A32C3';
				      ctx.fill();
				      ctx.lineWidth = 7;
				      ctx.strokeStyle = '#9A32C3';
				      ctx.stroke();

				    var img = document.getElementById("sugarcane");
				    ctx.drawImage(img, 460, 5);
                    }  
                                    
    function pie() {

    				var c = document.getElementById("pieChart");
				    var ctx = c.getContext("2d");
    				ctx.beginPath();
					ctx.moveTo(230,0);
					ctx.lineTo(260,100);
					ctx.stroke();
    }                              
	
 </script>  
