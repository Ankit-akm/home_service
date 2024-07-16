<?php
error_reporting(0);
	$servername = "localhost";
	$username   = "root";
	$password   = "";
	$dbname    = "sih";

	$conn = mysqli_connect($servername,$username,$password,$dbname);

	if($conn)
	{
		echo "Connectio ok";
	}
	else{
		echo "Connection failed".mysqli_connect_error();
	}

?>