<?php
	$db = mysqli_connect('localhost', 'adamvh99_admin','apv0703','adamvh99_golfPro');
	
	if (!$db) {
	    $message+= "Error: Unable to connect to MySQL." . PHP_EOL;
	    $message+= "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
	    $message+= "Debugging error: " . mysqli_connect_error() . PHP_EOL;
	    exit;
	}
	
	$message+= "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
	$message+= "Host information: " . mysqli_get_host_info($db) . PHP_EOL;
?>