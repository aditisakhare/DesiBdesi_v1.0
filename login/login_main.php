<?php

include('connect.php');
session_start();

if(isset($_POST["buyer"]))
{
    // buyer        
    $email_id=$_POST["email_id"];
    $password=$_POST["password"];
    $query="select * from buyer_reg where email='$email_id' and password='$password'";
    $run=mysqli_query($connect,$query);
    $count=mysqli_num_rows($run);
   
    if($count==1)
    {
        $row=mysqli_fetch_assoc($run);
        
        $_SESSION["user_name"]=$row["name"];
        $_SESSION["type"]="buyer";
        $_SESSION["id"]=$row["buyer_id"];
        echo "<script>location.href='../index.php';</script>";
    }
    else echo "<script>alert('Username or Password of Buyer is incorrect!');location.href='user_buyer_shg.php';</script>";
}

else if(isset($_POST["tourist"])){
    //tourist
    $email_id=$_POST["email_id"];
$password=$_POST["password"];
    $query="select * from supplier_reg where email='$email_id' and password='$password'";
    $run=mysqli_query($connect,$query);
    $count=mysqli_num_rows($run);
    if($count==1)
    {
        $row=mysqli_fetch_assoc($run);
        
        $_SESSION["user_name"]=$row["name"];
        $_SESSION["type"]="supplier";
        echo "<script>location.href='../index.php';</script>";
    }
    else echo "<script>alert('Username or Password of Supplier is incorrect!');location.href='user_buyer_shg.php';</script>";
}

else if(isset($_POST["supplier"])){
    //supplier
    $email_id=$_POST["email_id"];
$password=$_POST["password"];
    $query="select * from shg where leader_email='$email_id' and leader_password='$password'";
    $run=mysqli_query($connect,$query);
    $count=mysqli_num_rows($run);
    if($count==1)
    {
        $row=mysqli_fetch_assoc($run);
        
        $_SESSION["user_name"]=$row["leader"];
        $_SESSION["type"]="shg";
        $_SESSION["email"]=$row["leader_email"];
        echo "<script>location.href='../index.php';</script>";
    }
    
else{ 
    echo "<script>alert('Username or Password of SHG is incorrect!');location.href='user_buyer_shg.php';</script>";
    
}
}
else if(isset($_POST["guide"])){
    //guide
    $email_id=$_POST["email_id"];
$password=$_POST["password"];
    $query="select * from shg where leader_email='$email_id' and leader_password='$password'";
    $run=mysqli_query($connect,$query);
    $count=mysqli_num_rows($run);
    if($count==1)
    {
        $row=mysqli_fetch_assoc($run);
        
        $_SESSION["user_name"]=$row["leader"];
        $_SESSION["type"]="shg";
        $_SESSION["email"]=$row["leader_email"];
        echo "<script>location.href='../index.php';</script>";
    }
    
else{ 
    echo "<script>alert('Username or Password of SHG is incorrect!');location.href='user_buyer_shg.php';</script>";
    
}
}
    













?>