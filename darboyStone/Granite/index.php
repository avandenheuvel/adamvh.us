<?php
	session_start();
	define('_ROOT', "../");
	$source = "Granite";
?>

<!DOCTYPE html>

<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	<meta name="description" content="Darboy Stone and Brick. Suppliers of Fine Granite products for use in your home or buisness" />
	<meta name="keywords" content="Granite Countertops, Granite Bathroom, Granite Kitchen"/> 
	<title>
		Darboy Stone & Brick - Granite
	</title>


	<link href="../styles/bootstrap.css"  rel="stylesheet"/>
	<link href="../styles/adamvh.css" rel="stylesheet" />
	<link href='https://fonts.googleapis.com/css?family=Oswald:700|Merriweather' rel='stylesheet' type='text/css'>
	
	<script src="../js/jquery.js" type="text/javascript"></script>
	<script src="../js/bootstrap.js" type="text/javascript"></script>
	<script src="../includes/scripts.js" type="text/javascript"></script>
	
</head>
<body>
		
	<?php
		include("../header.php");
	?>
	<!--This is used for bringing in the addModal-->
	<div id="output"></div>
	
	<script>
		//adjust modal body sizes
		//http://stackoverflow.com/questions/14242227/bootstrap-modal-body-max-height-100
		/*
		var fit_modal_body;
		
		fit_modal_body = function(modal) {
		  var body, bodypaddings, header, headerheight, height, modalheight;
		  header = $(".modal-header", modal);
		  footer = $(".modal-footer", modal);
		  body = $(".modal-body", modal);
		  modalheight = parseInt(modal.css("height"));
		  headerheight = parseInt(header.css("height")) + parseInt(header.css("padding-top")) + parseInt(header.css("padding-bottom"));
		  footerheight = parseInt(footer.css("height")) + parseInt(footer.css("padding-top")) + parseInt(footer.css("padding-bottom"));
		  bodypaddings = parseInt(body.css("padding-top")) + parseInt(body.css("padding-bottom"));
		  height = $(window).height() - headerheight - footerheight - bodypaddings - 150;
		  return body.css({"max-height": "" + height + "px", 'height':'auto'});
		};
		
		fit_modal_body($(".modal"));
		$(window).resize(function() {
		  return fit_modal_body($(".modal"));
		});*/
	</script>

	<div class="container-fluid">
		<!-- Page Heading/Breadcrumbs -->
	        <div class="row">
	            <div class="col-xs-12">
	                <h1 class="page-header">Granite
	                    <small></small>
	                </h1>
	                <ol class="breadcrumb">
	                    <li><a href="../">Home</a>
	                    </li>
	                    <li class="active">Granite</li>
	                </ol>
	            </div>
	        </div>
			
			<div class="row">
				<!--div class="col-md-8 hidden-xs sideBanner">
					<img src="./pictures/Chocolate Bordeaux 7.jpg" />
				</div-->
				
				<div class="col-xs-12 bannerContent">
					<p>Darboy Stone & Brick puts great effort to remain the premier provider of granite surfaces in Northeast Wisconsin.</p>
					<p>We specialize in custom countertops, vanities, fireplace surrounds, wet bars, tub decks, sinks, and more! We offer the convenience of an onsite inventory of imported marble and granite slabs direct from the supplier. We offer the highest quality and largest selection available, giving you the opportunity to view and approve slabs before a home or business project is fabricated.</p>
				</div>
			</div>	
		</div>
		
