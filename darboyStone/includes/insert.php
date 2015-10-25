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
	  
		if ($_POST['createWhat']=="user"){	
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
				echo'isadmin TRUE= ' . $isAdmin;
		    } else {
		        $isAdmin = 0;
				echo'isadmin FALSE= ' . $isAdmin;
		    }
		
		    if ($ok) {
		        $hash = password_hash($password, PASSWORD_DEFAULT);
		
		        // Connect to the DB
		        	$db = new mysqli('localhost', 'adamvh99_admin', 'apv0703','adamvh99_darboy');
					/* check connection */
					if ($db->connect_errno) {
						printf("Connect failed: %s\n", $db->connect_error);
						exit();
					}else{
	
			        $sql = sprintf("INSERT INTO user (eMail, FirstName, LastName, Password, isAdmin) 
			        VALUES (
			          '%s', '%s', '%s', '%s', '%s'
			        )", mysqli_real_escape_string($db, $eMail),
			        	mysqli_real_escape_string($db, $FirstName),
			        	mysqli_real_escape_string($db, $LastName),
			            mysqli_real_escape_string($db, $hash),
						mysqli_real_escape_string($db, $isAdmin));
			        
			        echo'<p>Query complete</p>';
				
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
	  }
		
		
		
		function uploadImage(){
			//http://www.w3schools.com/php/php_file_upload.asp
			$target_dir = $_SERVER['DOCUMENT_ROOT'] . "/darboyStone/Fireplace/wood/img/";
			$target_file = $target_dir . ($_FILES["fileToUpload"]["name"]);
			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			// Check if image file is a actual image or fake image
			if(isset($_POST["submit"])) {
			    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
			    if($check !== false) {
			        echo "File is an image - " . $check["mime"] . ".";
			        $uploadOk = 1;
			    } else {
			        echo "File is not an image.";
			        $uploadOk = 0;
			    }
			}
			// Check if file already exists
			if (file_exists($target_file)) {
			    jsErrorAlert("Sorry, file already exists.");
			    $uploadOk = 0;
			}
			 // Check file size
			if ($_FILES["fileToUpload"]["size"] > 500000) {
			    jsErrorAlert("Sorry, your file is too large.");
			    $uploadOk = 0;
			 }
			// Allow certain file formats
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif" ) {
			    jsErrorAlert("Sorry, only JPG, JPEG, PNG & GIF files are allowed.");
			    $uploadOk = 0;
			}
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
			    jsErrorAlert("Sorry, your file was not uploaded.");
			// if everything is ok, try to upload file
			} else {
			    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
			        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded." . 
						" to " . $target_dir;
			    } else {
			        echo "Sorry, there was an error uploading your file:" . $target_file . " to: " . $target_dir;
			    }
			}
			if($uploadOk == 1){
				return $_FILES["fileToUpload"]["name"];
			}else{
				return FALSE;
			}
    		}
			
		
		/**
		 * Insert data from new modal into the database
		 */
		if($_POST['createWhat']=='modal'){//Hidden input indicating modal
			$fileName = uploadImage();
			$link_dir = "http://adamvh.us/darboyStone/Fireplace/wood/";
			$thumbLink = $link_dir . "imgThumb/" . $fileName;
			$lgImgLink = $link_dir . "img/" . $fileName;
			
			if (isset($_POST['submit'])) {
		    $ok = true;
				
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
			
			// Connect to the DB
	    	$db = new mysqli('localhost', 'adamvh99_admin', 'apv0703','adamvh99_darboy');
			/* check connection */
			if ($db->connect_errno) {
				printf("Connect failed: %s\n", $db->connect_error);
				exit();
			}else{
				
			mysqli_autocommit($db, FALSE);
	
	        $sql = sprintf("INSERT INTO modal (heading, imgPath, lgImgPath, genDesc, vendorLink) 
	        VALUES (
	          '%s', '%s', '%s', '%s', '%s'
	        )", mysqli_real_escape_string($db, $heading),
	        	mysqli_real_escape_string($db, $thumbLink),
	        	mysqli_real_escape_string($db, $lgImgLink),
	        	mysqli_real_escape_string($db, $genDesc),
				mysqli_real_escape_string($db, $webLink));//$target file defined in img upload sequence above
	        
	        echo'<p>Query complete</p>';
				
			if ($db->query($sql) === TRUE && $basePath !== FALSE) {
					echo "New record created successfully";
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
	    }
	?>
</body>
</html>