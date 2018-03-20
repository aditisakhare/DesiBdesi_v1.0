<?php
$path="../";
include '../connect.php';
include '../header.php';
?>
<div class="content-wrapper">
<div class="container">
<div class="row pad-botm">
    <div class="col-md-12">
        <h4 class="header-line">SHGs Raw Material Request Id : <?php echo $_GET['request_id'];?> </h4>

    </div>
</div>
<div class="col-md-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            List of SHGs
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>SHG Name</th>
                            <th>Contact Number</th>
                            <th>Email</th>
                            <th>Quantity Requested</th>
                        </tr>
                    </thead>
                    <tbody>
<?php

$request_id = $_GET['request_id'];
$sql_groups_list = 'select * from request_groups where request_id = "'.$request_id.'"';
//echo $sql_groups_list;
$res_groups_list = mysqli_query($connect, $sql_groups_list);
while($row2=mysqli_fetch_array($res_groups_list)){
    echo '<tr>';
    $sql = "SELECT * FROM shg WHERE shg_id=$row2[1]";
    $shg_name = mysqli_fetch_array(mysqli_query($connect, $sql))[1];
    $shg_contact = mysqli_fetch_array(mysqli_query($connect, $sql))[6];
    $shg_email = mysqli_fetch_array(mysqli_query($connect, $sql))[5];
    echo'<td>'.$shg_name.'</td>';
    echo'<td>'.$shg_contact.'</td>';
    echo'<td>'.$shg_email.'</td>';
    echo '<td>'.$row2[5].'</td>';
    echo '</tr>';

}?>
</tbody>
</table>
<div class="panel-footer" >
    <div >
        <?php echo "<a href='send_quote.php?request_id=" . $_GET['request_id'] ." '> <input type='button' class='btn btn-danger' name='submit_shg' value='Send a Quotation'/> </a>";?>

    </div>
</div>
</div>
</div>
</div>
</div>
</div>

</body>
<!-- End  Basic Table  -->

<?php
include '../footer.php';
?>
