<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Around You</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- DATATABLE STYLE  -->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>
<?php
include 'connect.php';

//$sql_category = "select * from orders";
$sql_category = "SELECT * FROM `orders` ORDER BY completion_time DESC;";
$order_details = mysqli_query($connect,$sql_category);

?>
    
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           <center>View Recent Orders</center>  
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Order</th>
                                            <th>Group</th>
                                            <th>Price Agreed</th>
                                            <th>Advance Payment</th>
                                            <th>Terms and Conditions</th>
                                            <th>Completion Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <?php
                                        while($row=mysqli_fetch_array($order_details)){
                                            echo '<tr class="odd gradeX"><td>'.$row['order_id'].'</td>';
                                            echo '<td>'.$row['group_id'].'</td>';
                                            echo '<td>'.$row['price_agreed'].'</td>';
                                            echo '<td>'.$row['advance_payment'].'</td>';
                                            echo '<td>'.$row['terms_and_conditions'].'</td>';
                                            echo '<td>'.$row['completion_time'].'</td></tr>';
                                            //echo '<option value="'.$row[0].'">'.$row[1].'</option>';
                                        }
                                        ?>
                                            
                                        
                                        
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
    
      <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- DATATABLE SCRIPTS  -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
      <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>
</body>
</html>
