<?php

include 'connect.php';
$buyer_email = "avinash@gmail.com";
$sql_buyer = "SELECT * FROM buyer_reg WHERE email = '$buyer_email'";
$res_buyer = mysqli_query($connect, $sql_buyer);
if(mysqli_num_rows($res_buyer) < 1)
{
    echo "Not registered user. GO BACK";
}
else
{
    session_start();
    $row_buyer = mysqli_fetch_array($res_buyer);
    $_SESSION['buyer_id'] = $row_buyer['buyer_id'];
    $_SESSION['buyer_name'] = $row_buyer['name'];
    $_SESSION['buyer_district_id'] = $row_buyer['district_id'];
    $district_id = $row_buyer['district_id'];
    $district = mysqli_fetch_array(mysqli_query($connect, "SELECT district_name FROM district_table WHERE district_id=$district_id"))[0];
    $_SESSION['buyer_district'] = $district;
    echo "<br>".$_SESSION['buyer_name']." LOGGED IN <br>";
}
?>
