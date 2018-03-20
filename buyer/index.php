<?php

$path="../";
include "connect.php";
include "../header.php";

$buyer_id = $_SESSION["id"];

$sql_buyer_reg = "SELECT * FROM buyer_reg WHERE buyer_id= $buyer_id";
//echo $sql_buyer_reg;
$res_buyer_reg = mysqli_query($connect, $sql_buyer_reg);
$row_buyer_reg = mysqli_fetch_array($res_buyer_reg);
$buyer_name = $row_buyer_reg['name'];
$buyer_email = $row_buyer_reg['email'];
$buyer_district_id = $row_buyer_reg['district_id'];

//SELECTING MY ALL ORDERS.

$sql_orders = "SELECT * FROM groups WHERE adv_id IN (SELECT adv_id FROM buyer_adv_post WHERE buyer_id=$buyer_id)";
$res_orders = mysqli_query($connect, $sql_orders);
//echo $sql_orders;
echo "<div class='panel'>";
echo "<table  class='table table-responsive'>";

echo "<tr>";
echo "<td>GROUP ID</td>";
echo "<td>ADV ID</td>";
echo "<td>DESCRIPTION</td>";
echo "<td>QUANTITY</td>";
echo "<td>TIMESTAMP</td>";
echo "<td>RATING</td>";
echo "</tr>";

while ($row_orders = mysqli_fetch_array($res_orders)) {
    echo "<tr>";

    echo "<td>";
    $group_id = $row_orders['group_id'];
    echo $row_orders['group_id'];
    echo "</td>";

    echo "<td>";
    echo $row_orders['adv_id'];
    echo "</td>";

    $adv_id = $row_orders['adv_id'];
    $sql_adv_post = "SELECT * FROM buyer_adv_post WHERE adv_id=$adv_id";
    $row_adv_post = mysqli_fetch_array(mysqli_query($connect, $sql_adv_post));

    echo "<td>";
    echo $row_adv_post['description'];
    echo "</td>";

    echo "<td>";
    echo $row_adv_post['quantity'];
    echo "</td>";

    echo "<td>";
    echo $row_adv_post['timestamp'];
    echo "</td>";

    echo "<td>";
    $str = "rate_shgs.php?group_id=" . $group_id;
    echo "<a href='" . $str . "'/><input type='button' class='btn btn-primary' value='RATE NOW'/></a>";
    echo "</td>";

    echo "</tr>";
}
echo "</table>";

?>
</div>
<?php include '../footer.php'; ?>
