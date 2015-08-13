<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		Contact me
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
		  //include('header.php');
		
		  if (isset($_POST['submit'])) {
		    $ok = true;
		    if (!isset($_POST['CustomerName']) || $_POST['CustomerName'] === '') {
		        $ok = false;
		    } else {
		        $CustomerName = $_POST['CustomerName'];
		    }
			if (!isset($_POST['State']) || $_POST['State'] === '') {
		        $ok = false;
		    } else {
		        $State = $_POST['State'];
		    }
		    if (!isset($_POST['eMail']) || $_POST['eMail'] === '') {
		        $ok = false;
		    } else {
		        $eMail = $_POST['eMail'];
		    }
		    if (!isset($_POST['Preferred']) || $_POST['Preferred'] === '') {
		        $Preferred = '';
		    } else {
		        $Preferred = $_POST['Preferred'];
		    }
		    if (!isset($_POST['FirstName']) || $_POST['FirstName'] === '') {
		        $FirstName = '';
		    } else {
		        $FirstName = $_POST['FirstName'];
		    }
			if (!isset($_POST['LastName']) || $_POST['LastName'] === '') {
		        $LastName = '';
		    } else {
		        $LastName = $_POST['LastName'];
		    }
			if (!isset($_POST['Phone']) || $_POST['Phone'] === '') {
		        $Phone = '';
		    } else {
		        $Phone = $_POST['Phone'];
		    }
			if (!isset($_POST['Preferred']) || $_POST['Preferred'] === '') {
		        $Preferred = '';
		    } else {
		        $Preferred = $_POST['Preferred'];
		    }
		
		    if ($ok) {
		
		        // Connect to the DB
		        	$db = mysqli_connect('localhost', 'adamvh99_Portal', 'apv0703','adamvh99_tech');

			        $sql = sprintf("INSERT INTO Op_PM_DB (
			        CustomerName, State, FirstName, LastName, eMail, Phone, Preferred) 
			        VALUES (
			          '%s', '%s', '%s', '%s', '%s','%s', '%s'
			        )", mysqli_real_escape_string($db, $CustomerName),
			        	mysqli_real_escape_string($db, $State),
			        	mysqli_real_escape_string($db, $FirstName),
			            mysqli_real_escape_string($db, $LastName),
			            mysqli_real_escape_string($db, $eMail),
			            mysqli_real_escape_string($db, $Phone),
						mysqli_real_escape_string($db, $Preferred));
			        
			        echo'<p>Query complete</p>';
		        
				mysqli_query($db, $sql);
				
		        mysqli_close($db);
				
		        echo '<p>Info added.</p>';
		    }else{
		    	echo'<p>Something was wrong with your form</p>';
		    }
		  }
		?>
		<div class="container">
			<div class="row row-centered">
				<div class="col-lg-6 col-xs-10 col-centered">
					<h4>Sign up here to have B&W MEGTEC Contact you when a technician is working nearby.</h4>
					<form method="post" action="">
						<label for='CustomerName'>Company Name:</label>
					    	<input type='text' name='CustomerName' class='userInput form-control' required value=''>
					    <label for='State'>State:</label>
					    	<input type='text' name='State' class='userInput form-control' required value=''>	
					    <label for="FirstName">First Name:</label>
					   		<input type="text" name="FirstName" class="userInput form-control" value="">
					    <label for="LastName">Last Name:</label>
					    	<input type="text" name="LastName" class="userInput form-control" value="">
				    	<label for='eMail'>E-Mail:</label>
					    	<input type='text' name='eMail' class='userInput form-control' required value=''>
				    	<label for='Phone'>Phone #:</label>
					    	<input type='text' name='Phone' class='userInput form-control'  value=''>
					    <label for='Preferred'>Preferred</label>
						    <select name='Preferred' class="userInput form-control" value=''>
						    	<option value="eMail">E-Mail</option>
						    	<option value="Phone">Phone</option>
						    </select>
					   </br>
					    <input type="submit" class="btn btn-success" name="submit" value="Submit">
					    
				    </form>
			    </div>
		    </div>
	    </div>
	</div>
</body>
</html>