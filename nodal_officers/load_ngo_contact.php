<?php
$path="../";
	include('connect.php');
	include('../header.php');
	$sql = "SELECT * FROM `ngo`";
	$query = mysqli_query($connect , $sql);
?> 
<div class="panel panel-success" style="padding:5%">
<div class="panel-heading">
    NGO Contact List
</div>
<div class="table-responsive">
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
<?php
	

	if ( $query ) {
		while($row = mysqli_fetch_assoc($query)){
			echo '<tr>
					<td>'
						.$row['ngo_id'].	
					'</td>
					<td>'
						.$row['ngo_name'].	
					'</td>
					<td>'
						.$row['chairperson_name'].	
					'</td>
					<td>'
						.$row['office_phone'].	
					'</td>
					<td>'
						.$row['mobile_no'].	
					'</td>
				  </tr>';
		}
	}
	?>
</table></div></div>
<?php
	include('../footer.php');
?>
