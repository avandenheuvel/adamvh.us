<?php
// include database and object files
include_once 'config/database.php';
include_once 'objects/user.php';
 
// instantiate database and product object
$database = new Database();
$db = $database->getConnection();
 
// initialize object
$user = new User($db);
 
// set values
$user->username=$_POST['username'];
$user->email=$_POST['email'];
$user->password=$_POST['password'];
$user->iduser=$_POST['iduser'];
     
// update 
$user->update();
?>