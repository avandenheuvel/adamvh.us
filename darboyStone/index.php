<?php
	session_start();
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
	
	<script src="js/jquery.js" type="text/javascript"></script>
	<script src="js/bootstrap.js" type="text/javascript"></script>
	
</head>
<body>
	<div class="frontOverlay"></div>
	<div class="frontText">
		<div class="frontHdr row-centered">
			<a href="./Granite" class="col-md-3 col-xs-6">Granite</a>
			<a href="./Fireplace" class="col-md-3 col-xs-6">Fireplace</a>
			<a href="./landscape" class="col-md-3 col-xs-6">Landscape</a>
			<a href="./Brick" class="col-md-3 col-xs-6">Brick & Stone</a>
		</div>
		<img src="img/DSandB_Logo.png"/>
	</div>
	<!--Background image fader-->
	<div id="cf4a">
		<img src="./img/bg-fade_1.jpg"/>
		<img src="./img/bg-fade_2.jpg"/>
		<img src="./img/bg-fade_.JPG"/>
		<img src="./img/bg-fade_4.JPG"/>
	</div>
		
	<?php
		//include("header.php");
	?>
	
	<!--div class="container-fluid">
	<div class="row">
		<div class="jumbotron hidden-sm hidden-xs">
			<div class="col-md-9"><h2>Welcome to the new Darboy Stone and Brick website</h2>
				<p>Darboy Stone and Brick, Inc. has been a trusted provider to Northeast Wisconsin for more than 50 years.  Our roots as a masonry contractor and brick supplier have laid a solid foundation for our diverse product and service offerings.  Today, Darboy Stone and Brick is your complete source for all your home upgrades, including:  stone and brick; granite surfaces; fireplaces and home heating solutions; decorative landscape materials and custom laser etching.</p>
				<form method="post" action="./contact.php">
			  		<input type="hidden" name="source" value="Home" />
			  		<input class="btn btn-primary btn-lg" type="submit" name="send" value="Request Info" />
	 			</form>
			</div>
		 	<div class="col-md-3"><img src="./img/award-label.png" /></div>
		</div>
	</div-->
	
		<!--Thumbnail section-->
		<div class="row thumbrow">
		  <div class="col-xs-12 col-sm-6 col-md-3">
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
			      <img src="./img/fireplace.jpg" alt="Fireplace">
			    </a>
			 </div>
		 </div>
			 
		  <div class="col-xs-12 col-sm-6 col-md-3">
		  	<div class="panel panel-default linkTile">
		  		<div class="dropdown">
				  <button class="btn btn-default dropdown-toggle tileButton" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
				    Granite
				    <span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
				    <li><a href="./Granite/graniteShowroom.php">Granite Showroom</a></li>
				    <li><a href="#">Another action</a></li>
				    <li><a href="#">Something else here</a></li>
				    <li><a href="#">Separated link</a></li>
				  </ul>
				</div>
			    <a href="./Granite" class="thumbnail">
			      <img src="./img/cover2.png" alt="Brick">
			    </a>
			  </div>
			 </div>
			 
		  <div class="col-xs-12 col-sm-6 col-md-3">
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
			 
		  <div class="col-xs-12 col-sm-6 col-md-3">
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
	<!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    /*
	 * set margin of front page to 100%
	 */
	$(function(){
		$(window).on("load resize", function(){
			$(".thumbrow").css("marginTop",window.innerHeight);
		});
	});
    </script>
</body>
</html>
