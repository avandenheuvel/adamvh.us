<?php
	session_start();
	define('_ROOT', "../");
	$source = "Landscape";
?>

<!DOCTYPE html>

<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	<meta name="description" content="Darboy Stone and Brick. Suppliers of Landscaping products including: Paver Bricks, Retaining walls, Landscape Stone, Landscape Mulch and much more" />
	<meta name="keywords" content="Paver Brick, Landscape Stone, Retaining walls, Landscape Mulch"/> 
	<title>
		Darboy Stone & Brick - Landscape
	</title>


	<link href="../styles/bootstrap.css"  rel="stylesheet"/>
	<link href="../styles/adamvh.css" rel="stylesheet" type="text/css" />
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
					<p>Darboy Stone & Brick carries a large assortment of landscaping products including: Decorative stone, paving brick, retaining walls, exposed aggregate, mulch, topsoil, screenings and more. View some of our products by selecting a tab below, or stop into our <a href="../about.php">Showroom</a> to meet with a professional sales associate. We have an outdoor idea gallery so you can see for yourself and better visualize your landscape project. </p>
				</div>
			</div>	
		</div>
		
			<!--Thumbnail section-->
			<div class="row linkTileModern" id="landscapeBG">
				<?php
					include_once("../includes/generateThumb.php");
				?>
				
				<!-- Trigger the modal with a button -->
				<a class="modalLink col-xs-6 clickable"data-toggle="modal" data-target="#landscapeShowroomModal">Idea Gallery</a>
				
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
						      		generate_Thumb('./landscapeGallery/imgThumb/', './landscapeGallery/img/','0');
								?>
							</div>
						</div>
				      </div>
				      <div class="modal-footer">
				      	<?php
				      		//include_once("../includes/uploadImg.php");
				      		if(isset($_SESSION['Administrator'])){
					      		if($_SESSION['Administrator']==1){
					      			echo '<button type="button" onclick="JSuploadImage(&quot;Landscape/landscapeGallery &quot;)" class="btn btn-default">New</button>';//Updated added parameter to add modal was blank
					      		}
							}
				      	?>
				        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				      </div>
				    </div>
				
				  </div>
				</div>
				
				<!-- This one's just a link page-->
				<li class="dropdown col-xs-6 modalLink clickable">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Products<b class="caret"></b></a>
	                <ul class="dropdown-menu">
	                    <li><a href="#lsProducts">Decorative Stone</a></li>
	                    <li><a href="#lsProducts">Paving Brick</a></li>
	                    <li><a href="#lsProducts">Retaining Wall</a></li>
	                    <li><a href="#lsProducts">Exposed aggregate</a></li>
	                    <li><a href="#lsProducts">Mulch</a></li>
	                    <li><a href="#lsProducts">Topsoil</a></li>
	                    <li><a href="#lsProducts">Screenings</a></li>
	                    <li><a href="#lsProducts">Edging</a></li>
	                    <li><a href="#lsProducts">Fabric</a></li>
	                </ul>
                </li>			
				 
			</div><!--End Thumbnail row-->
			
	
        
        <!--Landscape product section-->
        <div class="row landscapeProducts" id="lsProducts">
        
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
	                <li><a href="#lsFAQ" data-toggle="tab">FAQ</a></li>
				</ul><!--End landscape product tabs-->	
				
				<!--Begin landscape product descriptions-->
				<script>
					function showProduct(prod,parent){
						if($('#'+parent).children(':visible').length == 0) {
						   // action when all are hidden
							document.getElementById(prod).style.display = "block";							
						}else{
						   	$("#"+parent).children().hide();
							document.getElementById(prod).style.display = "block";
						}
					}
				</script>
				<div class="tab-content col-xs-12 lsProductDesc">
					<div class="tab-pane active" id="stone">
						<?php include("prodStone.php");?>						
		        	</div>
    				<div class="tab-pane" id="paver">
						<?php include("prodPaver.php");?>
					</div>
		        	<div class="tab-pane" id="retainer">
		        		<?php include("prodRetainer.php");?>
		        	</div>
		        	<div class="tab-pane" id="aggregate">
						<?php include("prodAggregate.php");?>
		        	</div>
		        	<div class="tab-pane" id="mulch">
						<?php include("prodMulch.php");?>
		        	</div>
		        	<div class="tab-pane" id="topsoil">
						<?php include("prodTopSoil.php");?>
		        	</div>
		        	<div class="tab-pane" id="screening">
						<?php include("prodScreening.php");?>
		        	</div>
		        	<div class="tab-pane" id="lsFAQ">
		        		<?php include("lsFAQ.php");?>
		        	</div>
		        </div>
	        </div><!--End landscape product descriptions-->
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
                	<img src="pictures/Copthorne-Burnt Clay, Stonehenge-Sierra, Series 3000-Black Onyx, Brussels Fullnose-Sandstone2015-11-24_20-39.JPG"/>
            	</div>
                <div class="carousel-caption">
                    <h2></h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Two');">
                	<img src="pictures/Stonehenge-Sierra, Brussel Dimensional-Sierra, Copthorne-Burgundy2015-11-24_20-39.JPG"/>
                </div>
                <div class="carousel-caption">
                    <h2></h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Two');">
                	<img src="pictures/Stonehenge-Sierra, Brussels Fullnose-Sierra, Town Hall-Burgundy2015-11-24_20-39.JPG"/>
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
