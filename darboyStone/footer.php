<footer class="footer">
	<div class="container">
		<div class="col-lg-4">
			<?php
				if(isset ($_SESSION['FirstName'])){
	            	if($_SESSION['Administrator']==1){
	            		echo"<li><a href='#'>Welcome: ".$_SESSION['FirstName']."</a></li>";
	            		echo"<li class='dropup'>";
				          echo"<a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-expanded='false'>User Functions<span class='caret'></span></a>";
				          echo"<ul class='dropdown-menu' role='menu'>";
				            echo"<li><a href='./update.php'>Update</a></li>";
				            echo'<li><a href=" '. _ROOT . 'Logout.php">Log out</a></li>';
				            echo"<li class='divider'></li>";
							echo"<li><a href='./update.php'>Manage Leads</a></li>";
				            echo"<li ><a href='./insert.php'>Add user</a></li>";
							echo"<li ><a href='./select.php'>Administer users</a></li>";
							
	            	}
	            	}else{
	            	echo'<a class="btn btn-default" href=" '. _ROOT . 'login.php">Log in</a>';
				}
			?>
		</div>
	</div>
</footer>