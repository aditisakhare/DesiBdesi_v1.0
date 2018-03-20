<?php
include 'connect.php';

$sql_category = "select * from category";
$res_category = mysqli_query($connect,$sql_category);

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script>
	function showUser(str) {
	    if (str == "") {
	        document.getElementById("txtHint").innerHTML = "";
	        return;
	    } else { 
	        if (window.XMLHttpRequest) {
	            // code for IE7+, Firefox, Chrome, Opera, Safari
	            xmlhttp = new XMLHttpRequest();
	        } else {
	            // code for IE6, IE5
	            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	        }
	        xmlhttp.onreadystatechange = function() {
	            if (this.readyState == 4 && this.status == 200) {
	                document.getElementById("txtHint").innerHTML = this.responseText;
	            }
	        };
	        xmlhttp.open("GET","item.php?q="+str,true);
	        xmlhttp.send();
	    }
	}

	function showUser1(str) {
	    if (str == "") {
	        document.getElementById("txtHint1").innerHTML = "";
	        return;
	    } else { 
	        if (window.XMLHttpRequest) {
	            // code for IE7+, Firefox, Chrome, Opera, Safari
	            xmlhttp = new XMLHttpRequest();
	        } else {
	            // code for IE6, IE5
	            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	        }
	        xmlhttp.onreadystatechange = function() {
	            if (this.readyState == 4 && this.status == 200) {
	                document.getElementById("txtHint1").innerHTML = this.responseText;
	            }
	        };
	        xmlhttp.open("GET","units.php?s="+str,true);
	        xmlhttp.send();
	    }
	}

	</script>
</head>
<body>
	<form method="post" action="check_existing_orders.php">
		<select name="category" onclick="showUser(this.value)">
		<?php
		while($row=mysqli_fetch_array($res_category)){
			echo '<option value="'.$row[0].'">'.$row[1].'</option>';
		}
		?>
		</select>

		<div id='txtHint'></div>
 		<div id='txtHint1'> </div>
		<!--
		<select name = "item">
		<?php
		//while($row=mysqli_fetch_array($res_item)){
		//	echo '<option value="'.$row[0].'">'.$row[1].'</option>';
		//}
		?>
			
		</select>
		<select name = "rawmaterial">
		<?php
		//while($row=mysqli_fetch_array($res_rawmaterialitems)){
		//	echo '<option value="'.$row[0].'">'.$row[3].'</option>';
		//}
		?>
		</select>
		-->
		<input type="text" placeholder="Enter Quantity Needed" name="qty">
		<input type="submit" name="check" value="Check">
	</form>
</body>
</html>
