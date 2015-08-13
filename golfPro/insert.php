<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		Add Technician
	</title>
	<script src="js/jquery.js" type="text/javascript"></script>
	<script src="js/php_file_tree_jquery.js" type="text/javascript"></script>
	<script src="js/bootstrap.js" type="text/javascript"></script>

	<link href="styles/bootstrap.css"  rel="stylesheet"/>
	<link href="styles/fileTree/default.css"  rel="stylesheet"/>
	<link href="styles/adamvh.css" rel="stylesheet" />
	
</head>
<body>
	<div class="container">
		<?php
		  include('header.php');
		
		  $eMail = '';
		  $password = '';
		
		  if (isset($_POST['submit'])) {
		    $ok = true;
		    if (!isset($_POST['eMail']) || $_POST['eMail'] === '') {
		        $ok = false;
				echo'email not set';
		    } else {
		        $eMail = $_POST['eMail'];
		    }
			if (!isset($_POST['FirstName']) || $_POST['FirstName'] === '') {
		        $ok = false;
				echo'FirstName not set';
		    } else {
		        $FirstName = $_POST['FirstName'];
		    }
		    if (!isset($_POST['LastName']) || $_POST['LastName'] === '') {
		        $ok = false;
				echo'LastName not set';
		    } else {
		        $LastName = $_POST['LastName'];
		    }
		    if (!isset($_POST['password']) || $_POST['password'] === '') {
		        $ok = false;
		        echo'password not set';
		    } else {
		        $password = $_POST['password'];
		    }
		    if (isset($_POST['isAdmin']) && $_POST['isAdmin']==1 ) {
				$isAdmin = 1;
				//echo'isadmin TRUE= ' . $isAdmin;
		    } else {
		        $isAdmin = 0;
				//echo'isadmin FALSE= ' . $isAdmin;
		    }
		
		    if ($ok) {
		        $hash = password_hash($password, PASSWORD_DEFAULT);
		
		        // Create and Connect to the DB
		        	$db = new mysqli('localhost', 'adamvh99_admin', 'apv0703','adamvh99_golfPro');
					/* check connection */
					if ($db->connect_errno) {
						printf("Connect failed: %s\n", $db->connect_error);
						exit();
					}else{

						$sql = sprintf("INSERT INTO tblUser (tblUserEMail, tblUserFirstName, tblUserLastName, tblUserPassword) 
						VALUES (
						  '%s', '%s', '%s', '%s'
						)", mysqli_real_escape_string($db, $eMail),
							mysqli_real_escape_string($db, $FirstName),
							mysqli_real_escape_string($db, $LastName),
							mysqli_real_escape_string($db, $hash));
							
							//mysqli_real_escape_string($db, $isAdmin));
						
						mysqli_query($db, $sql);
						
						if ($db->query($sql) === TRUE) {
							echo "New record created successfully";
						} else {
							echo "Error: " . $sql . "<br>" . $db->error;
						}
					}
				
		        mysqli_close($db);
				
		    }else{
		    	echo'<p>Something was wrong with your form</p>';
		    }
		  }
		?>
		<div class="container">
			<div class="row row-centered">
				<div class="col-lg-6 col-xs-10 col-centered">
					<form method="post" action="">
						<label for='eMail'>E-Mail:</label>
					    	<input type='text' name='eMail' class='userInput form-control' required value=''>
					    
					    <label for="FirstName">First Name:</label>
					   		<input type="text" name="FirstName" class="userInput form-control" value="">
					    <label for="LastName">Last Name:</label>
					    	<input type="text" name="LastName" class="userInput form-control" value="">
					    <label for="password">Password:</label>
					    	<input type="password" class="userInput form-control" name="password">
					    
					    <br><h4><input type='checkbox' name='isAdmin' value='1' /> Administrator</h4><br>
					    
					    <input type="submit" class="btn btn-success" name="submit" value="Add User">
					    
				    </form>
			    </div>
		    </div>
	    </div>
	</div>
</body>
</html>