<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		User list.
	</title>
	<script src="js/jquery.js" type="text/javascript"></script>
	<script src="js/php_file_tree_jquery.js" type="text/javascript"></script>
	<script src="js/bootstrap.js" type="text/javascript"></script>

	<link href="styles/bootstrap.css"  rel="stylesheet"/>
	<link href="styles/fileTree/default.css"  rel="stylesheet"/>
	<link href="styles/adamvh.css" rel="stylesheet" />
	
</head>
<body>
	<div class="container">

	    <?php
		include('header.php');
	    include('_dbConnect.php');
		
	    $sql = 'SELECT * FROM user';
	    $result = mysqli_query($db, $sql);
		
		printf('
		<div class="container">
			<div class="row row-centered">
				<div class="col-md-8 col-centered">
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
				          <td><a class="btn btn-success btn-xs" href="./update.php?id=%s">edit</a>
				          <a class="btn btn-danger btn-xs" href="./delete.php?id=%s">delete</a></td></tr>',
				          htmlspecialchars($row['iduser']),
				          htmlspecialchars($row['username']),
				          htmlspecialchars($row['email']),
				          htmlspecialchars($row['iduser']),
				          htmlspecialchars($row['iduser'])
				        );
				    }
				    mysqli_close($db);
				    ?>
	    		</tbody>
	    		</table>
	    		<a class="btn btn-success btn-xs" href="./insert.php">New</a>
	    		</div>
	    	</div>
	    </div>
    </div>

</body>
</html>
