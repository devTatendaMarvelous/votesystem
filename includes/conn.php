<?php
	$conn = new mysqli('localhost', 'id21523940_tait', '@Thetechiam03', 'id21523940_votesystem');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>