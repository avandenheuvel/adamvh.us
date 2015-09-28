<footer class="footer">
	<div class="container">
		<div class="col-lg-4">
			<h5><a href="../SignUp">Sign Up</a></h5>
			<?php
            	if($_SESSION['Administrator']==1){
            		echo"<li><a href='#'>Welcome: ".$_SESSION['FirstName']."</a></li>";
            		echo"<li class='dropdown'>";
			          echo"<a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-expanded='false'>User Functions<span class='caret'></span></a>";
			          echo"<ul class='dropdown-menu' role='menu'>";
			            echo"<li><a href='./update.php'>Update</a></li>";
			            echo"<li><a href='./Logout.php'>Logout</a></li>";
			            echo"<li class='divider'></li>";
						echo"<li><a href='./update.php'>Manage Leads</a></li>";
			            echo"<li ><a href='./insert.php'>Add user</a></li>";
						echo"<li ><a href='./select.php'>Administer users</a></li>";
						
            	}else{
            		echo"<li><a href='./login.php'>Login</a></li>";
            	}
			?>
		</div>
	</div>
</footer>