<?php

include('connect.php');


$name=$_POST["name"];

$contact=$_POST["contact"];

$email=$_POST["email"];
$password=$_POST["password"];
$district_id=$_POST["district"];

$query="INSERT INTO `supplier_reg`( `name`, `email`, `password`,`contact`,`district_id`) VALUES ('$name','$email','$password','$contact','$district_id')";

$run=mysqli_query($connect,$query);
if(!$run)
{
    echo "ERROR!!";
}

else echo "<script>alert('$name Registered Successfully!');location.href='supplier_reg.php';</script>";
?>