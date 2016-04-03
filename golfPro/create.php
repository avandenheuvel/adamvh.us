<?php
	// include database and object files
	include_once 'config/database.php';
	include_once 'objects/user.php';
	 
	// instantiate database class
	$database = new Database();
	$db = $database->getConnection();
	 
	// initialize object
	$user = new User($db);
	 
	// set values
	$user->username=$_POST['username'];
	$user->email=$_POST['email'];
	$user->password=$_POST['password'];
	$user->auth=$_POST['auth'];
	 
	// set your default timezone
	date_default_timezone_set('America/Chicago');
	$user->created = date('Y-m-d H:i:s');
	         
	// create product
	$user->create();
?>