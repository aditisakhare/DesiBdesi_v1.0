<?php
	$sql = "SELECT * FROM `nodal_officers`";
	$query = mysqli_query($conn , $sql);

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