<?php
include("connect.php");

$ex_Name = $_POST['ex_Name'];

$startDate = $_POST['startDate'];

$endDate = $_POST['endDate'];

$place_var = $_POST['place_var'];

$city_var = $_POST['city_var'];

$state_var = $_POST['state_var'];

$organizer_var = $_POST['organizer_var'];

$desc = $_POST['desc'];

$sqlCommand="INSERT INTO `exhibition` (`ex_name`, `start_date`, `end_date`, `place`, `city`, `state`, `organizer_name`, `description`) VALUES ('$ex_Name', '$startDate', '$endDate', '$place_var', '$city_var', '$state_var','$organizer_var','$desc')";
echo $sqlCommand;
print_r($connect);
$query=mysqli_query($connect, $sqlCommand) or die(mysql_error()) ;
echo $query;

header('Location: exhibitionMap.php');


?>