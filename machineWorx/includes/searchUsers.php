<?php
	
	$user="";
	if($_POST['user']!=""){
		$user=$_POST['user'];
	}
		
	$dsn = 'mysql:host=itsql.fvtc.edu;dbname=MachineWorx158';
	$username = 'MachineWorx158';
	$password = 'MachineWorx158';
	$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

	try {
		$queryString = "SELECT UserID, User_Username, User_FName, User_LName, User_Role FROM tblUsers WHERE User_Username LIKE '".$user."%'";
		$db = new PDO($dsn, $username, $password, $options);
		$query = $db->prepare($queryString); 
		$query->execute();
		
		while($row = $query->fetch(PDO::FETCH_ASSOC)){
			echo ("<tr onclick=\"pullUserInfo('".$row['UserID']."');\">
					<td>".$row['UserID']."</td>
					<td>".$row['User_Username']."</td>
					<td>".$row['User_FName']."</td>
					<td>".$row['User_LName']."</td>
					<td>".$row['User_Role']."</td>
				</tr>");
		}
		
		$query->closeCursor();
		$db = null;
	
	} catch(PDOException $e) {
		$error_message = $e->getMessage();
		echo("Database error: $error_message");	
	}
	
?>