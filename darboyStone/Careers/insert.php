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
		echo '<script type="text/javascript">alert("Alert: ' . $msg . '");</script>';
	  }
	/**
	 * Insert a new job description into the database
	 */
		
		if (isset($_POST['submit'])) {
	    $ok = true;
			
	    if (!isset($_POST['title']) || $_POST['title'] === '') {
	        $ok = false;
			jsErrorAlert("Title missing");
	    } else {
	        $title = $_POST['title'];
	    }
		if (!isset($_POST['description']) || $_POST['description'] === '') {
	        $ok = false;
			jsErrorAlert("Description missing");
	    } else {
	        $description = $_POST['description'];
	    }
		
		// Connect to the DB
    	$db = new mysqli('localhost', 'adamvh99_admin', 'apv0703','adamvh99_darboy');
		/* check connection */
		if ($db->connect_errno) {
			printf("Connect failed: %s\n", $db->connect_error);
			exit();
		}else{
			
		mysqli_autocommit($db, FALSE);

        $sql = sprintf("INSERT INTO jobs (title, description) 
        VALUES (
          '%s', '%s'
        )", mysqli_real_escape_string($db, $title),
        	mysqli_real_escape_string($db, $description));
			
		if ($db->query($sql) === TRUE) {
				jsErrorAlert("New record created successfully");
				mysqli_commit($db);
			} else {
				mysqli_rollback($db);	
				jsErrorAlert("Error: " . $sql . "<br>" . $db->error);
			}
		}
		
        mysqli_close($db);
		header('Location: ' . $_SERVER['HTTP_REFERER']);	
	    }else{
	    	jsErrorAlert("Something was wrong with your form");
	    }
	?>
	<div class="row row-centered">
		<div class="col-lg-6 col-xs-10 col-centered">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h3>Add New User</h3>
				</div>
				<div class="panel-body">
					<form method="post" action="">
						<label for='title'>Job Title:</label>
					    	<input type='text' name='title' class='userInput form-control' required value=''>
					    
					    <label for="description">Job Description:</label>
					   		<input type="text" name="description" class="userInput form-control" value="">
					    <input type="submit" class="btn btn-success" name="submit" value="Add Job">
				    </form>
			    </div>
		    </div>
	    </div>
    </div>
</body>
</html>