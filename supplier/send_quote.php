
<?php
$path="../";

include '../header.php';
?>
<div class="content-wrapper">
<div class="container">
<div class="row pad-botm">
    <div class="col-md-12">
        <h4 class="header-line">Send Quotation</h4>

</div>
<?php




$request_id = $_GET['request_id'];


//$sql_check = "SELECT * FROM interested_shgs WHERE adv_id=$adv_id AND shg_id=$shg_id";
//$res_check = mysqli_query($connect, $sql_check);

    echo '<body>

    <div class="row">

        <div class="col-md-12" style="padding-left:15%;padding-top:5%;padding-right:15%;padding-bottom:5%">

            <div class="panel panel-danger">
                <div class="panel-heading">
                    Send a quotation to SHGs
                </div>
                <div class="panel-body">
                    <form role="form" name="capacity_form" action="" method="post">
                        <div class="form-group">
                             <label>No. of Units You Will Supply</label>
                             <input class="form-control" id="capacity" type="number" name="capacity"/>

                        </div>
                        <div class="form-group" style="display:none">
                             <label>Your Price Per Unit</label>
                             <input class="form-control" type="number" value="999" name="price_per_unit" id="price_per_unit" />

                        </div>
                        <input type="submit" class="btn btn-danger" name="submit_capacity" id="submit_capacity">

                    </form>
                </div>
            </div>
        </div>
    </div>
    </body>
';
    if (isset($_POST['submit_capacity'])) {
        echo "<script>document.getElementById('form_div').style.display = 'none';</script>";
        //echo "<script>alert('submit capacity clicked');</script>";
        $sql = "SELECT * FROM buyer_adv_post WHERE adv_id=$adv_id";
        $res = mysqli_query($connect, $sql);
        $capacity = $_POST['capacity'];
        $price_per_unit = $_POST['price_per_unit'];
        $proposed_price = $capacity * $price_per_unit;
        if (mysqli_num_rows($res) < 1) {
            echo "<script>alert('WRONG ADVERTISE SELECTED'); window.location='shg_homepage.php'</script>";
        } else {
            echo "<br>Putting in interested_shgs list<br>";

            $sql_groups = "SELECT * FROM groups WHERE district_id=$shg_district_id AND adv_id=$adv_id";
            $res_groups = mysqli_query($connect, $sql_groups);
            $row_groups = mysqli_fetch_array($res_groups);
            if($row_groups['remaining_quantity'] < $threshold_capacity_to_stop_order)
            {
                echo "<script>alert('ORDERS FOR THIS ADVERTISE ARE NO LONGER ACCEPTED, PLEASE TRY OTHER ADVERTISE.'); window.location='shg_homepage.php';</script> ";
            }
            else if (mysqli_num_rows($res_groups) < 1) {
                //NO previous entry of nearby SHG's found, make a new group
                echo "<br>No previous groups of this district found, making one now<br>";
                $sql_groups_insert = "INSERT INTO `groups` (`group_id`, `adv_id`, `district_id`, `remaining_quantity`,  `shg_id_leader`, `proposed_price`, `confirmation_status`) VALUES (NULL, '$adv_id', '$district_id', '$quantity' ,'$shg_id', '$proposed_price', '0');";
                //echo $sql_groups_insert;
                if (mysqli_query($connect, $sql_groups_insert)) {
                    echo "GROUP SUCCESSFULLY CREATED";
                } else {
                    echo "GROUP COULDNT BE CREATED";
                }
            }

            //Extract Group no of the same district SHG's interested in same advertisement
            $sql_groups = "SELECT * FROM groups WHERE district_id=$shg_district_id AND adv_id=$adv_id";
            $res_groups = mysqli_query($connect, $sql_groups);

            echo "SHG's in your area trying to get this advertisement";
            $row_groups = mysqli_fetch_array($res_groups);
            $group_id = $row_groups['group_id'];
            echo "<br>GROUP ID assigned : " . $group_id;

            $sql_groups_remaining_update = "UPDATE `groups` SET `remaining_quantity`=`remaining_quantity`-$capacity WHERE group_id=$group_id ";
            mysqli_query($connect, $sql_groups_remaining_update);
            //INSERT THEM IN INTERESTED BUYERS
            $sql_interested_shgs = "INSERT INTO `interested_shgs` (`adv_id`, `shg_id`, `group_id`, `commited_quantity`, `price_per_unit`, `district_id`) VALUES ('$adv_id', '$shg_id', '$group_id', '$capacity', '$price_per_unit', '$district_id');";
            mysqli_query($connect, $sql_interested_shgs);
        }

    }



?>
</div></div>
<?php
include '../footer.php';
?>
