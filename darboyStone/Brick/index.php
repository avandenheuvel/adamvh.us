<?php
	session_start();
	$_SESSION['Administrator']=1;
	define('_ROOT', "../");
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
	<link href='https://fonts.googleapis.com/css?family=Oswald:700|Merriweather' rel='stylesheet' type='text/css'>
	
	<script src="../js/jquery.js" type="text/javascript"></script>
	<script src="../js/bootstrap.js" type="text/javascript"></script>
	
</head>
<body>
		
	<?php
		include("../header.php");
	?>

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
				      		generate_Thumb('./brickShowroom/imgThumb/', './brickShowroom/img/');
						?>
				        <!--p>Some text in the modal.</p-->
				      </div>
				      <div class="modal-footer">
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
				      </div>
				      <div class="modal-body row">
				      	<div class="col-xs-12 bannerContent">
					        <p>Feel free to browse these sample images of some of the variety of cultured stone we supply.</p>
							<p><a href="../contact.php">Contact us</a> today or come on in to our <a href="../about.php">showroom</a> to 
								meet with a professional salesperson and view our current selection of cultured stone.</p>
						</div>
				      </div>
				      <?php
				      		generate_Thumb('./stoneShowroom/imgThumb/', './stoneShowroom/img/');
						?>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				      </div>
				    </div>
				
				  </div>
				</div>
				
				<!-- Trigger the modal with a button -->
				<a class="modalLink col-xs-6 col-md-3 clickable"data-toggle="modal" data-target="#stoneGalleryModal">Stone Gallery</a>
				
				<!-- Modal -->
				<div id="stoneGalleryModal" class="modal fade" role="dialog">
				  <div class="modal-dialog">
				
				    <!-- Modal content-->
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal">&times;</button>
				        <h4 class="modal-title">Cultured Stone Project Gallery</h4>
				      </div>
				      <div class="modal-body row">
				        <div class="col-xs-12 bannerContent">
							<p>Feel free to browse projects we've supplied cultured stone for.</p>
							<p><a href="../contact.php">Contact us</a> today or come on in to our <a href="../about.php">showroom</a> to 
								meet with a professional salesperson and view our current selection of cultured Stone.</p>
						</div>
				      </div>
				      <?php
				      		generate_Thumb('./stoneGallery/imgThumb/', './stoneGallery/img/');
						?>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				      </div>
				    </div>
				
				  </div>
				</div>
				 
			</div><!--End Thumbnail row-->
        
         <div class="row bannerInfo">
		 	<h1>The Fox Valley's premier provider of Stone & Brick</h1>
		 	<div class="col-xs-12 col-md-4">
		 		<h3>Point 1</h3>
		 		<p>This is for Mark to fill in... Afterall... He's the wordsmith</p>
	 		</div>
		 	<div class="col-xs-12 col-md-4">
		 		<h3>Point 2</h3>
		 		<p>I'm sure we can find another compelling reason to list here.</p>
		 		
		 	</div>
		 	<div class="col-xs-12 col-md-4"><h3>Point 3</h3>
		 		<p>Three bullet points seems to fit well in the layout... Need more or less... Let me know.</p>
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
		<div class="row getStarted">
			  <div class="col-xs-12 col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
			  	<h1>Let's get started</h1>
			  	<p>Contact a Darboy Stone and Brick Representative today</p>
			  	<p>We will connect you with one of or professional design consultants</p>
			  	<h4><a href="mailto:customerservice@darboystone.com">&#9993; e-mail</a><span>|</span><a>&#9743;  (920)734-2882</a></h4>
		  		<button class="btn btn-lg">Contact us</button>
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
