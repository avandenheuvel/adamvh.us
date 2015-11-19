<?php
	session_start();
	define('_ROOT', "../");
	$source = "Landscape";
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
	<script src="../includes/scripts.js" type="text/javascript"></script>
	
</head>
<body>
		
	<?php
		include("../header.php");
	?>
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
	                <h1 class="page-header">Landscape
	                    <small></small>
	                </h1>
	                <ol class="breadcrumb">
	                    <li><a href="../">Home</a>
	                    </li>
	                    <li class="active">Landscape</li>
	                </ol>
	            </div>
	        </div>
			
			<div class="row">
				<!--div class="col-md-8 hidden-xs sideBanner">
					<img src="./pictures/Chocolate Bordeaux 7.jpg" />
				</div-->
				
				<div class="col-xs-12 bannerContent">
					<p>Stop in today to see our wide array of landscaping ideas displayed in our outdoor idea gallery to help you visualize your landscape project. Darboy Stone & Brick carries everything you need to finish the job.</p>
				</div>
			</div>	
		</div>
		
			<!--Thumbnail section-->
			<div class="row linkTileModern" id="landscapeBG">
				<?php
					include_once("../includes/generateThumb.php");
				?>
				
				<!-- Trigger the modal with a button -->
				<a class="modalLink col-xs-4 clickable"data-toggle="modal" data-target="#landscapeShowroomModal">Idea Gallery</a>
				
				<!-- Modal -->
				<div id="landscapeShowroomModal" class="modal fade" role="dialog">
				  <div class="modal-dialog">
				
				    <!-- Modal content-->
				    <div class="modal-content">
				      <div class="modal-header">
				      	<button type="button" class="close" data-dismiss="modal">&times;</button>
				        <h4 class="modal-title">Landscape Showroom</h4>
				        
				      </div>
				      <div class="modal-body row">
				      	<div class="col-xs-12 bannerContent">
					        <p>View our large selection of Landscape pavers</p>
						</div>
						<div class="tab-content">
							<div class="tab-pane active" id="type">
								<?php
						      		generate_Thumb('./paverShowroom/imgThumb/', './paverShowroom/img/','0');
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
				
				<!-- This one's just a link page-->
				<li class="dropdown col-xs-4 modalLink clickable">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Products<b class="caret"></b></a>
	                <ul class="dropdown-menu">
	                    <li><a href="">Decorative Stone</a></li>
	                    <li><a href="">Paving Brick</a></li>
	                    <li><a href="">Retaining Wall</a></li>
	                    <li><a href="">Exposed aggregate</a></li>
	                    <li><a href="">Mulch</a></li>
	                    <li><a href="">Topsoil</a></li>
	                    <li><a href="">Screenings</a></li>
	                    <li><a href="">Edging</a></li>
	                    <li><a href="">Fabric</a></li>
	                </ul>
                </li>
				
				<!-- This one's just a link to the FAQ page-->
				<a href="./FAQ.php" class="modalLink col-xs-4">FAQ</a>			
				 
			 
			 
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
		 	<h1>One of the Fox Valley's leading supplier's of landscape materials</h1>
		 	<div class="col-xs-12 col-md-4">
		 		<img src="../img/landscape.JPG" class="img-circle">
		 		<h3>Decorative Stone</h3>
		 		<p></p>
	 		</div>
		 	<div class="col-xs-12 col-md-4"><h3>Retaining Walls</h3>
		 		<p></p>
		 		
		 	</div>
		 	<div class="col-xs-12 col-md-4">
		 		<img src="../img/landscape.JPG" class="img-circle">
		 		<h3>Paver Brick</h3>
		 		<p></p>
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
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
        </header>
        
        <!--Landscape product section-->
        <div class="row landscapeProducts">
        
	        <!--Begin landscape product tabs-->	
	    	<div class="col-xs-12 lsProductSelect">
				<ul class="nav nav-tabs" data-tabs="tabs">
					<li class="active"><a href="#stone" data-toggle="tab">Decorative Stone</a></li>
	                <li><a href="#paver" data-toggle="tab">Paving Brick</a></li>
	                <li><a href="#retainer" data-toggle="tab">Retaining Wall</a></li>
	                <li><a href="#aggregate" data-toggle="tab">Exposed aggregate</a></li>
	                <li><a href="#mulch" data-toggle="tab">Mulch</a></li>
	                <li><a href="#topsoil" data-toggle="tab">Topsoil</a></li>
	                <li><a href="#screening" data-toggle="tab">Screenings</a></li>
	                <li><a href="#edging" data-toggle="tab">Edging</a></li>
	                <li><a href="#fabric" data-toggle="tab">Fabric</a></li>
				</ul><!--End landscape product tabs-->	
				
				<!--Begin landscape product descriptions-->
				<script>
					function showProduct(prod){
						document.getElementById(prod).style.visibility = "visible";
					}
				</script>
				<div class="tab-content col-xs-12 lsProductDesc">
					<div class="tab-pane active" id="stone">
						<!--Selector-->
						<div class="productScroll">
							<div class="productSelector">
								<a onclick="showProduct('barkstone'); return false;"><img src="./stone/Barkstone.jpg"/><p>Barkstone</p></a>
								<a onclick="showProduct('brownGranite');"><img src="./stone/brown granite.jpg"/><p>Brown Granite</p></a>
								<a onclick="showProduct('carmel');"><img src="./stone/carmel.jpg"/><p>Carmel 1.25"</p></a>
							</div>
						</div><!--End Selector-->
						<!--Begin Stone Products-->
						<div id="productDisplay">
							<div id="barkstone" style="visibility:hidden;">
								<h1>Barkstone!</h1>
							</div>
						</div><!--End Stone Products-->
		        	</div>
					<div class="tab-pane" id="paver">paver
		        	</div>
		        	<div class="tab-pane" id="retainer">retainer
		        	</div>
		        	<div class="tab-pane" id="aggregate">aggregate
		        	</div>
		        	<div class="tab-pane" id="mulch">mulch
		        	</div>
		        	<div class="tab-pane" id="topsoil">topsoil
		        	</div>
		        	<div class="tab-pane" id="screening">screening
		        	</div>
		        	<div class="tab-pane" id="edging">edging
		        	</div>
		        	<div class="tab-pane" id="fabric">fabric
		        	</div>
		        	<div class="tab-pane" id="">
		        	</div>
		        </div>
	        </div><!--End landscape product descriptions-->
        </div>	
        
        <div id="contact" class="row getStarted activity-section">
			  <div class="col-xs-12 col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
			  	<h1>Let's get started</h1>
			  	<p>Contact a Darboy Stone and Brick Representative today</p>
			  	<p>We will connect you with one of or professional design consultants</p>
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
