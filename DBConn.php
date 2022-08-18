<?php
	$ErrorMsgs = array();
	$DBConnect = new mysqli("localhost","root","","getserviced");
	
	if (!$DBConnect)
		$ErrorMsgs[] = "The database server is not available.";
		else
			echo "<p>Connection to Task1 is valid</p>";
		?>