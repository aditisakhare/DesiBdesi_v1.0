<?php
include 'connect.php';
/*Orders can be made once in a fortnight.

Orders made before 15th midnight will be finalized on 15th.
You can also order on urgent basis from the shopping cart view.
include 'connect.php';
*/

//If order doesnt exist then you create one.
$rawmaterialid = $_POST['rawmaterial'];
$sql = 'select * from rawmaterialrequests where raw_id = "'.$rawmaterialid.'" and order_status=0';
$res = mysqli_query($connect,$sql);

echo mysqli_num_rows($res);
while($row=mysqli_fetch_array($res)){

	/*echo "Hello : ";
	$array = array(
		array("1",1000),
		array("2",2000),
		array("3",3000),
		array("4",4000),
		);
	$ser = serialize($array);
	print_r($array);
	echo $ser;*/
}


if(isset($_POST['check']))
{
	echo $_POST['category'];
	echo $_POST['item'];
	echo $_POST['rawmaterial'];
	echo $_POST['qty'];

	//MySQL code to find orders in current area of same item

	//If not found create
	
	//Else add to the orders
	
	//This will be added as a posting


}


?>