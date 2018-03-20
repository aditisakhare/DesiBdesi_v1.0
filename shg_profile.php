<?php
$path = "";
session_start();
include 'header.php';
require "registration/connect.php";
?>
    <div class="jumbotron">
        <div class="container">
            <?php

            $sql = "SELECT * FROM `shg` ORDER BY obtained_rating DESC, total_rating ASC";
            $query = mysqli_query($connect, $sql);

            //echo $sql;
            //$_SESSION["shg_id"] = "5";

            if ($query) {
                while ($row = mysqli_fetch_assoc($query)) {
                    $shg_id = $row['shg_id'];
                    $item_id = $row['item_id'];
                    $sql = "SELECT * FROM `items` WHERE `item_id` = '$item_id'";
                    $query_item = mysqli_query($connect, $sql);
                    $row_item = mysqli_fetch_array($query_item);

                    if($row['total_rating'] > 0)
                        $percent_popular = $row['obtained_rating'] *100 / $row['total_rating'] ;
                    else
                        $percent_popular = 0;
                    echo '
             <div class="shg">
              <h2>' . $row['shg_name'] . '</h2>
              <div class="row">
                <div class="col-2 col-sm-2">
                  <h4>President:</h4>
                </div>
                <div class="col-10 col-sm-10">
                  ' . $row['leader'] . '
                </div>
              </div>
              <div class="row">
                <div class="col-2 col-sm-2">
                  <h4>Contact No.</h4>
                </div>
                <div class="col-10 col-sm-10">
                  ' . $row['contact_no'] . '
                </div>
              </div>
              <div class="row">
                <div class="col-2 col-sm-2">
                  <h4>Location</h4>
                </div>
                <div class="col-10 col-sm-10">
                  ' . $row['city'] . ', ' . $row['state'] . '
                </div>
              </div>
              <div class="row">
                <div class="col-2 col-sm-2">
                  <h4>Product</h4>
                </div>
                <div class="col-10 col-sm-10">
                  ' . $row_item['item_name'] . '
                </div>
              </div>

               <div class="row">
                <div class="col-2 col-sm-2">
                  <h4>Rating</h4>
                </div>
                <div class="col-10 col-sm-10">
                  ' . $percent_popular. ' %
                </div>
              </div>
            </div>
            <a href="shg_profile_2.php?shg_id=' . $shg_id . '"/><button class="btn btn-primary order-history-btn btn-success">Order History</button></a>
            ';
                }
            }
            ?>
        </div>
    </div>

<?php include 'footer.php'; ?>
