<?php
  session_start();

$message = '';
if(!isset($_SESSION['user'])){
	
	if(empty($_POST['eMail'])){
		showForm("Please Log in");
		exit();
	}else{
		$eMail=$_POST['eMail'];
	}
	
	if(empty($_POST['password'])){
		showForm("You mush enter a password");
		exit();
	}else{
		$password=$_POST['password'];
	}
	
	if (isset($_POST['eMail']) && isset($_POST['password'])) {
	    $db = mysqli_connect('localhost', 'adamvh99_admin', 'apv0703','adamvh99_darboy');
	    $sql = sprintf("SELECT * FROM user WHERE eMail='%s'",
	        mysqli_real_escape_string($db, $_POST['eMail'])
	    );
	    $result = mysqli_query($db, $sql);
	    $row = mysqli_fetch_assoc($result);
	    if ($row) {
	        $hash = $row['Password'];
	        $isAdmin = $row['isAdmin'];
	
	        if (password_verify($_POST['password'], $hash)) {
	            $message = 'Login successful.';
				
	            $_SESSION['user'] = $row['eMail'];
	            $_SESSION['Administrator'] = $row['isAdmin'];
				$_SESSION['FirstName']=$row['FirstName'];
				$_SESSION['LastName']=$row['LastName'];
				$_SESSION['firstLogin']=$row['forcePWchange'];
				//Add First and Last names
	        } else {
	            $message = 'Wrong password';
	            $message = $message.$hash.' / '.$_POST['password'];
				showForm($message);
				
				exit();
	        }
	    } else {
	        $message = 'Login failed.';
			showForm($message);
			exit();
	    }
		header("Location: http://adamvh.us/darboyStone");
		showForm($message);
	    mysqli_close($db);
	}
}


function showForm($message){
	?>	
	
	<!DOCTYPE html>

	<html lang="en">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>
			New Darboy Stone & Brick
		</title>
	
	
		<link href="styles/bootstrap.css"  rel="stylesheet"/>
		<link href="styles/adamvh.css" rel="stylesheet" />
		
		<script src="js/jquery.js" type="text/javascript"></script>
		<script src="js/bootstrap.js" type="text/javascript"></script>
		
	</head>
		<body style="background-image: url('./img/qf2rj.gif'); background-size: 100%;">
			
			<?php
				include("header.php");
			?>
			
			<div class="container">
			<div class="row">
			<div class="col-md-6 col-md-offset-3 col-xs-10 col-xs-offset-1">
			<div class="panel panel-info">
				<div class="panel-heading">
					<?php
					echo "<h3>$message</h3>";
					?>
				</div>
				<div class="panel-body">
				<form name="userInput" method="post" action="">
				    <div class="form-group">
				    	<label for="eMail">User E-mail</label>
				    	<input type="text" name="eMail" class="userInput form-control" required>
				    </div>
				    <div class="form-group">
				    	<label for="password">Password</label>
				    	<input type="password" name="password" class="userInput form-control" required>
				    </div>
			    	<div class="form-group">
			    		<input type="submit" method="post" value="Login" class="btn btn-success">
			    	</div>
				</form>
				</div>
			</div>
		</div>
		</div>
		</div>
		</body>
	</html>
<?php
	}
?>