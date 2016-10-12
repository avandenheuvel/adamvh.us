<?php
	session_start();
	define('_ROOT', "../");
	$source = "Fireplace";
?>

<!DOCTYPE html>

<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	<meta name="description" content="Darboy Stone and Brick. Suppliers of Gas, Woodburning, Contemporary and Free Standing fireplace products" />
	<meta name="keywords" content="Gas Insert, Wood Insert, Fireplace, Natural Gas Fireplace, Woodburning Fireplace, Contemporary Fireplace"/> 
	<title>
		Darboy Stone & Brick - Fireplace
	</title>


	<link href="../styles/bootstrap.css"  rel="stylesheet"/>
	<link href="../styles/adamvh.css" rel="stylesheet" />
	<link href='https://fonts.googleapis.com/css?family=Oswald:700|Merriweather' rel='stylesheet' type='text/css'>
	
	<script src="../js/jquery.js" type="text/javascript"></script>
	<script src="../js/bootstrap.js" type="text/javascript"></script>
	<script src="../includes/scripts.js" type="text/javascript"></script>
	
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
		include("../header.php");
	?>

	<div class="container-fluid">
		<!-- Page Heading/Breadcrumbs -->
	        <div class="row">
	            <div class="col-xs-12">
	                <h1 class="page-header">Fireplace & Stoves
	                    <small></small>
	                </h1>
	                <ol class="breadcrumb">
	                    <li><a href="../">Home</a>
	                    </li>
	                    <li class="active">Fireplace</li>
	                </ol>
	            </div>
	        </div>
			
			<div class="row">
				<!--div class="col-md-8 hidden-xs sideBanner">
					<img src="./pictures/Chocolate Bordeaux 7.jpg" />
				</div-->
				
				<div class="col-xs-12 bannerContent">
					<p>Darboy Stone & Brick is Northeast Wisconsin’s premier dealer in all things fireplace.  
						Our selection includes 9 of the leading brand names in the industry; from wood to gas, 
						inserts to stoves and custom surrounds.  Our showroom features one of the largest 
						collections of fireplaces anywhere in Wisconsin. </p>
					<p>Stop in and let our professional sales staff guide you through the many options available. </p>
					
					<!--This is used for bringing in the addModal-->
					<div id="output"></div>
				</div>
			</div>	
		</div>
		
