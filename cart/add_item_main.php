<?php
include("connect.php");
$name=$_POST['add_item'];
$category_id=$_POST['all_cat'];

$query="INSERT INTO `items`( `item_name`, `category_id`) VALUES ('$name','$category_id')";
$run=mysqli_query($connect,$query);


if(!$run)
{
    echo "Error!! RUN!";
}

 echo "<script>location.href='add_cart.php';</script>";
?>