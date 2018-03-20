<?php
/**
 * Created by PhpStorm.
 * User: Avinash Maurya
 * Date: 02-04-2017
 * Time: 15:23
 */
include "../connect.php";
include "../header.php";
$group_id = $_GET['group_id'];
echo $group_id;

$sql_orders = "SELECT * FROM orders WHERE group_id=$group_id";
$res_orders = mysqli_query($connect, $sql_orders);
$row_orders = mysqli_fetch_array($res_orders);

if ($row_orders['rating'] == -1) {
    //No rating done, do it now.
    echo "<form id='rating_form' action='' method='post'>";
    echo "<br>CREDITIBILITY : <input name='rating_credit' type='number' min='0' max='5' required/>";
    echo "<br>SPEED : <input name='rating_speed' type='number' min='0' max='5' required/>";
    echo "<br>PACKAGING : <input name='rating_packing' type='number' min='0' max='5' required/>";
    echo "<br><input type='submit' name='rating_submit'/>";
    echo "</form>";
} else {
    echo "<script>alert('Thanks, but you have already placed rating for this order as ".$row_orders['rating']." / 5 '); window.location='past_orders_ratings.php';</script>";
}


if (isset($_POST['rating_submit'])) {
    $rating = $_POST['rating_credit'];
    $rating += $_POST['rating_speed'];
    $rating += $_POST['rating_packing'];

    $rating = $rating /3;

    $rating = ceil($rating);

    echo "<script> document.getElementById('rating_form').style.display='none' ; </script>";
    $sql_orders = "UPDATE `orders` SET `rating`=$rating WHERE group_id=$group_id";
    mysqli_query($connect, $sql_orders);

    $sql_interested = "SELECT * FROM interested_shgs WHERE group_id=$group_id";
    $res_interested = mysqli_query($connect, $sql_interested);
    while($row_interested = mysqli_fetch_array($res_interested))
    {
        $shg_id = $row_interested['shg_id'];
        $sql_shg = "UPDATE `shg` SET `obtained_rating`=obtained_rating + $rating,`total_rating`=total_rating+5 WHERE shg_id=$shg_id";
        mysqli_query($connect, $sql_shg);
    }

    echo "<script>alert('Response Recorded Successfully.')</script>";
}

?>