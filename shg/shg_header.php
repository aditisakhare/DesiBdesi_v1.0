<?php
include('../login/login_main.php');
$path = "../";
include 'connect.php';
$shg_email = $_SESSION["email"];
$sql_shg = "SELECT * FROM shg WHERE leader_email = '$shg_email'";
$threshold_capacity_to_stop_order = 0;
$res_shg = mysqli_query($connect, $sql_shg);
if(mysqli_num_rows($res_shg) < 1)
{
    echo "Not registered user. GO BACK";
}
else
{
    //session_start();
    $row_shg = mysqli_fetch_array($res_shg);
    $_SESSION['shg_id'] = $row_shg['shg_id'];
    $_SESSION['shg_name'] = $row_shg['shg_name'];
    $_SESSION['shg_district_id'] = $row_shg['district_id'];
    $_SESSION['shg_item_id'] = $row_shg['item_id'];
    $district_id = $row_shg['district_id'];
    $district = mysqli_fetch_array(mysqli_query($connect, "SELECT district_name FROM district_table WHERE district_id=$district_id"))[0];
    $_SESSION['shg_district'] = $district;
    //echo "<br>".$_SESSION['shg_name']." LOGGED IN <br>";
}
?>
