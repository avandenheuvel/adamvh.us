<?php
	session_start();
	echo '<script language="javascript">';
	echo 'alert("login.php called")';
	echo '</script>';
	$user = $_POST['username'];
	$pass = $_POST['password'];
	
	if($user=="" or $pass==""){
		echo "0";	
	} else {
		
	include('./dbconnect.php');
	

	try {
		$queryString = "SELECT UserID, User_FName, User_LName, User_Password, User_Role FROM tblusers WHERE User_Username = :username";
		$db = new PDO($dsn, $username, $password, $options);
		$query = $db->prepare($queryString); 
		$query -> bindParam(':username', $user);
		$query->execute();
		$row = $query->fetch();
		
		if ($row == NULL) {
			echo "0";
		} else {
			$pwd=$row['User_Password'];
			if($pwd==$pass){
				$_SESSION['id']=$row['UserID'];
				$_SESSION['fname']=$row['User_FName'];
				$_SESSION['lname']=$row['User_LName'];
				$_SESSION['username']=$user;
				$_SESSION['role']=$row['User_Role'];
				$_SESSION['userID']=$row['UserID'];
				echo $row['User_Role'];
			}else{
				echo "0";	
			}
		}
		
		$query->closeCursor();
		$db = null;
	
	} catch(PDOException $e) {
		$error_message = $e->getMessage();
		echo("Database error: $error_message");	
	}
	}
	
?>