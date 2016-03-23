<?php

if(isset($_COOKIE['user'])){
	$cookieValue = $_COOKIE['user'];
	echo("<a href='./Logout.php' class='clearfix btn btn-primary btn-sm pull-right'>Logout</a><h5 class='pull-right'>Welcome $cookieValue</h5>");
	
}

?>