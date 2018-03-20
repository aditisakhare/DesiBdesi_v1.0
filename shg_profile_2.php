<?php
$path="";
session_start();
include 'header.php';
require "registration/connect.php";
//echo "<script>alert('on this pafe');</script>";
?>
    <div class="jumbotron">
      <div class="container" id="orders">
        <?php

        $shg_id = $_GET["shg_id"];

       	$sql = "SELECT * FROM `interested_shgs` WHERE `shg_id` = '$shg_id'";
  		$query = mysqli_query($connect , $sql);

		if ( $query ) {
		    while($row = mysqli_fetch_assoc($query)){



        	$group_id = $row['group_id'];

        	$sql = "SELECT * FROM `orders` WHERE `group_id` = '$group_id'";
  			$query_item = mysqli_query($connect , $sql);

  			if ( $query_item ) {
		    while($row_item = mysqli_fetch_assoc($query_item)){
                echo  ' <h2>
            				ORDER HISTORY
            			</h2>';
			        echo '
			             <div class="orders">
			              <div class="row">
			                <div class="col-2 col-sm-2">
			                  <h4>Completion time</h4>
			                </div>
			                <div class="col-10 col-sm-10">
			                  '.$row_item['completion_time'].'
			                </div>
			              </div>
			              <div class="row">
			                <div class="col-2 col-sm-2">
			                  <h4>price agreed</h4>
			                </div>
			                <div class="col-10 col-sm-10">
			                  '.$row_item['price_agreed'].'
			                </div>
			              </div>
			              <div class="row">
			                <div class="col-2 col-sm-2">
			                  <h4>Terms and conditions</h4>
			                </div>
			                <div class="col-10 col-sm-10">
			                  '.$row_item['terms_and_conditions'].'
			                </div>
			              </div>
			              <div class="row">
			                <div class="col-2 col-sm-2">
			                  <h4>Special requirements</h4>
			                </div>
			                <div class="col-10 col-sm-10">
			                  '.$row_item['special_requirements'].'
			                </div>
			              </div>
			              <div class="row">
			                <div class="col-2 col-sm-2">
			                  <h4>Advance payment</h4>
			                </div>
			                <div class="col-10 col-sm-10">
			                  '.$row_item['advance_payment'].'
			                </div>
			              </div>
			            </div>
			            ';
			        }
			    }
	        }
	    }
           ?>
      </div>
    </div>

<?php
include 'footer.php';
?>
