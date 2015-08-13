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
	    $db = mysqli_connect('localhost', 'adamvh99_Portal', 'apv0703','adamvh99_tech');
	    $sql = sprintf("SELECT * FROM CustomerInfo WHERE eMail='%s'",
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
				showForm($message);
				exit();
	        }
	    } else {
	        $message = 'Login failed.';
			showForm($message);
			exit();
	    }
	    mysqli_close($db);
	}
}


function showForm($message){
	?>
		<body>
			
			<div class="vertical-center">
				<div class="container">
					<div class="row row-centered">
						<div class="col-lg-6 col-xs-10 col-centered">
							<?php
							echo "<h3>$message</h3>";
							?>
						</div>
					</div>
					<form name="userInput" method="post" action="" style="height: 0px; margin-bottom: 0px;">
						<div class="row row-centered">
							<div class="col-lg-6 col-xs-10 col-centered">
							    <label for="eMail">User E-mail</label>
							    	<input type="text" name="eMail" class="userInput form-control" required>
							    <label for="password">Password</label>
							    	<input type="password" name="password" class="userInput form-control" required>
						    </div>
					  	</div>
					   </br>
					  	<div class="row row-centered">
					  		<div class="col-lg-6 col-xs-10 col-centered">
						    	<input type="submit" method="post" value="Login" class="btn btn-success">
						    </div>
					   </div>
					</form>
				</div>
			</div>
		</body>
		
<?php
	}
?>