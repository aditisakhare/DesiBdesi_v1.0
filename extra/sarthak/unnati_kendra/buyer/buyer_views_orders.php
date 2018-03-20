<?php
$path='../';
include 'connect.php';
include '../header.php';
?>
<?php
$buyer_id = 2;
$sql_adv_list ='select * from buyer_adv_post where buyer_id="'.$buyer_id.'"';
$res_adv_list=mysqli_query($connect, $sql_adv_list);
//Only Current Order Requests
while($row1=mysqli_fetch_array($res_adv_list)){
    //Fetch Groups Servicing Adv
    $adv_id = $row1['adv_id'];
    $buyer_id = $row1['buyer_id'];
    $item_id = $row1['item_id'];
    $description = $row1['description'];
    $quantity = $row1['quantity'];
    $request_price = $row1['request_price'];
    $delivery_district_id = $row1['delivery_district_id'];
    $delivery_months = $row1['delivery_months'];
    $timestamp = $row1['timestamp'];

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
    ?>
    <div class="col-md-4 col-sm-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <?php echo $buyer_name." : ".$delivery_district_name . ", " . $delivery_state_name;?>
            </div>
            <div class="panel-body">
                <p class="wella">Item : <strong><?php echo $item_name;?></strong></p>
                <p class="wella">Category : <?php echo $category_name;?></p>
                <p class="wella">Description : <?php echo $row1['description'];?></p>
                <p class="wella">Quantity : <?php echo $row1['quantity'];?></p>
                <p class="wella">Request Price : <?php echo $row1['request_price'];?> ₹</p>
                <p class="wella">Delivery Time: <?php echo $row1['delivery_months']." months";?></p>
            </div>
            <div class="panel-footer" >
                <div >
                    <?php echo "<a href='view_groups.php?adv_id=" . $row1["adv_id"]."'"."> <input type='button' class='btn btn-success' name='view_adv_group' value='View'/></a>";?>

                </div>
            </div>
        </div>
    </div>
<?php
    
}
?>
<?php
include '../footer.php';
?>
