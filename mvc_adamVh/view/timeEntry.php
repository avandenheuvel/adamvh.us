<?php
session_start();
	//verify condition then display appropriate form
	
	if(isset($_SESSION['lastID'])){
		include 'timeEntryPunchOut.php';
	}else{
		include 'timeEntryPunchIn.php';
	}
?>
