
<?php
	
	//End session
	session_start();
	session_destroy();
	
	//Delete Cookie
	setcookie('FirstName', "", time()-3600, "/120250836");
	
?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		Goodbye
	</title>
	<script src="js/jquery.js" type="text/javascript"></script>
	<script src="js/php_file_tree_jquery.js" type="text/javascript"></script>
	<script src="js/bootstrap.js" type="text/javascript"></script>

	<link href="styles/bootstrap.css"  rel="stylesheet"/>
	<link href="styles/fileTree/default.css"  rel="stylesheet"/>
	<link href="styles/adamvh.css" rel="stylesheet" />
	
</head>
	<div class="vertical-center">
		<div class="container">
			<body>
				<div class="row row-centered">
					<div class=" text-center">
						<h1>You are logged out</h1>
						<a href=./ class="btn btn-primary">Login</a>
					</div>
				</div>
			</body>
		</div>
	</div>
</html>

