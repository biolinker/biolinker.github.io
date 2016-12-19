<?php 
	$dbc = mysqli_connect('localhost', 'root', '', 'aior') or die('Error in connecting to database');
	
	$resume = $_POST['resume'];
	
	$query = "INSERT INTO biography (resume) VALUES ('$resume')";
	
	mysqli_query($dbc, $query);
	
	echo 'Biography has been added.'
	
	mysqli_close($dbc);


?>