<?php
	session_start();
	define('_ROOT', "../");
	$source = "Brick";
?>

<!DOCTYPE html>

<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Darboy Stone and Brick. Suppliers of Brick, Cultured Stone and Limestone products" />
	<meta name="keywords" content="Brick, Cultured Stone, Limestone, Keystone"/> 
	<title>
		Darboy Stone & Brick - Brick & Stone
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
	
	<!--This is used for bringing in the addModal-->
	<div id="output"></div>

	<div class="container-fluid">
		<!-- Page Heading/Breadcrumbs -->
	        <div class="row">
	            <div class="col-xs-12">
	                <h1 class="page-header">Brick & Stone
	                    <small></small>
	                </h1>
	                <ol class="breadcrumb">
	                    <li><a href="../">Home</a>
	                    </li>
	                    <li class="active">Brick & Stone</li>
	                </ol>
	            </div>
	        </div>
			
			<div class="row">
				<!--div class="col-md-8 hidden-xs sideBanner">
					<img src="./pictures/Chocolate Bordeaux 7.jpg" />
				</div-->
				
				<div class="col-xs-12 bannerContent">
					<p>Darboy Stone and Brick offers an extensive selection of brick and cultured stone from the United States' top 
						manufacturers including Hansen, Pine Hall and General Shale in an abundant array of colors 
						& styles displayed in unique masonry designs including fireplace displays, arches, walls, 
						mortar colors, etc.</p>
					<p>In addition, we have several brick displays outdoors, to show the effect of natural lighting 
						on the various brick to be sure you select the look that's just right for your home or 
						business.</p>
				</div>
			</div>	
		</div>
		
