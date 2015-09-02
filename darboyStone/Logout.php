<?php
	session_start();
	//End session
	session_destroy();
	
	//Delete Cookie
	
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
<body>
	<?php
		include("header.php");
	?>
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
</body>
</html>

