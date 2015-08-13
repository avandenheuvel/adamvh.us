<?php
//connect.php
$server = 'localhost';
$username   = 'adamvh99_admin';
$password   = 'apv0703';
$database   = 'adamvh99_machineWorx';
 
if(!mysqli_connect($server, $username,  $password))
{
    exit('Error: could not establish database connection' . mysqli_connect_error());
}else{
	$con = mysqli_connect($server, $username,  $password);
}
if(!mysqli_select_db($con,$database))
{
    exit('Error: could not select the database');
}
?>