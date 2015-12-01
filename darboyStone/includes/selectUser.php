<?php
	session_start();
	define('_ROOT', "../");
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		Administer User
	</title>
		<script src="../js/jquery.js" type="text/javascript"></script>
		<script src="../js/php_file_tree_jquery.js" type="text/javascript"></script>
		<script src="../js/bootstrap.js" type="text/javascript"></script>
	
		<link href="../styles/bootstrap.css"  rel="stylesheet"/>
		<link href="../styles/adamvh.css" rel="stylesheet" />
	
</head>
<body>
	<?php
		include('../header.php');
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
	    $sql = 'SELECT * FROM user';
	    $result = mysqli_query($db, $sql);
		
		printf('
			<div class="row row-centered">
				<div class="col-md-8 col-centered">
					<div class="panel panel-info">
						<div class="panel-heading">
							<h3>Administer Users</h3>
						</div>
						<div class="panel-body">
						<table class="table table-hover">
							<thead>
								<tr>
									<th class="visible-sm visible-md visible-lg">First Name</th>
									<th class="visible-sm visible-md visible-lg">Last Name</th>
									<th>E-mail</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>');
						    foreach ($result as $row) {
						        printf('<tr><td class="visible-sm visible-md visible-lg">%s</td> <td class="visible-sm visible-md visible-lg">(%s)</td> <td>%s</td>
						          <td><a class="btn btn-success btn-xs" href="./updateUser.php?id=%s">edit</a>
						          <a class="btn btn-danger btn-xs" href="./delete.php?id=%s">delete</a></td></tr>',
						          htmlspecialchars($row['FirstName']),
						          htmlspecialchars($row['LastName']),
						          htmlspecialchars($row['eMail']),
						          htmlspecialchars($row['ID']),
						          htmlspecialchars($row['ID'])
						        );
						    }
					    }
					    mysqli_close($db);
					    ?>
			    		</tbody>
			    		</table>
			    	</div>
			    	</div>
	    		</div>
	    	</div>
	    </div>
    </div>
<?php
	include("../footer.php");
?>
</body>
</html>
