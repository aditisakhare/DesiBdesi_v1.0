<?php
include ('connect.php');

$query="select * from category order by category_name";
$run=mysqli_query($connect,$query);
    $options="";
    while($row=mysqli_fetch_assoc($run))
    {
        $options.= "<option value=".$row['category_id'].">".$row['category_name']."</option>";
    }
?>