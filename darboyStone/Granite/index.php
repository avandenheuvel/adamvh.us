<?php
	session_start();
	//$_SESSION['Administrator']=1;
	define('_ROOT',"./");
?>

<!DOCTYPE html>

<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		New Darboy Stone & Brick
	</title>


	<link href="../styles/bootstrap.css"  rel="stylesheet"/>
	<link href="../styles/adamvh.css" rel="stylesheet" />
	
	<script src="../js/jquery.js" type="text/javascript"></script>
	<script src="../js/bootstrap.js" type="text/javascript"></script>
	
</head>
<body>
		
	<?php
		include("../header.php");
	?>
		<div class="container-fluid">
		<!--Thumbnail section-->
		<div class="row">
			<div class="col-md-8 sideBanner">
				<img src="./img/Chocolate Bordeaux 7.jpg" />
			</div>
			<div class="col-md-4">
				<h2>Something really cool you should know about DS&B</h2>
				<p>Lot's more words about said thing that's really cool.</p>
			</div>
		</div>	
		<div class="row">
		  <div class="col-xs-12 col-sm-6 col-lg-3">
		  		<div class="panel panel-default linkTile">
		  		<div class="dropdown">
				  	<button class="btn btn-default dropdown-toggle tileButton" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
				    Fireplace
				    <span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
				    <li><a href="#">Action</a></li>
				    <li><a href="#">Another action</a></li>
				    <li><a href="#">Something else here</a></li>
				    <li><a href="#">Separated link</a></li>
				  </ul>
				</div>
			    <a href="#" class="thumbnail">
			      <img src="../img/fireplace.jpg" alt="Fireplace">
			    </a>
			 </div>
		 </div>
			 
		  <div class="col-xs-12 col-sm-6 col-lg-3">
		  	<div class="panel panel-default linkTile">
		  		<div class="dropdown">
				  <button class="btn btn-default dropdown-toggle tileButton" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
				    Granite
				    <span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
				    <li><a href="../Granite/graniteShowroom.php">Granite Showroom</a></li>
				    <li><a href="#">Another action</a></li>
				    <li><a href="#">Something else here</a></li>
				    <li><a href="#">Separated link</a></li>
				  </ul>
				</div>
			    <a href="./Granite" class="thumbnail">
			      <img src="../img/cover2.png" alt="Brick">
			    </a>
			  </div>
			 </div>
			 
		  <div class="col-xs-12 col-sm-6 col-lg-3">
		  	<div class="panel panel-default linkTile">
		  		<div class="dropdown">
				  <button class="btn btn-default dropdown-toggle tileButton" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
				    Landscape
				    <span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
				    <li><a href="#">Action</a></li>
				    <li><a href="#">Another action</a></li>
				    <li><a href="#">Something else here</a></li>
				    <li><a href="#">Separated link</a></li>
				  </ul>
				</div>
			    <a href="#" class="thumbnail">
			      <img src="../img/cover3.png" alt="Fireplace">
			    </a>
			 </div>
		 </div>
			 
		  <div class="col-xs-12 col-sm-6 col-lg-3">
		  	<div class="panel panel-default linkTile">
		  		<div class="dropdown">
				  <button class="btn btn-default dropdown-toggle tileButton" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
				    Brick
				    <span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
				    <li><a href="#">Action</a></li>
				    <li><a href="#">Another action</a></li>
				    <li><a href="#">Something else here</a></li>
				    <li><a href="#">Separated link</a></li>
				  </ul>
				</div>
			    <a href="#" class="thumbnail">
			      <img src="../img/cover.png" alt="Landscape">
			    </a>
			 </div>
		 </div>
		</div><!--End Thumbnail-->
		
			
			
	</div><!--End Container-->
    
</body>
</html>
