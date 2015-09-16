<?php
	session_start();
	$_SESSION['Administrator']=1;
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
	
	<div class="row topBanner">
		<div class="topBannerLeft col-xs-6">
			<a href="../"><img src="../img/DSandB_Logo.png" /></a>
		</div>
		<div class="topBannerRight col-xs-6">
			<a href="">Granite</a>
			<a href="">Stone</a>
			<a href="">Fireplace</a>
			<a href="">Landscape</a>
		</div>
	</div>
		
		<div class="row">
			<div class="col-md-8 hidden-xs sideBanner">
				<img src="./pictures/Chocolate Bordeaux 7.jpg" />
			</div>
			
			<div class="col-md-4 col-xs-12 bannerContent">
				<h1>Granite</h1>
				<p>Darboy Stone & Brick puts great effort to remain the premier provider of granite surfaces in Northeast Wisconsin.</p>
				<p>Darboy Stone & Brick specializes in custom countertops, vanities, fireplace surrounds, wet bars, tub decks, sinks, and more! We offer the convenience of an onsite inventory of imported marble and granite slabs direct from the supplier. We offer the highest quality and largest selection available, giving you the opportunity to view and approve slabs before a home or business project is fabricated.</p>
			</div>
		</div>	
		<!--Thumbnail section-->
		<div class="row linkTileModern">
		  <div class="col-xs-12 col-sm-6 col-lg-3">
	  		<div class="panel panel-default linkCircle">
	  			<div class="panel-heading">
	  				<h3>Kitchen Idea Gallery</h3>
	  			</div>
	  			<img src="./pictures/Santa Cecelia square.png" class="img-circle" />
	  			<div class="panel-body">
	  				<p>View some of our recent work!</p>
  				</div>
			</div>
		 </div>
			 
		 <div class="col-xs-12 col-sm-6 col-lg-3">
	  		<div class="panel panel-default linkCircle">
	  			<div class="panel-heading">
	  				<h3>Granite Showroom</h3>
	  			</div>
	  			<img src="./pictures/granite_showroom square.png" class="img-circle" />
	  		</br>
	  			<div class="panel-body">	
		  			<p>View granite samples</p>
		  			<p>Visit our showroom to see all currently available granite samples</p>
		  			<a href="./graniteShowroom.php" class="btn btn-primary">Showroom</a>
	  			</div>
			</div>
		 </div>
		 
		 <div class="col-xs-12 col-sm-6 col-lg-3">
	  		<div class="panel panel-default linkCircle">
	  			<div class="panel-heading">
	  				<h3>Bathroom Idea Gallery</h3>
	  			</div>
	  			<img src="./pictures/Persian Brown square.png" class="img-circle" />
	  			<div class="panel-body">
	  				<p>View some of our recent bathroom projects</p>
  				</div>
			</div>
		 </div>
		 
		 <div class="col-xs-12 col-sm-6 col-lg-3">
	  		<div class="panel panel-default linkCircle">
	  			<div class="panel-heading">
	  				<a href="graniteFAQ.php"><h3>Granite FAQ</h3></a>
	  			</div>
	  			<img src="./pictures/star beach square.png" class="img-circle" />
	  			<div class="panel-body">
	  				<p>Frequently asked questions about Granite</p>
	  			</div>
			</div>
		 </div>
			 
		</div><!--End Thumbnail row-->
    <?php
    	include("../footer.php");
	?>
</body>
</html>