<!--Thumbnail section-->
			<div class="row linkTileModern" id="fireBG">
				<?php
					include_once("../includes/generateThumb.php");
				?>
				
				<!-- Trigger the modal with a button -->
				<a class="modalLink col-xs-6 col-md-3 clickable"data-toggle="modal" data-target="#woodFireplaceModal">Wood burning</a>
				
				<!-- Modal -->
				<div id="woodFireplaceModal" class="modal fade" role="dialog">
				  <div class="modal-dialog">
				
				    <!-- Modal content-->
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal">&times;</button>
				        <h4 class="modal-title">Woodburning Fireplaces</h4>
				      </div>
				      <div class="modal-body row">
				      	<div class="col-xs-12 bannerContent">
							<p>Feel free to browse these sample images of some of the fireplace projects we've supplied.</p>
							<p><a href="../contact.php">Contact us</a> today or come on in to our <a href="../about.php">showroom</a> to 
								meet with a professional salesperson and view one of Wisconsin's largest fireplace showrooms.</p>
						</div>
				      	<?php
				      		generate_Thumb('./wood/imgThumb/', './wood/img/','1');
						?>
				        <!--p>Some text in the modal.</p-->
				      </div>
				      <div class="modal-footer">
				      	<?php
				      		if(isset($_SESSION['Administrator'])){
					      		if($_SESSION['Administrator']==1){
					      			echo '<button type="button" onclick="addModal(&quot;wood &quot;)" class="btn btn-default">New</button>';//Updated added parameter to add modal was blank
					      		}
							}
				      	?>
				        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				      </div>
				    </div>
				
				  </div>
				</div>
				
				<!-- Trigger the modal with a button -->
				<a class="modalLink col-xs-6 col-md-3 clickable"data-toggle="modal" data-target="#gasFireplaceModal">Gas</a>
				
				<!-- Modal -->
				<div id="gasFireplaceModal" class="modal fade" role="dialog">
				  <div class="modal-dialog">
				
				    <!-- Modal content-->
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal">&times;</button>
				        <h4 class="modal-title">Gas Fireplace</h4>
				      </div>
				      <div class="modal-body row">
				      	<div class="col-xs-12 bannerContent">
							<p>Feel free to browse these gas fireplace installations.</p>
							<p><a href="../contact.php">Contact us</a> today or come on in to our <a href="../about.php">showroom</a> to 
								meet with a professional salesperson and view our current selection of granite.</p>
						</div>
				      	<?php
				      		generate_Thumb('./gas/imgThumb/', './gas/img/','1');
						?>
				        <!--p>Some text in the modal.</p-->
				      </div>
				      <div class="modal-footer">
				      	<?php
				      		if(isset($_SESSION['Administrator'])){
					      		if($_SESSION['Administrator']==1){
					      			echo '<button type="button" onclick="addModal(&quot;gas &quot;)" class="btn btn-default">New</button>';//Updated added parameter to add modal was blank
					      		}
							}
				      	?>
				        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				      </div>
				    </div>
				
				  </div>
				</div>
				
				
				
				
				<!-- Trigger the modal with a button -->
				<a class="modalLink col-xs-6 col-md-3 clickable"data-toggle="modal" data-target="#contemporaryModal">Contemporary</a>
				
				<!-- Modal -->
				<div id="contemporaryModal" class="modal fade" role="dialog">
				  <div class="modal-dialog">
				
				    <!-- Modal content-->
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal">&times;</button>
				        <h4 class="modal-title">Contemporary Fireplace</h4>
				      </div>
				      <div class="modal-body row">
				      	<div class="col-xs-12 bannerContent">
							<p>Feel free to browse these gas fireplace installations.</p>
							<p><a href="../contact.php">Contact us</a> today or come on in to our <a href="../about.php">showroom</a> to 
								meet with a professional salesperson and view our current selection of granite.</p>
						</div>
				      	<?php
				      		generate_Thumb('./contemporary/imgThumb/', './contemporary/img/','1');
						?>
				        <!--p>Some text in the modal.</p-->
				      </div>
				      <div class="modal-footer">
				      	<?php
				      		if(isset($_SESSION['Administrator'])){
					      		if($_SESSION['Administrator']==1){
					      			echo '<button type="button" onclick="addModal(&quot;contemporary &quot;)" class="btn btn-default">New</button>';//Updated added parameter to add modal was blank
					      		}
							}
				      	?>
				        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				      </div>
				    </div>
				
				  </div>
				</div>
				
				
				
				
				<!-- Trigger the modal with a button -->
				<a class="modalLink col-xs-6 col-md-3 clickable"data-toggle="modal" data-target="#electricModal">Electric</a>
				
				<!-- Modal -->
				<div id="electricModal" class="modal fade" role="dialog">
				  <div class="modal-dialog">
				
				    <!-- Modal content-->
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal">&times;</button>
				        <h4 class="modal-title">Electric fireplaces</h4>
				      </div>
				      <div class="modal-body row">
				      	<div class="col-xs-12 bannerContent">
							<p>Feel free to browse these Electric fireplace models.</p>
							<p><a href="../contact.php">Contact us</a> today or come on in to our <a href="../about.php">showroom</a> to 
								meet with a professional salesperson and view our current selection of granite.</p>
						</div>
				      	<?php
				      		generate_Thumb('./electric/imgThumb/', './electric/img/','1');
						?>
				        <!--p>Some text in the modal.</p-->
				      </div>
				      <div class="modal-footer">
				      	<?php
				      		if(isset($_SESSION['Administrator'])){
					      		if($_SESSION['Administrator']==1){
					      			echo '<button type="button" onclick="addModal(&quot;electric &quot;)" class="btn btn-default">New</button>';//Updated added parameter to add modal was blank
					      		}
							}
				      	?>
				        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				      </div>
				    </div>
				
				  </div>
				</div>
			</div><!--End Thumbnail row-->
        
         <div class="row bannerInfo">
		 	<h1>Northeast Wisconsin's premier provider of Fireplaces</h1>
		 	<div class="col-xs-12 col-md-4">
		 		<h3>Gas</h3>
		 		<p>The perfect blend of efficiency and convenience. With a large variety of burning fireplaces in our showroom, you're sure to find the model that's perfect for your home.</p>
	 		</div>
		 	<div class="col-xs-12 col-md-4">
		 		<h3>Wood</h3>
		 		<p>It's hard to beat a rustic natural wood fire. New construction, inserts, upgrades or free standing firebox options are all available. Stop into our showroom or browse our website to view the many options available. </p>
		 		
		 	</div>
		 	<div class="col-xs-12 col-md-4">
		 		<h3>Contemporary</h3>
		 		<p>New models offer the flexibility to integrate into just about any room adding a modern look and supplying your room with a rich warmth that you'd expect from a gas fireplace.</p>
		 	</div>
		 </div>
			
	<!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide hidden-xs">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <!--li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li-->
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide One');">
                	<img src="http://www.heatnglo.com/%7E/media/Images/Slideshow%20Slide%20Photos/HNG/PRIMO72_rotator_1400x500.ashx"/>
            	</div>
                <div class="carousel-caption">
                    <h2></h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Two');">
                	<img src="http://www.heatnglo.com/%7E/media/Images/Product%20Images/Outdoor%20Products%20Images/Fireplaces/Castlewood/HHT_Wood_Castlewood_Mesh_960x456.ashx?q=70"/>
                </div>
                <div class="carousel-caption">
                    <h2></h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Two');">
                	<img src="http://www.heatnglo.com/%7E/media/Images/Product%20Images/Outdoor%20Products%20Images/Fireplaces/Twilight_Modern/HHT-gasFP-TwilightModern-Exterior-960x456.ashx?q=70"/>
                </div>
                <div class="carousel-caption">
                    <h2></h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
        </header>
        
        <div class="row bannerInfo">
		 	<div class="col-xs-12 col-md-4">
		 		<h3>We are a proud distributor of high quality fireplaces and stoves. Feel free to visit
		 			out partners websites.</h3>
	 		</div>
		 	<div class="col-xs-12 col-md-8 logo">
		 		<a href="http://www.heatnglo.com" target="_blank"><img src="./pictures/heatnGlow_Logo.jpg" /></a>	
		 		<a href="http://www.kozyheat.com/" target="_blank"><img src="./pictures/kozyHeat.jpg" /></a>
		 		<a href="http://www.quadrafire.com/" target="_blank"><img src="./pictures/quadraFire.jpg" /></a>
		 		<a href="http://www.kingsmanind.com/" target="_blank"><img src="./pictures/kingsman.png" /></a>	
		 		<a href="http://www.regency-fire.com/Home.aspx " target="_blank"><img src="./pictures/regency.jpg" /></a>	
		 		<a href="http://www.heatilator.com/" target="_blank"><img src="./pictures/heatilator.jpg" /></a>
		 		<a href="http://mendotahearth.com/" target="_blank"><img src="pictures/mendota_hearth.jpg" /></a>
		 		<a href="http://www.icc-rsf.com/en/rsf-woodburning-fireplaces" target="_blank"><img src="./pictures/rsf.jpg" /></a>
		 		<a href="http://www.renaissancefireplaces.com/" target="_blank"><img src="./pictures/renaissance.jpg" /></a>
		 		<a href="http://www.osburn-mfg.com/en" target="_blank"><img src="./pictures/osburn.jpg" /></a> 				 				 				 		
		 	</div>
		 </div>
        
		<div id="contact" class="row getStarted activity-section">
			  <div class="col-xs-12 col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
			  	<h1>Let's get started</h1>
			  	<p>Contact a Darboy Stone and Brick Representative today</p>
			  	<p>Or, come <a href="../about.php">visit us</a> to see our current selection of product offerings</p>
			  	<h4><a href="mailto:customerservice@darboystone.com">&#9993; e-mail</a><span>|</span><a>&#9743;  (920)734-2882</a></h4>
		  		<a href="../contact.php"><button class="btn btn-lg">Contact us</button></a>
		  	</div>
	 	 </div>
    <?php
    	include("../footer.php");
	?>
</body>
<!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
</html>
