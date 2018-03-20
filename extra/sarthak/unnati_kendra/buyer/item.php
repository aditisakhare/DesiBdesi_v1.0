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
	<select name = "item" onclick="showUser1(this.val)">
	<?php
	while($row=mysqli_fetch_array($res_item)){
		echo '<option value="'.$row[0].'">'.$row[1].'</option>';
	?>
	<script type="text/javascript">
		val = <?php echo $row[3]; ?>;
	</script>
	<?php

		}
	?>
		
	</select>
	
</body>
</html>

