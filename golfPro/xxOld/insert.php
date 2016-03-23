<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		Add User
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
		    if (!isset($_POST['email']) || $_POST['email'] === '') {
		        $ok = false;
				$_SESSION['message']+='email not set';
				echo"<script>$('#messageModal').modal('show');</script>";
		    } else {
		        $email = $_POST['email'];
		    }
			if (!isset($_POST['username']) || $_POST['username'] === '') {
		        $ok = false;
				$_SESSION['message']+='username not set';
				echo"<script>$('#messageModal').modal('show');</script>";
		    } else {
		        $username = $_POST['username'];
		    }
		    if (!isset($_POST['password']) || $_POST['password'] === '') {
		        $ok = false;
		        $_SESSION['message']+='password not set';
		        echo"<script>$('#messageModal').modal('show');</script>";
		    } else {
		        $password = $_POST['password'];
		    }
		    if (isset($_POST['isAdmin']) && $_POST['isAdmin']==1 ) {
				$isAdmin = 1;
				//$_SESSION['message']'isadmin TRUE= ' . $isAdmin;
		    } else {
		        $isAdmin = 0;
				//$_SESSION['message']'isadmin FALSE= ' . $isAdmin;
		    }
		
		    if ($ok) {
		        $hash = password_hash($password, PASSWORD_DEFAULT);
		
		        // Create and Connect to the DB
		        	include('_dbConnect.php');

						$sql = sprintf("INSERT INTO user (username, email, password) 
						VALUES (
						  '%s', '%s', '%s'
						)", mysqli_real_escape_string($db, $username),
							mysqli_real_escape_string($db, $email),
							mysqli_real_escape_string($db, $hash));
													
						//mysqli_query($db, $sql);
						
						if ($db->query($sql) === TRUE) {
							$_SESSION['message']+= "New record created successfully";
							echo"<script>$('#messageModal').modal('show');</script>";
						} else {
							$_SESSION['message']+= "Error: " . $sql . "<br>" . $db->error;
							echo"<script>$('#messageModal').modal('show');</script>";
						}
					}
				
		        mysqli_close($db);
				
		    }else{
		    	$_SESSION['message']+='Something was wrong with your form';
				echo"<script>$('#messageModal').modal('show');</script>";
		    }
		  
		?>
		<div class="container">
			<div class="row row-centered">
				<div class="col-lg-6 col-xs-10 col-centered">
					<form method="post" action="">
						<label for='username'>User Name:</label>
					    	<input type='text' name='username' class='userInput form-control' required value=''>
					    <label for="email">E-mail:</label>
					   		<input type="text" name="email" class="userInput form-control" value="">
					    <label for="password">Password:</label>
					    	<input type="text" name="password" class="userInput form-control" value="">
					    <br><h4><input type='checkbox' name='isAdmin' value='1' /> Administrator</h4><br>
					    
					    <input type="submit" class="btn btn-success" name="submit" value="Add User">
					    
				    </form>
			    </div>
		    </div>
	    </div>
	</div>
</body>
</html>