<?php
include("connect.php");

$pro_Name = $_POST['pro_Name'];

$endDate = $_POST['endDate'];

$discounted_price = $_POST['discounted_price'];

$currency = $_POST['currency'];

$charges = $_POST['charges'];

$desc = $_POST['desc'];

$shg = $_POST['shg_Name'];

$contact = $_POST['contact'];

/*

$path="images/";

		

		$path=$path.$_FILES['files']['name'];
		    
		if(move_uploaded_file($_FILES['files']['tmp_name'],$path))
		{
		echo " ".basename($_FILES['files']['name'])." has been uploaded<br/>";
		//echo '<img src="images'.$_FILES['files']['name'].'" width="48" height="48"/>';
		$img=$_FILES['files']['name'];
		   
		}
		echo $_FILES['files']['name'];
		echo $img;
*/
$sqlCommand="INSERT INTO `sale` (`pro_name`, `end_date`, `discounted_price`, `currency`, `charges`, `description`, `shg_name`, `contact`) VALUES ('$pro_Name', '$endDate', '$discounted_price', '$currency', '$charges', '$desc', '$shg', '$contact')";
echo $sqlCommand;
//print_r($connect);
$query=mysqli_query($connect, $sqlCommand);
//echo $query;

header('Location: sale_display.php');


?>