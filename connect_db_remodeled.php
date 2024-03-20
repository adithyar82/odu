<?php
	$servername = "agitechsample.clbifhef4gsa.us-east-2.rds.amazonaws.com";
	$username = "handson";
	$password = "handsonhandson";
	$dbname = "Chkd_Web";

	// $servername = "handson-mysql";
	// $username = "kumar";
	// $password = "kumar";
	// $dbname = "CHKD_Web_Dev";

	// $servername = "handson-mysql";
	// $username = "kumar";
	// $password = "kumar";
	// $dbname = "=";

	//Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	//Check connection
	if ($conn->connect_error) {
    	die("Hi Dev Team your DB Connection for Patient details failed: " . $conn->connect_error);
	}
