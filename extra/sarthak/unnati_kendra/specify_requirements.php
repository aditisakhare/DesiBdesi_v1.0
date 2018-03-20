<?php
include 'connect.php';

$sql_category = "select * from category";
$res_category = mysqli_query($connect,$sql_category);
$sql_item = "select * from item";
$res_item = mysqli_query($connect,$sql_item);
$sql_rawmaterialitems = "select * from rawmaterialitems";
$res_rawmaterialitems = mysqli_query($connect,$sql_rawmaterialitems);
?>





<form method="post" action="check_existing_orders.php">
	<select name="category">
	<?php
	while($row=mysqli_fetch_array($res_category)){
		echo '<option value="'.$row[0].'">'.$row[1].'</option>';
	}
	?>
	</select>
	<select name = "item">
	<?php
	while($row=mysqli_fetch_array($res_item)){
		echo '<option value="'.$row[0].'">'.$row[1].'</option>';
	}
	?>
		
	</select>
	<select name = "rawmaterial">
	<?php
	while($row=mysqli_fetch_array($res_rawmaterialitems)){
		echo '<option value="'.$row[0].'">'.$row[3].'</option>';
	}
	?>
	</select>
	<input type="text" placeholder="Enter Quantity Needed" name="qty">
	<input type="submit" name="check" value="Check">
</form>