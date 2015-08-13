<?php
	define('_ROOT',"./");
?>

<!DOCTYPE html>

<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		New Darboy Stone & Brick
	</title>


	<link href="styles/bootstrap.css"  rel="stylesheet"/>
	<link href="styles/adamvh.css" rel="stylesheet" />
	
</head>
<body>
	<!--Background image fader-->
	<div id="cf4a">
		<img src="./img/cover.png"/>
		<img src="./img/cover1.png"/>
		<img src="./img/cover2.png"/>
		<img src="./img/cover3.png"/>
	</div>
		
	<?php
		include("header.php");
	?>
	
	<div class="container-fluid">
	<div class="row">
		<div class="jumbotron">
			<h3>Welcome to the new Darboy Stone and Brick website</h3>
		 	<p>...</p>
		 	<p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
		</div>
	</div>
	
		<!--Thumbnail section-->
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
			      <img src="./img/cover1.png" alt="Granite">
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
				    <li><a href="#">Action</a></li>
				    <li><a href="#">Another action</a></li>
				    <li><a href="#">Something else here</a></li>
				    <li><a href="#">Separated link</a></li>
				  </ul>
				</div>
			    <a href="#" class="thumbnail">
			      <img src="./img/cover2.png" alt="Brick">
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
			      <img src="./img/cover3.png" alt="Fireplace">
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
			      <img src="./img/cover.png" alt="Landscape">
			    </a>
			 </div>
		 </div>
		</div><!--End Thumbnail-->
	</div><!--End Container-->
</body>
</html>
