<?php

include('connect.php');


$name=$_POST["name"];
$aadhar=$_POST["aadhar"];
$company=$_POST["company_name"];
$phone=$_POST["phone"];
$street=$_POST["street"];
$city=$_POST["city"];
$zip=$_POST["zip"];
$state=$_POST["state"];
$email=$_POST["email"];
$password=$_POST["password"];

$query="INSERT INTO `buyer_reg`( `name`, `email`, `password`, `company_name`, `aadhar`, `phone`, `street`, `city`, `state`, `zip`) VALUES ('$name','$email','$password','$company','$aadhar','$phone','$street','$city','$state','$zip')";

$run=mysqli_query($connect,$query);
if(!$run)
{
    echo "ERROR!";
}

else echo "<script>alert('$name Registered Successfully!');location.href='buyer_reg.php';</script>";
?>