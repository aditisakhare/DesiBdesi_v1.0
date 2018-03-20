<?php
include('connect.php');
$name=$_POST['add_category'];

$query_check="select category_name from category where category_name='$name'";
$run_check=mysqli_query($connect,$query_check);
$count=mysqli_num_rows($run_check);
if($count>0)
{
echo "<script>alert('$name Category already exists! ');location.href='add_cart.php';</script>";
}

else{
$query="INSERT INTO `category`( `category_name`) VALUES ('$name')";
$run=mysqli_query($connect,$query);
    if(!$run)
    {
        echo "error";
    }
    else
    
    echo "<script>location.href='add_cart.php';</script>";
    
}


?>