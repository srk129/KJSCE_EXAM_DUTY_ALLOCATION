<?php 

	// connect to the database
	$conn = mysqli_connect('localhost', 'shreyak', 'test123', "examdata");
	// check connection
	if(!$conn){
		echo 'Connection error: '. mysqli_connect_error();
	}
?>