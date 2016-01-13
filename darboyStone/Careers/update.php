<?php
	session_start();
	$source=$_POST['source'];
	define('_ROOT', '../');
?>

<!DOCTYPE html>

<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		DS&B Careers
	</title>


	<link href="../styles/bootstrap.css"  rel="stylesheet"/>
	<link href="../styles/adamvh.css" rel="stylesheet" />
	
	<script src="../js/jquery.js" type="text/javascript"></script>
	<script src="../js/bootstrap.js" type="text/javascript"></script>
	
</head>
<body>
	<?php
		include"../header.php";
	?>
	<div class="container">

    <?php
    // Connect to the DB
	$db = new mysqli('localhost', 'adamvh99_admin', 'apv0703','adamvh99_darboy');
	/* check connection */
	if ($db->connect_errno) {
		printf("Connect failed: %s\n", $db->connect_error);
		exit();
	}else{
		if(isset($_POST['submit'])){	
			$sql = sprintf("UPDATE jobs SET title='%s', description='%s'
	          WHERE id ='%s'",
	          htmlspecialchars($_POST['title']),
	          htmlspecialchars($_POST['description']),
	          htmlspecialchars($_POST['id']));
	        $query = mysqli_query($db, $sql);
			if($query){
				echo"<div class='panel'>
					<h3>".$_POST['title']." updated " . "<h3>
						<a href='http://darboystone.com/Careers'class='btn btn-success'>Click to Return</a>
					</div>";
			}
		}else{
			if(isset($_GET['id']) && $_SESSION['Administrator'] == 1){
			$id = $_GET['id'];
	    	$sql = 'SELECT * FROM jobs
	    			WHERE id = '.$id;
	   		$result = mysqli_query($db, $sql);
			$row = mysqli_fetch_assoc($result);
		
		printf('
			<div class="row row-centered">
				<div class="col-md-8 col-centered">
					<div class="panel panel-info">
						<div class="panel-heading">
							<h3>Careers at Darboy Stone and Brick</h3>
						</div>
						<div class="panel-body">
						<form method="post" action="">
						<table class="table table-hover">
							<thead>
								<tr>
									<th class="visible-sm visible-md visible-lg">Job Title</th>
									<th class="visible-sm visible-md visible-lg">Job Description</th>
								</tr>
							</thead>
							<tbody>');
						        printf('
						        	<tr><td class="visible-sm visible-md visible-lg"><input class="jobDesc" name="title" type="textarea" value="%s"></td> 
						        	<td class="visible-sm visible-md visible-lg"><input class="jobDesc" name="description" type="textarea" value="%s"></td>
						        	<input name="id" type="hidden" value="%s">',
						          
						          htmlspecialchars($row['title']),
						          htmlspecialchars($row['description']),
						          htmlspecialchars($row['id'])
						        );
								printf('
									<tr><td><input class="btn btn-success btn-xs" type="submit" name="submit" value="Submit">
									<a class="btn btn-danger btn-xs" href="./">Cancel</a></td></tr>
								');
							mysqli_close($db);
							}
						}
					}
					?>
						
			    		</tbody>
			    		</table>
			    	</form>
			    	</div>
			    	</div>
	    		</div>
	    	</div>
	    </div>
    </div>
    
	<?php
		include"../footer.php";
	?>
</body>
</html>
	