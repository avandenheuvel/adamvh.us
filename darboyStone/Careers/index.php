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
	
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	
	  ga('create', 'UA-58890484-2', 'auto');
	  ga('send', 'pageview');
	
	</script>
	
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
	    $sql = 'SELECT * FROM jobs';
	    $result = mysqli_query($db, $sql);
		
		printf('
			<div class="row row-centered">
				<div class="col-md-4 col-centered">
					<h3>Careers with Darboy Stone and Brick</h3>
					<p>Want a fun and challenging career with a group of great people? We are looking for talented individuals to fill 
					these open positions. Click on any of these job descriptions to get in touch with our human resources department.<p>
				</div>
				<div class="col-md-8 col-centered">
					<div class="panel panel-info">
						<div class="panel-heading">
							<h3>Current opportunities with Darboy Stone and Brick.</h3>
						</div>
						<div class="panel-body">
						<table class="table table-hover">
							<thead>
								<tr>
									<th>Job Title</th>
									<th>Job Description</th>
								</tr>
							</thead>
							<tbody>');
							if($_SESSION['Administrator'] == 1){
							    foreach ($result as $row) {
							        printf('<tr><td>%s</td> <td>%s</td>
							          <td><a class="btn btn-success btn-xs" href="./update.php?id=%s">edit</a>
							          <a class="btn btn-danger btn-xs" href="./delete.php?id=%s">delete</a></td></tr>',
							          htmlspecialchars($row['title']),
							          htmlspecialchars($row['description']),
									  htmlspecialchars($row['id']),
									  htmlspecialchars($row['id'])
							        );
							    }
								printf('
									<tr><td><a class="btn btn-success btn-xs" href="./insert.php">New Job</a></td></tr>
								');
					    	}else{
					    		foreach ($result as $row) {
							        printf('<tr onclick="apply(&quot;%s &quot;)"><td>%s</td> <td>%s</td>',
							          htmlspecialchars($row['title']),
							          htmlspecialchars($row['title']),
							          htmlspecialchars($row['description'])
							        );
							    }
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
		include"../footer.php";
	?>
</body>
	<script>
		function apply(value){
			//alert("table row clicked. Job "+value+" selected.");
			window.location = '/Careers/apply.php?job='+value;
		}
	</script>
</html>
	