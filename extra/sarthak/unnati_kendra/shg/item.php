<?php
	include 'connect.php';

	$cat = $_GET['q'];
	$sql_item = "select * from items where category_id='$cat'";
	$res_item = mysqli_query($connect,$sql_item);
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php
	while($row=mysqli_fetch_array($res_item)){
		echo '<option value="'.$row[0].'">'.$row[1].'</option>';

		}
	?>

	</select>

</body>
</html>
