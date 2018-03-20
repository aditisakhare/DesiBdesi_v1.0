<?php
include ('connect.php');

$array = array(
	array("1",1000),
	array("2",2000),
	array("3",3000),
	array("4",4000),
);

$ser = serialize($array);

mysqli_query($connect, "insert into rawmaterialorders(raw_id,start_date,end_date,qty_list,order_status) values()")

/*



*/