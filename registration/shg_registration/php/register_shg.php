<?php

	if(isset($_POST['shg_name'])){
		require 'db.php';

		$shg_name = strip_tags($_POST['shg_name']);
		$member_count = strip_tags($_POST['member_count']);
		$leader = strip_tags($_POST['leader']);
		$contact = strip_tags($_POST['contact']);
		$aadhar = strip_tags($_POST['aadhar']);
		$address = strip_tags($_POST['address']);
		$city = strip_tags($_POST['city']);
		$district = strip_tags($_POST['district']);
		$state = strip_tags($_POST['state']);
		$zipcode = strip_tags($_POST['zipcode']);
		$product = strip_tags($_POST['product']);
		
		$sql = "INSERT INTO shg (shg_name, member_count, leader, contact_no, aadhar, address, district, city, state, zipcode, product) VALUES ('$shg_name', '$member_count', '$leader', '$contact', '$aadhar', '$address', '$district', '$city', '$state', '$zipcode', '$product')";

		if ( !$query = mysqli_query($conn , $sql) ) {
			echo "Error: Insert operation on shg table failed\n";
    		exit;
		}

		for ( $i = 0 ; $i < $member_count ; $i++ ) {

			$member_name = strip_tags($_POST['member_name-'.$i]);
			$member_age = strip_tags($_POST['age-'.$i]);
			$member_aadhar = strip_tags($_POST['aadhar-'.$i]);

			$sql = "INSERT INTO shg_member (name, age, aadhar) VALUES ('$member_name', '$member_age', '$member_aadhar')";

			if ( !$query = mysqli_query($conn , $sql) ) {
				echo "Error: Insert operation on shg_member table failed\n";
	    		exit;
			}
		}

	}
?>