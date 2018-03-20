<?php
include ('connect.php');

$query="select * from district_table order by district_name";
$run=mysqli_query($connect,$query);
    $options="";
    while($row=mysqli_fetch_assoc($run))
    {
        $options.= "<option value=".$row['district_id'].">".$row['district_name']."</option>";
    }
?>