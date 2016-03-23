<?php
	// include database and object files
	include_once 'config/database.php';
	include_once 'objects/user.php';
	 
	// instantiate database class
	$database = new Database();
	$db = $database->getConnection();
	 
	// initialize object
	$user = new User($db);
	
	if(isset($_POST['btn-login']))
	{
	 $uname = $_POST['username'];
	 $umail = $_POST['username'];
	 $upass = $_POST['password'];
	  
	 if($user->login($uname,$umail,$upass))
	 {
	  $_SESSION['user']="logged in"	
	  $user->redirect('index.php');
	 }
	 else
	 {
	  echo('false');	
	  $error = "Wrong Details !";
	 } 
	}
	
	// Check user credentials 
	//$user->login($_POST['username'], $_POST['email'], $_POST['password']); 
?>