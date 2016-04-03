<?php
	session_start();
?>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="./">Golf Pro</a>
    </div>
   
    
      <!--form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form-->
	  <?php 
		echo"<div class='collapse navbar-collapse' id='nav-collapse'>";
		echo"<ul class='nav navbar-nav navbar-right'>";
		
		if(!isset($_SESSION['user'])){
			echo"	
			<li class='dropdown'>
			<a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-expanded='false'>Login or Sign-up<span class='caret'></span></a>
			<ul class='dropdown-menu' role='menu'>
				<li>";
				include "./user_login_form.php";
				echo"
				</li>
				<li><a href='./insert.php'>Sign-up</a></li>
			</ul>
			</li>";
			
		}else{
			echo"<li><a href='#'>Welcome: ".$_SESSION['user']."</a></li>
			<li><a href='#'>Access level: ".$_SESSION['auth']."</a></li>
			<li class='dropdown'>
			  <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-expanded='false'>User Functions<span class='caret'></span></a>
			  <ul class='dropdown-menu' role='menu'>
				<li><a href='./update.php'>Update</a></li>
				<li><a href='./logout.php'>Logout</a></li>
				<li class='divider'></li>";
				
				if($_SESSION['Administrator']==1){	
					echo"<li ><a href='./insert.php'>Add user</a></li>
					<li ><a href='./select.php'>Administer users</a></li>";
				}
				  echo"
				  </ul>
				</li>
			</ul>
			</div><!-- /.navbar-collapse -->";
		}
		?>
  </div><!-- /.container-fluid -->
  
</nav>

<!--div class="row">
	<div class="col-sm-12">
		<div class="alert alert-info clearfix">
			<a href="./" class="alert-link"><h3 class="inlineHdr">MEGTEC Technicial portal</h3></a>
			<p>Welcome: <?=$_SESSION['user']?></p>
			
			<div class="dropdown pull-right">
				<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
					Select action
					<span class="caret"></span>
				</button>
				<ul class="dropdown-menu dropdown-menu-right" role="menu" aria-labelledby="dropdownMenu1">
					<li role="presentation"><a role="menuitem" tabindex="-1" href="./update.php">Update</a></li>
					<li role="presentation"><a role="menuitem" tabindex="-1" href="./Logout.php">Logout</a></li>
					<?php
						if($_SESSION['Administrator']==1){	
							echo"<li role='presentation'><a role='menuitem' tabindex='-1' href='./insert.php'>Add user</a></li>";
						}
					?>
				</ul>
			</div>
		</div>
		<hr>
	</div>
</div>

<!--div class="row">
	<div class="col-sm-12">
		<div class="alert alert-info clearfix">
			<a href="./" class="alert-link"><h3 class="inlineHdr">MEGTEC Technicial portal</h3></a>
			<p>Welcome: <?=$_SESSION['user']?></p>
			
			<div class="dropdown pull-right">
				<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
					Select action
					<span class="caret"></span>
				</button>
				<ul class="dropdown-menu dropdown-menu-right" role="menu" aria-labelledby="dropdownMenu1">
					<li role="presentation"><a role="menuitem" tabindex="-1" href="./update.php">Update</a></li>
					<li role="presentation"><a role="menuitem" tabindex="-1" href="./Logout.php">Logout</a></li>
					<?php
						if($_SESSION['Administrator']==1){	
							echo"<li role='presentation'><a role='menuitem' tabindex='-1' href='./insert.php'>Add user</a></li>";
						}
					?>
				</ul>
			</div>
		</div>
	</div>
</div-->