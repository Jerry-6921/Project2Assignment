<?php
	$name = $_POST['name'];
	$surname = $_POST['surname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	// Database Connection
	$DBConnect = new mysqli("localhost","root","","getserviced");
	
	if (!$DBConnect)
		$ErrorMsgs[] = "The database server is not available.";
		else
			echo "<p>Connection to getserviced is valid</p>";
		else{
			$sql= "SELECT name from gb_user WHERE email='{$Email}' AND password ='{$Password}'";
			//code unfinished, need to connect DB to loginPage.html
?>