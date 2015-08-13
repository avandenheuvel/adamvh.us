<?php
	
  	require 'auth.php';

    if (isset($_GET['id']) && ctype_digit($_GET['id'])) {
        $id = $_GET['id'];
    } else {
        header('Location: select.php');
    }

?><!DOCTYPE>
<html>
<head>
    <title>PHP</title>
</head>
<body>
	<div class="container">
	<?php
		include('header.php');
	    // Connect to the DB
		$db = mysqli_connect('localhost', 'adamvh99_Portal', 'apv0703','adamvh99_tech');
	    
	    $sql = "DELETE FROM CustomerInfo WHERE CustomerID=$id";
	    mysqli_query($db, $sql);
	    echo '<p>User deleted.</p>';
	    mysqli_close($db);
	?>
	</div>
</body>
</html>