<?php 
	$dbc = mysqli_connect('localhost', 'root', '', 'aior') or die('Error in connecting to database');
	
	$biography = $_POST['biography'];
	
	$query = "INSERT INTO biography (biography) VALUES ('$biography')";
	
	$retrieve_data = "SELECT * FROM biography";
	$result = mysqli_query($dbc, $retrieve_data) or die('Error in retrieving data.');
	$row = mysqli_fetch_array($result);
	
	mysqli_query($dbc, $query);
	
	
	
	echo 'Biography has been added.<br /><br />';
	
	echo "$row";
	
	
	mysqli_close($dbc);


?>