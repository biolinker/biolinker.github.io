<?php 
	$dbc = mysqli_connect('localhost', 'root', '', 'aior') or die('Error in connecting to database');
	$first_name = $_POST['firstname'];
	$last_name = $_POST['lastname'];
	$phone_number = $_POST['phonenumber'];
	$email = $_POST['email'];
	
	$query = "INSERT INTO contact_information (first_name, last_name, phone_number, email) VALUES ('$first_name', '$last_name', '$phone_number', '$email')";
	
	mysqli_query($dbc, $query);
	
	echo 'Contact information saved.';
	
	mysqli_close($dbc);
	

?>