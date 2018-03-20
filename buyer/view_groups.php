<?php
$path="../";
include '../connect.php';
include '../header.php';
?>
<div class="content-wrapper">
<div class="container">
<div class="row pad-botm">
    <div class="col-md-12">
        <h4 class="header-line">Groups Interested in Advertisement ID : <?php echo $_GET['adv_id'];?> </h4>

    </div>
</div>

<?php

$adv_id = $_GET['adv_id'];
//echo "Adv id ".$adv_id;
$sql_groups_list = 'select * from groups where adv_id = "'.$adv_id.'"';
$res_groups_list = mysqli_query($connect, $sql_groups_list);
//Then find members list, price quote by group_id
//echo $sql_groups_list;
while($row2=mysqli_fetch_array($res_groups_list)){

    //echo "Found group <br>";
    //Fetch Groups Servicing Adv
    $group_id = $row2[0];
    //echo $group_id;
    $sql_shgs_list = 'select * from interested_shgs where group_id = "'.$group_id.'"';
    //echo $sql_shgs_list;
    $res_shgs_list = mysqli_query($connect, $sql_shgs_list);
    echo '<div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Group ID : '.$group_id.'
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>SHG Name</th>
                                <th>Contact Number</th>
                                <th>Email</th>
                                <th>Quantity Committed</th>
                                <th>District</th>
                            </tr>
                        </thead>
                        <tbody>';
    while($row3 =mysqli_fetch_array($res_shgs_list)){
        $sql = "SELECT * FROM shg WHERE shg_id=$row3[1]";
        $shg_name = mysqli_fetch_array(mysqli_query($connect, $sql))[1];
        $shg_contact = mysqli_fetch_array(mysqli_query($connect, $sql))[6];
        $shg_email = mysqli_fetch_array(mysqli_query($connect, $sql))[5];


        $sql = "SELECT * FROM district_table WHERE district_id=$row3[5]";
        $district_name = mysqli_fetch_array(mysqli_query($connect, $sql))[1];

        echo '<tr>';
        echo '<td>'.$shg_name.'</td>';
        echo '<td>'.$shg_contact.'</td>';
        echo '<td>'.$shg_email.'</td>';
        echo '<td>'.$row3['3'].'</td>';
        //echo '<td>'.$row3['4'].'</td>';
        echo '<td>'.$district_name.'</td>';
        echo '<tr>';
    }
        ?>




                            </tbody>
                        </table>
                        <button type="submit" class="btn btn-primary" name="placeorder" value="placeorder">Place Order</button>
                    </div>
                </div>
            </div>
                          <!-- End  Basic Table  -->
        </div>

<?php



}
?>
</div>
</div>
<?php
include '../footer.php';
?>
