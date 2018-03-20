<?php
$path="../";
	include('connect.php');
	include('../header.php');
	$sql = "SELECT * FROM `nodal_officers`";
	$query = mysqli_query($connect , $sql);
?> 
<div class="panel panel-success" style="padding:5%">
<div class="panel-heading">
    Nodal Officers List
</div>
<div class="table-responsive">
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
<?php
	

	if ( $query ) {
		while($row = mysqli_fetch_assoc($query)){
			echo '<tr>
					<td>'
						.$row['s_no'].	
					'</td>
					<td>'
						.$row['state_name'].	
					'</td>
					<td>'
						.$row['officer_name'].	
					'</td>
					<td>'
						.$row['email_id'].	
					'</td>
					<td>'
						.$row['mobile_number'].	
					'</td>
				  </tr>';
		}
	}
	?>
</table></div></div>
<?php
	include('../footer.php');
?>
