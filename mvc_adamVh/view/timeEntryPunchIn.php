<?php
//session_start();

if(!isset($_SESSION['loggedIn'])){
	require_once '../model/dbconfig.php';
	$query = "
		SELECT distinct (project_name) 
		FROM tbl_projects
		WHERE project_status != 'closed' 
		order by project_name";
	$stmt = $DBcon->prepare( $query );
	$stmt->execute();
	?>
	<form class="form-punchIn panel-body" method="post" id="punchIn-form">
	       	
	    <div id="error">
	    	<!-- error will be shown here ! -->
	    </div>
		<ul class="list-inline">
			<li>
				<h5>Existing Project</h5>
				<select class="form-control" name="project" id="project">
					<option>New</option>
					<?php
					while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
					?>
					<option class="existingProjectName"><?php echo $row['project_name']?></option>	
					<?php
					}
					?>	
				</select>
			</li>
			<li>
				<?php
					if(isset($_SESSION['user_level']) && $_SESSION['user_level']=="boss"){
						echo '<h5>New Project</h5>
							<input class="newProjectName form-control" id="newProject" type="textbox"/>';
					}
				?>
			</li>
		</ul>
		
		<h5>Task</h5>
		<select class="form-control" name="task" id="task">
			<option>Proposal</option>
			<option>Meeting</option>
			<option>Planning</option>
			<option>Front End Design</option>
			<option>Back End Design</option>
			<option>Sales</option>
			<option>...</option>
		</select>
	</br>
		<ul class="list-inline">
			<li><input name="btn-punchIn" type="submit" class="btn btn-success form-control" id="btn-punchIn" value="Start"/></li>
			<li><input name="btn-manualTime" type="button" class="btn btn-info form-control" id="btn-manualTime" value="Manual"/></li>
		</ul>
	</form>	
<?php
}
?>