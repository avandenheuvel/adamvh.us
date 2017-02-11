<?php
//session_start();
require_once '../model/dbconfig.php';
$lastID = $_SESSION['lastID'];//$DBcon->lastInsertID();
$query = "SELECT * FROM tbl_timeentry WHERE id_time=:id";


$stmt = $DBcon->prepare( $query );
$stmt->execute(array(':id'=>$lastID));
$row=$stmt->fetch(PDO::FETCH_ASSOC);
extract($row);

echo $_SESSION['user_name']." punched in on project ".$project_id." at ".$start_time;
?>

<form class="form-punchOut panel-body" method="post">
	<input type="reset" class="btn btn-danger form-controls" id="clockOut" value="Stop"/>
</form>