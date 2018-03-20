<?php
	require 'php/db.php';
?>
<!DOCTYPE html>
<html>
	<head>
		
	</head>
	<body>
		<table style="width:100%">
		  <tr>
		    <th>S.No</th>
		    <th>State Name</th> 
		    <th>Officer Name</th>
		    <th>Email ID</th>
		    <th>Mobile Number</th>
		  </tr>
		  <?php include 'php/load_nodal_officers.php'; ?>
		</table>	
	</body>
</html>