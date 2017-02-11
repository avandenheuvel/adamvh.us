<?php
session_start();
/*
 * Punch In
 * Set session's: Time in, PunchID
 * Write new DB record
 */
 if(isset($_POST['project'])){
	$_SESSION['project'] = $_POST['project'];
	$_SESSION['punchedIn'] = TRUE;
	//check task type and use for setting project_status
	if($_POST['task'] == "Proposal"){
		$prjSts="proposal";
	}else{
		$prjSts="active";
	}
	
	try{
		require_once ("dbconfig.php");
		//Check if the project is new, then create a new project entry
		if($_SESSION['project'] == 'new'){
			$stmt1 = $DBcon->prepare("INSERT INTO tbl_projects(project_name, project_status)
				VALUES(:projectName, :projectStatus)");
			$stmt1->execute(array(
				"projectName"=> $_POST['project'],
				"projectStatus"=> $prjSts
			));
			$prjID = $DBcon->lastInsertID();//Save the new project ID for time_entry table entry below
		//If it's not new look up the ID based on the project name	
		}else{
			$stmt = $DBcon->prepare("select id_project from tbl_projects where project_name=:project");
			$stmt->execute(array(':project'=>$_SESSION['project']));
			$row=$stmt->fetch(PDO::FETCH_ASSOC);
 			extract($row);
			$prjID = $row['id_project'];
		}
		$stmt2 = $DBcon->prepare("INSERT INTO tbl_timeentry(user_id, task_name, start_time, project_id, end_time)
		    VALUES(:userID, :taskName, Now(), :projectID, :endTime)");
		$stmt2->execute(array(
		    "userID" => $_SESSION['user_session'],
		    "taskName" => $_POST['task'],
		    //Get project ID from $stmt1
		    "projectID"=>$prjID,
		    "endTime"=>""
		));
		$_SESSION['lastID']=$DBcon->lastInsertID();
		echo "<h3>User ".$_SESSION['user_name']." punched in on project ".$_SESSION['project'];
	}catch(PDOException $e){
		echo $e->getMessage();
	}
 } 
 
/*
 * Punch Out
 * Kill Session's: Time out, PunchID
 * Update: table record based on PunchID
 */
 if(isset($_POST['req'])){
	//Write UPDATE logic
	
	require_once ("dbconfig.php");//Create the new database object
	//Prepare the SQL statement
	$stmt = $DBcon->prepare("
		UPDATE tbl_timeentry
		SET end_time = now()
		WHERE id_time = :idTime");
	//Execute the SQL statement
	$stmt->execute(array(
	//"endTime"=>"now()",
	"idTime"=>$_SESSION['lastID']));
	
	echo "You are now punched out..";
	unset($_SESSION['punchedIn']);
	unset($_SESSION['lastID']);
 }
?>