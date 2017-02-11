<?php
	session_start();
	setcookie(session_name(), '', 100);
	session_unset();
	session_destroy();
	$_SESSION = array();
	//returns to previous page after ending session
	if (!empty($_SERVER['HTTP_REFERER'])) {
	    header("Location: ".$_SERVER['HTTP_REFERER']);
	} else {
	    header("Location: http://www.google.com");
	}
	exit;
?>