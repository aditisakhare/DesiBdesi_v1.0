<?php
	include 'connect.php';

	$unit = $_GET['s'];
	$sql_unit = "select * from units where unit_id='$unit'";
	$res_unit = mysqli_query($connect,$sql_unit);
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
while($row=mysqli_fetch_array($res_unit)){
	echo '<input type="text" class="form-control" id="disabledInput"  value="'.$row[1].'">';
}
?>
		
		
	</select>
</body>
</html>

