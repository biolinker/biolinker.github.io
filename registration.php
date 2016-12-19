<?php 
	$dbc = mysqli_connect('localhost', 'root', '', 'aior') or die('Error in connecting to database');
	
	$first_name = $_POST['firstname'];
	$last_name = $_POST['lastname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$gender = $_POST['gender'];
	$month = $_POST['month'];
	$day = $_POST['day'];
	$year = $_POST['year'];
	
	$query = "INSERT INTO registration (first_name, last_name, email, password, gender, month, day, year) " . 
					"VALUES ('$first_name', '$last_name', '$email', '$password', '$gender', '$month', '$day', '$year')";
	
	mysqli_query($dbc, $query);
	
	mysqli_close($dbc);
					
	echo 'User added.';				
					
?>