<footer class="footer">
	<div class="container">
		<div class="col-sm-10 footerLinks">
			<a href="<?php echo _ROOT . "Granite"?>" ><p>Granite</p></a>
			<a href="<?php echo _ROOT . "Brick"?>" ><p>Brick & Stone</p></a>
			<a href="<?php echo _ROOT . "Landscape"?>" ><p>Landscape Products</p></a>
			<a href="<?php echo _ROOT . "Fireplace"?>" ><p>Fireplace</p></a>
			<a href="<?php echo _ROOT . "contact.php"?>" ><p>Contact us</p></a>
			<a href="<?php echo _ROOT . "about.php"?>" ><p>About Darboy Stone & Brick</p></a>
		</div>
		<div class="col-sm-2 userLogin">
			<?php
				if(isset ($_SESSION['FirstName'])){
	            	if($_SESSION['Administrator']==1){
	            		echo"<li><a href='#'>Welcome: ".$_SESSION['FirstName']."</a></li>";
	            		echo"<li class='dropup'>";
				          echo"<a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-expanded='false'>User Functions<span class='caret'></span></a>";
				          echo"<ul class='dropdown-menu' role='menu'>";
				            echo'<li><a href=" '. _ROOT . './includes/updateUser.php">Update</a></li>';
				            echo'<li><a href=" '. _ROOT . 'Logout.php">Log out</a></li>';
				            echo"<li class='divider'></li>";
							echo'<li><a href=" '. _ROOT . 'includes/addUser.php">Add user</a></li>';
							//echo"<li><a href='./update.php'>Manage Leads</a></li>";
							echo'<li><a href=" '. _ROOT . 'includes/selectUser.php">Administer Users</a></li>';							
	            	}
	            	}else{
	            	echo'<a class="btn btn-default" href=" '. _ROOT . 'login.php">Log in</a>';
				}
			?>
		</div>
		
	</div>
</footer>