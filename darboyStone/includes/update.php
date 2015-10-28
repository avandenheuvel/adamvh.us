<?php
	session_start();
	define('_ROOT', "../");
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		DS&B Insert
	</title>
	<script src="../js/jquery.js" type="text/javascript"></script>
	<script src="../js/php_file_tree_jquery.js" type="text/javascript"></script>
	<script src="../js/bootstrap.js" type="text/javascript"></script>

	<link href="../styles/bootstrap.css"  rel="stylesheet"/>
	<link href="../styles/adamvh.css" rel="stylesheet" />
	
</head>
<body>
	<?php
	  include('../header.php');
	  
	  function jsErrorAlert($msg){
		echo '<script type="text/javascript">alert("ERROR: ' . $msg . '");</script>';
	  }

	/**
	 * Update data  modal into the database
	 */
		
		if (isset($_POST['submit'])) {
	    $ok = true;
		
		if (!isset($_POST['modalToUpdate']) || $_POST['modalToUpdate'] === '') {
	        $ok = false;
			jsErrorAlert("Required field missing.");
	    } else {
	        $modalToUpdate = $_POST['modalToUpdate'];
	    }
			
	    if (!isset($_POST['heading']) || $_POST['heading'] === '') {
	        $ok = false;
			jsErrorAlert("Required field missing.");
	    } else {
	        $heading = $_POST['heading'];
	    }
		
		if (!isset($_POST['genDesc']) || $_POST['genDesc'] === '') {
	        $ok = false;
			jsErrorAlert("Required field missing.");
	    } else {
	        $genDesc = $_POST['genDesc'];
	    }
		
	    if (!isset($_POST['webLink']) || $_POST['webLink'] === '') {
	        $ok = false;
			jsErrorAlert("Required field missing.");
	    } else {
	        $webLink = $_POST['webLink'];
	    }
	    
	    if (!isset($_POST['bullet1']) || $_POST['bullet1'] === '') {
	        $ok = false;
			jsErrorAlert("Required field missing.");
	    } else {
	        $bullet1 = $_POST['bullet1'];
	    }

		if (!isset($_POST['bullet2']) || $_POST['bullet2'] === '') {
	        $ok = false;
			jsErrorAlert("Required field missing.");
	    } else {
	        $bullet2 = $_POST['bullet2'];
	    }
		
		if (!isset($_POST['bullet3']) || $_POST['bullet3'] === '') {
	        $ok = false;
			jsErrorAlert("Required field missing.");
	    } else {
	        $bullet3 = $_POST['bullet3'];
	    }


		
		// Connect to the DB
		$db = new mysqli('localhost', 'adamvh99_admin', 'apv0703','adamvh99_darboy');
		/* check connection */
		if ($db->connect_errno) {
			printf("Connect failed: %s\n", $db->connect_error);
			exit();
		}else{
			
		mysqli_autocommit($db, FALSE);
		
		$sql = sprintf("
			UPDATE modal 
			SET heading='%s', genDesc='%s', vendorLink='%s', bullet1='%s', bullet2='%s', bullet3='%s'
	        WHERE imgPath='%s'",
	          mysqli_real_escape_string($db, $heading),
	          mysqli_real_escape_string($db, $genDesc),
	          mysqli_real_escape_string($db, $webLink),
	          mysqli_real_escape_string($db, $bullet1),
	          mysqli_real_escape_string($db, $bullet2),
	          mysqli_real_escape_string($db, $bullet3),
	          $modalToUpdate);
	        mysqli_query($db, $sql);
	    
	    echo'<p>Query complete</p>' . $sql;
			
		if ($db->query($sql) === TRUE && $basePath !== FALSE) {
				echo "Record Updated successfully";
				mysqli_commit($db);
			} else {
				mysqli_rollback($db);	
				echo "Error: " . $sql . "<br>" . $db->error;
			}
		}
		
	    mysqli_close($db);
			
	    }else{
	    	echo'<p>Something was wrong with your form</p>';
	    }
?>