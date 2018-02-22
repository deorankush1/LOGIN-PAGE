<?php

	$servername ="localhost";
	$username = "root";
	$password ="123456";
	$database_name = "LoginDetails";

	$conn1 = mysqli_connect($servername, $username, $password, $database_name);
	 
	// Check connection
	if($conn1 === false){
	    die("ERROR: Could not connect. " . mysqli_connect_error());
	}
?>
