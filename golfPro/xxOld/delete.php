<?php
  	session_start();
	include('header.php');
  	//require 'auth.php';
    if (isset($_GET['id']) && ctype_digit($_GET['id'])) {
        $id = $_GET['id'];
    } else {
        header('Location: select.php');
	}
    include('_dbConnect.php');
    $sql = "DELETE FROM user WHERE iduser=$id";
    mysqli_query($db, $sql);
	displayMessage("User deleted");
	header('Location: select.php');
    mysqli_close($db);
?>