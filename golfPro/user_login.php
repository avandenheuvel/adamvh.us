<?php
	session_start();
	// include database and object files
	include_once 'config/database.php';
	include_once 'objects/user.php';
	 
	// instantiate database class
	$database = new Database();
	$db = $database->getConnection();
	$msg = "";
	 
	// initialize object
	$user = new User($db);
	
	
	$uname = $_POST['username'];
	$umail = $_POST['username'];
	$upass = $_POST['password'];
  
	if($user->login($uname,$umail,$upass))
	{	
		$user->redirect('index.php');
	}
	else
	{
		$error = "Wrong Details !";
	}
?>