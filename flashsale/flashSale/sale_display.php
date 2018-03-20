<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FLASH SALE</title>
    
</head>
<body>
<?php
//include 'shg_header.php';
$path="../";
include '../header.php';
?>
<div class="content-wrapper">
<div class="container">
<div class="row pad-botm">
    <div class="col-md-12">
    <center><h3 class="header-line"> FLASH SALE <img src="images/sale.png" height="100px"></h3> </center>
</div>
<?php
include 'connect.php';
$sql_category = "select * from sale";
$sale_result = mysqli_query($connect,$sql_category);
if($sale_result) {
        while($row = mysqli_fetch_assoc($sale_result) ) {
                $pro_Name = $row['pro_name'];
                $end_date = $row['end_date'];
                $discounted_price = $row['discounted_price'];
                $currency = $row['currency'];
                $charges = $row['charges'];
                $description = $row['description'];
                $img = $row['image'];
                $shg = $row['shg_name'];
                $contact = $row['contact'];
        //echo $img;



    echo '<div class="col-md-4 col-sm-4">
        <div class="panel panel-default">
            <div class="panel-heading">';
               echo $shg;
            echo '</div>
            <div class="panel-body">
                <center><img src="';
                echo $img;
                echo '" height="100px" width="100px"/></center><br>
                <p class="wella">Item : <strong>';
                echo $pro_Name;
                echo '</strong></p><p class="wella">Discounted Rate : ₹ ';
                echo $discounted_price;
                echo '</p>
                <p class="wella">Description : ';
                echo $description;
                echo '</p>
                <p class="wella">Contact Details : ';
                echo $contact;
                echo '</p>
               
            </div>
            <div class="panel-footer" >
                <div >
                   
                </div>
            </div>
        </div>
    </div>';

}
}

?>




</div>
</div>
</div>

<?php
include '../footer.php'; ?>
</body>
</html>