<!--Thumbnail section-->
			<div class="row linkTileModern" id="graniteBG">
				<?php
					include_once("../includes/generateThumb.php");
				?>
				
				<!-- Trigger the modal with a button -->
				<a class="modalLink col-xs-6 col-md-3 clickable"data-toggle="modal" data-target="#graniteShowroomModal">Granite Showroom</a>
				
				<!-- Modal -->
				<div id="graniteShowroomModal" class="modal fade" role="dialog">
				  <div class="modal-dialog">
				
				    <!-- Modal content-->
				    <div class="modal-content">
				      <div class="modal-header">
				      	<button type="button" class="close" data-dismiss="modal">&times;</button>
				        <h4 class="modal-title">Granite Showroom</h4>
				        
				      	<ul class="nav nav-tabs" data-tabs="tabs">
						  <li class="active">
						    <a href="#type" data-toggle="tab">Types</a>
						  </li>
						  <li><a href="#edge" data-toggle="tab">Edges</a></li>
						</ul>
						
				      </div>
				      <div class="modal-body row">
				      	<div class="col-xs-12 bannerContent">
					        <p>View our large selection of Granite</p>
						</div>
						<div class="tab-content">
							<div class="tab-pane active" id="type">
								<?php
									if(isset($_SESSION['Administrator'])){
							      		if($_SESSION['Administrator']==1){
							      			echo '<button type="button" onclick="JSuploadImage(&quot;Granite/graniteShowroom/graniteType &quot;)" style="width:100%" class="btn btn-default">New</button>';//Updated added parameter to add modal was blank
							      		}
									}
						      		generate_Thumb('./graniteShowroom/graniteType/imgThumb/', './graniteShowroom/graniteType/img/','0');
								?>
							</div>
							<div class="tab-pane" id="edge">
								<?php
									if(isset($_SESSION['Administrator'])){
							      		if($_SESSION['Administrator']==1){
							      			echo '<button type="button" onclick="JSuploadImage(&quot;Granite/graniteShowroom/graniteEdge &quot;)" style="width:100%" class="btn btn-default">New</button>';//Updated added parameter to add modal was blank
							      		}
									}
						      		generate_Thumb('./graniteShowroom/graniteEdge/imgThumb/', './graniteShowroom/graniteEdge/img/','0');
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
				
				<!-- This one's just a link to the FAQ page-->
				<a href="./graniteFAQ.php" class="modalLink col-xs-6 col-md-3">Granite FAQ</a>
				
				<!-- Trigger the modal with a button -->
				<a class="modalLink col-xs-6 col-md-3 clickable"data-toggle="modal" data-target="#kitchenModal">Kitchen Gallery</a>
				
				<!-- Modal -->
				<div id="kitchenModal" class="modal fade" role="dialog">
				  <div class="modal-dialog">
				
				    <!-- Modal content-->
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal">&times;</button>
				        <h4 class="modal-title">Kitchen Project Gallery</h4>
				      </div>
				      <div class="modal-body row">
				      	<div class="col-xs-12 bannerContent">
							<p>Feel free to browse these sample images of granite pieces we've installed in the past</p>
							<p><a href="../contact.php">Contact us</a> today or come on in to our <a href="../about.php">showroom</a> to 
								meet with a professional salesperson and view our current selection of granite.</p>
						</div>
				      	<?php
				      		generate_Thumb('./graniteKitchen/imgThumb/', './graniteKitchen/img/','0');
						?>
				        <!--p>Some text in the modal.</p-->
				      </div>
				      <div class="modal-footer">
				      	<?php
				      		//include_once("../includes/uploadImg.php");
				      		if(isset($_SESSION['Administrator'])){
					      		if($_SESSION['Administrator']==1){
					      			echo '<button type="button" onclick="JSuploadImage(&quot;Granite/graniteKitchen &quot;)" class="btn btn-default">New</button>';//Updated added parameter to add modal was blank
					      		}
							}
				      	?>
				        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				      </div>
				    </div>
				
				  </div>
				</div>
				
				<!-- Trigger the modal with a button -->
				<a class="modalLink col-xs-6 col-md-3 clickable"data-toggle="modal" data-target="#bathModal">Bathroom Gallery</a>
				
				<!-- Modal -->
				<div id="bathModal" class="modal fade" role="dialog">
				  <div class="modal-dialog">
				
				     <!-- Modal content-->
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal">&times;</button>
				        <h4 class="modal-title">Bathroom Project Gallery</h4>
				      </div>
				      <div class="modal-body row">
				      	<div class="col-xs-12 bannerContent">
							<p>Feel free to browse these sample images of granite pieces we've installed in the past</p>
							<p><a href="../contact.php">Contact us</a> today or come on in to our <a href="../about.php">showroom</a> to 
								meet with a professional salesperson and view our current selection of granite.</p>
						</div>
				      	<?php
				      		generate_Thumb('./graniteBathroom/imgThumb/', './graniteBathroom/img/','0');
						?>
				        <!--p>Some text in the modal.</p-->
				      </div>
				      <div class="modal-footer">
				      	<?php
				      		//include_once("../includes/uploadImg.php");
				      		if(isset($_SESSION['Administrator'])){
					      		if($_SESSION['Administrator']==1){
					      			echo '<button type="button" onclick="JSuploadImage(&quot;Granite/graniteBathroom &quot;)" class="btn btn-default">New</button>';//Updated added parameter to add modal was blank
					      		}
							}
				      	?>
				        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				      </div>
				    </div>
				
				  </div>
				</div>
				
			  <!--div class="col-xs-12 col-sm-6 col-lg-3">
		  		<div class="panel panel-default linkCircle2">
		  			<div class="panel-heading">
		  				<img src="./pictures/Santa Cecelia square.png" class="img-circle" />
		  				<h3>Kitchen Idea Gallery</h3>
		  			</div>
		  			<div class="panel-body">
		  				<p>Browse some of our recent kitchen work to gain ideas for your own project!</p>
		  				<a href="./graniteKitchen" class="btn btn-primary">Kitchen</a>
	  				</div>
				</div>
			 </div>
			 
			
				 
			 <div class="col-xs-12 col-sm-6 col-lg-3">
		  		<div class="panel panel-default linkCircle2">
		  			<div class="panel-heading">
		  				<img src="./pictures/granite_showroom square.png" class="img-circle" />
		  				<h3>Granite Showroom</h3>
		  			</div>
		  			<div class="panel-body">	
			  			<p>View granite samples</p>
			  			<p>Visit our showroom to see some representative granite samples</p>
			  			<a href="./graniteShowroom" class="btn btn-primary">Showroom</a>
		  			</div>
				</div>
			 </div>
			 
			 <div class="col-xs-12 col-sm-6 col-lg-3">
		  		<div class="panel panel-default linkCircle2">
		  			<div class="panel-heading">
		  				<img src="./pictures/Persian Brown square.png" class="img-circle" />
		  				<h3>Bathroom Idea Gallery</h3>
		  			</div>
		  			<div class="panel-body">
		  				<p>View some of our recent bathroom projects</p>
	  				</div>
				</div>
			 </div>
			 
			 <div class="col-xs-12 col-sm-6 col-lg-3">
		  		<div class="panel panel-default linkCircle2">
		  			<div class="panel-heading">
		  				<img src="./pictures/star beach square.png" class="img-circle" />
		  				<h3>Granite FAQ</h3>
		  			</div>
		  			
		  			<div class="panel-body">
		  				<p>Frequently asked questions about Granite</p>
		  			</div>
				</div>
			 </div>
			 
			 <!--div class="col-xs-12 col-sm-6 col-lg-3">
		  		<div class="panel panel-default linkCircle2">
		  			<div class="panel-heading">
		  				<img src="./pictures/star beach square.png"class="img-circle"/>
		  				<h3>Granite FAQ</h3>
		  			</div>
		  			
		  			<div class="panel-body">
		  				<p>Frequently asked questions about Granite</p>
		  				<a href="./graniteFAQ.php" class="btn btn-primary">Read More..</a>
		  			</div>
				</div>
			 </div-->
				 
			</div><!--End Thumbnail row-->
        
         <div class="row bannerInfo">
		 	<h1>The Fox Valley's premier provider of Granite</h1>
		 	<div class="col-xs-12 col-md-4">
		 		<h3>Selection</h3>
		 		<p>Our granite experts pre-select only premium grade granite. Second best is never good enough and any off grade material is rejected before it makes our display cases. We offer you, our customer, the opportunity to view the largest selection of granite in all of Northeast Wisconsin</p>
	 		</div>
		 	<div class="col-xs-12 col-md-4"><h3>Service</h3>
		 		<p>Darboy Stone & Brick has more experience installing granite than any other granite company in the area. Kitchens, bathrooms, bars, commercial or residential. No job is too big or too small and we have the know how to get the job done right!</p>
		 		
		 	</div>
		 	<div class="col-xs-12 col-md-4"><h3>Quality</h3>
		 		<p>We employ state-of-the-art fabrication systems direct from Italy, allowing us to produce a professional job by utilizing the CNC Digitizing Technology which offers the precise fabrication of marble & granite projects including routing, profiling milling, honing & polishing. Our stone specialists can fabricate any size job from a single vanity to an entire kitchen design.</p>
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
                	<img src="./pictures/Chocolate Bordeaux 10.png"/>
            	</div>
                <div class="carousel-caption">
                    <h2></h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Two');">
                	<img src="./pictures/Super White 9.png"/>
                </div>
                <div class="carousel-caption">
                    <h2></h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Two');">
                	<img src="./pictures/CQ Iceland.png"/>
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
			  	<p>Or, come <a href="./about">visit us</a> to see our current selection of product offerings</p>
			  	<h4><a href="mailto:customerservice@darboystone.com">&#9993; e-mail</a><span>|</span><a>&#9743;  (920)734-2882</a></h4>
		  		<a href="../contact.php"><button class="btn btn-lg">Contact us</button></a>
		  	</div>
	 	 </div>
        
		<div class="row graniteRow">
			  <div class="col-xs-12 col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
			  	<div class="lgFirst">
				  	<p>Guaranteed quality. Beyond the quality of the stone and installation of your product, we guarantee your satisfaction.</p>
				  	<p>Range of colors and stones to choose from. We carry the largest in house selection of granite in all of Northeast Wisconsin</p>
				  	<p>Affordable, beautiful and functional. Very simply stated, granite is the #1 choice throughout the United States for appearance and functionality.</p>
				  	<p>New, state of the art equipment that is imported and designed for our use, coupled with innovative processes to make your surfaces perfect.</p>
				  	<p>In-house selection. You can select your stone here and will approve your stone prior to customization. This guarantees you get the perfect surface for your home.</p>
				  	<p>Top quality material. Every piece of granite we offer is pre-selected, premium grade; inspected by our granite experts before going on display.</p>
				  	<p>Experience. The granite experts at Darboy Stone & Brick have more experience than anyone else in Northeast Wisconsin. Second best is never good enough.</p>
			  	</div>
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