<!--Thumbnail section-->
			<div class="row linkTileModern" id="brickBG">
				<?php
					include_once("../includes/generateThumb.php");
				?>
				
				
				
				<!-- Trigger the modal with a button -->
				<a class="modalLink col-xs-6 col-md-3 clickable"data-toggle="modal" data-target="#brickShowroomModal">Brick Showroom</a>
				
				<!-- Modal -->
				<div id="brickShowroomModal" class="modal fade" role="dialog">
				  <div class="modal-dialog">
				
				    <!-- Modal content-->
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal">&times;</button>
				        <h4 class="modal-title">Brick Sample's</h4>
				      </div>
				      <div class="modal-body row">
				      	<div class="col-xs-12 bannerContent">
							<p>Feel free to browse these sample images of some of the variety of brick we supply.</p>
							<p><a href="../contact.php">Contact us</a> today or come on in to our <a href="../about.php">showroom</a> to 
								meet with a professional salesperson and view our current selection of brick.</p>
						</div>
				      	<?php
				      		generate_Thumb('./brickShowroom/imgThumb/', './brickShowroom/img/','0');
						?>
				        <!--p>Some text in the modal.</p-->
				      </div>
				      <div class="modal-footer">
				      	
				      	<?php
				      		//include_once("../includes/uploadImg.php");
				      		if(isset($_SESSION['Administrator'])){
					      		if($_SESSION['Administrator']==1){
					      			echo '<button type="button" onclick="JSuploadImage(&quot;Brick/brickShowroom &quot;)" class="btn btn-default">New</button>';//Updated added parameter to add modal was blank
					      		}
							}
				      	?>
				        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				      </div>
				    </div>
				
				  </div>
				</div>
				
				<!-- Link to the FAQ section -->
				<a href="./FAQ.php" class="modalLink col-xs-6 col-md-3" >Brick FAQ</a>
				
				
				<!-- Trigger the modal with a button -->
				<a class="modalLink col-xs-6 col-md-3 clickable"data-toggle="modal" data-target="#stoneShowroomModal">Stone Showroom</a>
				
				<!-- Modal -->
				<div id="stoneShowroomModal" class="modal fade" role="dialog">
				  <div class="modal-dialog">
				
				    <!-- Modal content-->
				    <div class="modal-content">
				      <div class="modal-header">
				      	<button type="button" class="close" data-dismiss="modal">&times;</button>
				        <h4 class="modal-title">Cultured Stone showroom</h4>
				        
				      	<ul class="nav nav-tabs" data-tabs="tabs">
						  <li class="active">
						    <a href="#boral" data-toggle="tab">Boral</a>
						  </li>
						  <li><a href="#stoneCraft" data-toggle="tab">Stone Craft</a></li>
						  <li><a href="#halquist" data-toggle="tab">Halquist</a></li>
						  <li><a href="#quarry" data-toggle="tab">Quarry Ridge</a></li>
						</ul>
						
				      </div>
				      <div class="modal-body row">
				      	<div class="col-xs-12 bannerContent">
					        <p>We carry the area's largest selecion of cultured stone product from: <a href="http://www.instoneco.com/cultured_stone/" target="_blank">Boral, </a>
					        	<a href="http://www.stonecraft.com/products.php" target="_blank">Stone Craft, </a>
					        	<a href="http://halquiststone.com/building_collections/collectionindex.html">Halquist </a> and 
					        	<a href="http://www.quarryridgestone.com/products/" target="_blank">Quarry Ridge</a> 
					        	Feel free to browse some of the images on our site or visit our partners sites for full details.</p>
						</div>
						<div class="tab-content">
							<div class="tab-pane active" id="boral">
								<?php
									if(isset($_SESSION['Administrator'])){
							      		if($_SESSION['Administrator']==1){
							      			echo '<button type="button" onclick="JSuploadImage(&quot;Brick/stoneShowroom/Boral &quot;)" style="width:100%" class="btn btn-default">New</button>';//Updated added parameter to add modal was blank
							      		}
									}
						      		generate_Thumb('./stoneShowroom/Boral/imgThumb/', './stoneShowroom/Boral/img/','0');
								?>
							</div>
							<div class="tab-pane" id="stoneCraft">
								<?php
									if(isset($_SESSION['Administrator'])){
							      		if($_SESSION['Administrator']==1){
							      			echo '<button type="button" onclick="JSuploadImage(&quot;Brick/stoneShowroom/Stonecraft &quot;)" style="width:100%" class="btn btn-default">New</button>';//Updated added parameter to add modal was blank
							      		}
									}
						      		generate_Thumb('./stoneShowroom/Stonecraft/imgThumb/', './stoneShowroom/Stonecraft/img/','0');
								?>
							</div>
							<div class="tab-pane" id="halquist">
								<?php
									if(isset($_SESSION['Administrator'])){
							      		if($_SESSION['Administrator']==1){
							      			echo '<button type="button" onclick="JSuploadImage(&quot;Brick/stoneShowroom/StoneCraft &quot;)" style="width:100%" class="btn btn-default">New</button>';//Updated added parameter to add modal was blank
							      		}
									}
						      		generate_Thumb('./stoneShowroom/Halquist/imgThumb/', './stoneShowroom/Halquist/img/','0');
								?>
							</div>
							<div class="tab-pane" id="quarry">
								<?php
									if(isset($_SESSION['Administrator'])){
							      		if($_SESSION['Administrator']==1){
							      			echo '<button type="button" onclick="JSuploadImage(&quot;Brick/stoneShowroom/QuarryRidge &quot;)" style="width:100%" class="btn btn-default">New</button>';//Updated added parameter to add modal was blank
							      		}
									}
						      		generate_Thumb('./stoneShowroom/QuarryRidge/imgThumb/', './stoneShowroom/QuarryRidge/img/','0');
								?>
							</div>
						</div>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				      </div>
				    </div>
				
				  </div>
				</div>
				
				<!-- Trigger the modal with a button -->
				<a class="modalLink col-xs-6 col-md-3 clickable"data-toggle="modal" data-target="#stoneGalleryModal">Address Stones</a>
				
				<!-- Modal -->
				<div id="stoneGalleryModal" class="modal fade" role="dialog">
				  <div class="modal-dialog">
				
				    <!-- Modal content-->
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal">&times;</button>
				        <h4 class="modal-title">Address Stones</h4>
				      </div>
				      <div class="modal-body row">
				        <div class="col-xs-12 bannerContent">
							<p>Feel free to browse our many varieties of address stones.</p>
							<p><a href="../contact.php">Contact us</a> today or come on in to our <a href="../about.php">showroom</a> to 
								meet with a professional salesperson.</p>
						</div>
						<?php
				      		generate_Thumb('./stoneGallery/imgThumb/', './stoneGallery/img/','0');
						?>
				      </div>
				      
				      <div class="modal-footer">
				      	<?php
				      		//include_once("../includes/uploadImg.php");
				      		if(isset($_SESSION['Administrator'])){
					      		if($_SESSION['Administrator']==1){
					      			echo '<button type="button" onclick="JSuploadImage(&quot;Brick/stoneGallery &quot;)" class="btn btn-default">New</button>';//Updated added parameter to add modal was blank
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
		 	<h1>Northeast Wisconsin's premier provider of Stone & Brick</h1>
		 	<div class="col-xs-12 col-md-4">
		 		<h3>Maintenance Free</h3>
		 		<p>Brick never needs painting or cleaning. It doesn't rot, fade, peel or dent. Save money on maintenance and avoid headaches by choosing brick.</p>
	 		</div>
		 	<div class="col-xs-12 col-md-4">
		 		<h3>Energy Efficient</h3>
		 		<p>Brick is a proven insulator. It is slow to lose or absorb heat, reducing your heating and cooling bill.</p>
		 		
		 	</div>
		 	<div class="col-xs-12 col-md-4">
		 		<h3>Increase Value</h3>
		 		<p>On average, brick homes command at least 6% more than other home styles.  So, when a brick house sells, the return on investment almost always proves to be a wise one.</p>
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
                	<img src="./pictures/P1030869_2064x800.png"/>
            	</div>
                <div class="carousel-caption">
                    <h2></h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Two');">
                	<img src="./pictures/P1030878_2064x800.png"/>
                </div>
                <div class="carousel-caption">
                    <h2></h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Two');">
                	<img src="./pictures/P1030881_2064x800.png"/>
                </div>
                <div class="carousel-caption">
                    <h2></h2>
                </div>
            </div>
            <!--div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Two');">
                	<img src="Pictures/A_Winner_DSC02405.JPG" style="min-width:500px;"/>
                </div>
                <div class="carousel-caption">
                    <h2></h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Two');">
                	<img src="Pictures/A_Winner_DSC02408.JPG" style="min-width:500px;"/>
                </div>
                <div class="carousel-caption">
                    <h2></h2>
                </div>
            </div-->
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
        </header>
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
