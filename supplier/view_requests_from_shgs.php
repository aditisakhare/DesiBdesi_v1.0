<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>VIEW SHG REQUESTS</title>
</head>
<body>
<?php

$path="../";
include '../connect.php';
include '../header.php';
?>
<div class="content-wrapper">
<div class="container">
<div class="row pad-botm">

    <div class="col-md-12">
        <h4 class="header-line">VIEW ALL RAW MATERIAL REQUESTS </h4>

    </div>

<?php

$sql_buyer_adv_post = "SELECT * FROM shg_raw_request";
$res_buyer_adv_post = mysqli_query($connect, $sql_buyer_adv_post);
$dest_array = array();
$counter = 0;
$no_dests = mysqli_num_rows($res_buyer_adv_post);
while ($row_buyer_adv_post = mysqli_fetch_array($res_buyer_adv_post)) {
    //echo "<tr>";

    $request_id = $row_buyer_adv_post['request_id'];
    $raw_id = $row_buyer_adv_post['raw_id'];
    $state_id = $row_buyer_adv_post['state_id'];
    $district_id = $row_buyer_adv_post['district_id'];


    /*$sql = "SELECT name FROM buyer_reg WHERE buyer_id=$buyer_id";
    $buyer_name = mysqli_fetch_array(mysqli_query($connect, $sql))[0];
    $sql = "SELECT * FROM items WHERE item_id=$item_id";
    $temp_item_name = mysqli_fetch_array(mysqli_query($connect, $sql));
    $item_name = $temp_item_name[1];
    $category_id = $temp_item_name[2];
    $unit_id = $temp_item_name[3];
    $sql = "SELECT category_name FROM category WHERE category_id=$category_id";
    $category_name = mysqli_fetch_array(mysqli_query($connect, $sql))[0];
    */
    $sql= "SELECT * FROM rawmaterialitems";
    $raw_name = mysqli_fetch_array(mysqli_query($connect, $sql))[3];
    //echo $sql;
    $sql = "SELECT state_name FROM state_table WHERE state_id=$state_id";
    $state_name = mysqli_fetch_array(mysqli_query($connect, $sql))[0];
    $sql = "SELECT * FROM district_table WHERE district_id=$district_id and state_id=$state_id";
    $district_name = mysqli_fetch_array(mysqli_query($connect, $sql))[1];
    //echo $delivery_district_name.$sql;
/*
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
                <?php echo 'Request Id : '.$request_id; ?>
            </div>
            <div class="panel-body">
                <p class="wella">Raw Material : <strong><?php echo $raw_name;?></strong></p>
                <p class="wella">State : <?php echo $state_name;?></p>
                <p class="wella">District : <?php echo $district_name?></p>


            </div>
            <div class="panel-footer" >
                <div >
                    <?php echo "<a href='raw_request_view.php?request_id=" . $row_buyer_adv_post['request_id'] ." '> <input type='button' class='btn btn-danger' name='submit_shg' value='View'/> </a>";?>

                </div>
            </div>
        </div>
    </div>
<?php

}

/*echo "</tbody>";
echo "</table>";*/
//print_r($dest_array);
?>

</div>
</div>
</body>
<?php
include '../footer.php'; ?>
</html>
