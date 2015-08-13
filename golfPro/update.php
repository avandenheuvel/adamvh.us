<?php

session_start();

	if (isset($_GET['id']) && ctype_digit($_GET['id'])) {
		$id=$_GET['id'];
		$db = mysqli_connect('localhost', 'adamvh99_Portal', 'apv0703','adamvh99_tech');
		$sql = "SELECT * FROM CustomerInfo WHERE CustomerID=$id";
		$result = mysqli_query($db, $sql);
		$row=mysqli_fetch_assoc($result);
		
		$eMail=$row['eMail'];
		$firstName=$row['FirstName'];
		$lastName=$row['LastName'];
		
		mysqli_close($db);
  } else {
		$eMail = $_SESSION['user'];
		$firstName=$_SESSION['FirstName'];
		$lastName=$_SESSION['LastName'];
  }
  
?><!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Update User</title>
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
	
	  
	  $password = '';
	  $isAdmin = '';
	  $firstLogin='';//0 = not first, 1= first login. Request Change
	
	  if (isset($_POST['submit'])) {
	    $ok = true;
		 /* echo'<p>form submitted</p>';
	    if (!isset($_POST['eMail']) || $_POST['eMail'] === '') {
	        $ok = false;
	    } else {*/
	    $eMail = $_SESSION['user'];//$_POST['eMail'];
	    
		if (!isset($_POST['FirstName']) || $_POST['FirstName'] === '') {
	        echo'<p>Problem with first name</p>';	
	        $ok = false;
	    } else {
	        $firstName = $_POST['FirstName'];
	    }
		if (!isset($_POST['LastName']) || $_POST['LastName'] === '') {
	        echo'<p>Problem with last name</p>';	
	        $ok = false;
	    } else {
	        $lastName = $_POST['LastName'];
	    }
	    if (!isset($_POST['password']) || $_POST['password'] === '') {
	        echo'<p>Problem with password</p>';	
	        $ok = false;
	    } else {
	        $password = $_POST['password'];
	    }
		/*
	    if (!isset($_POST['isAdmin']) ) {
			$isAdmin = 0;
	    } else {
	        $isAdmin = 1;
	    }
	
		 */
	
	    if ($ok) {
	    	/*echo'<p>Post okay</p>';*/
	        $hash = password_hash($password, PASSWORD_DEFAULT);
			
	         // add database code here
	        try{
	        	$db = mysqli_connect('localhost', 'adamvh99_Portal', 'apv0703','adamvh99_tech');
				echo'<a href="http://adamvh.us/megtec">Take me to the library!</a>';
			}catch(mysqli_sql_exception $e){
				throw $e;
			}
	        $sql = sprintf("UPDATE CustomerInfo SET password='%s', FirstName='%s', LastName='%s', forcePWchange='%s'
	          WHERE eMail='%s'",
	          mysqli_real_escape_string($db, $hash),
	          mysqli_real_escape_string($db, $firstName),
	          mysqli_real_escape_string($db, $lastName),
	          mysqli_real_escape_string($db, $firstLogin),
	          $eMail);
	        mysqli_query($db, $sql);
	        
	        mysqli_close($db);
	    }
	    }
	?>
	<div class="container">
		<div class="row row-centered">
			<div class="col-lg-6 col-xs-10 col-centered">
				<form method="post" action="">
					<?php
						//Force password update if first login
						if($_SESSION['firstLogin']==1){
							$firstLogin=0;
							$_SESSION[firstLogin]=$firstLogin;
							echo "<h4>It looks like this is the first time you logged in. Please update your Password</h4></br>";
						}
						//Allow administrator to update any account
						if($_SESSION['Administrator']==1){
							echo "<label for='eMail'>E-Mail:</label>
				    					<input type='text' name='eMail' class='userInput form-control' required 
				    					value=' ".htmlspecialchars($eMail) . "'>";
						}else{
							echo "<h4>Update account for: " . htmlspecialchars($eMail)."</h4>";
						}
					?>
				    <label for="FirstName">First Name:</label>
				    <input type="text" name="FirstName" class="userInput form-control" 
				    					value="<?php echo htmlspecialchars($firstName);?>">
				    <label for="LastName">Last Name:</label>
				    <input type="text" name="LastName" class="userInput form-control"
				    					value="<?php echo htmlspecialchars($lastName);?>">
				    <label for="password">Password:</label>
				    <input type="password" class="userInput form-control" name="password">
				    <?php 
				    	if($_SESSION['Administrator']==1){
				    		echo "<br><input type='checkbox' name='isAdmin' value'' /> Administrator<br>";
				    	}
				    ?>
				    <br>
				    <input type="submit" class="btn btn-success" name="submit" value="Update">
				</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>
