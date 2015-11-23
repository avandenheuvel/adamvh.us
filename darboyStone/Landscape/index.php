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
			<!--Begin Stone Products-->
						<div id="productDisplayStone">
							<div id="productPlaceholder">
								<h1>Select a product from below to view details</h1>
							</div>
							<div id="barkstone" style="display:none;">
								<div class="col-md-6 col-xs-12 productImg">
									<h1>Barkstone</h1>
									<img src="./stone/Barkstone.jpg" />
									<p>Note that stone is a product of nature and natural color may vary.</p>
								</div>
								<div class="col-md-6 col-xs-12 productDesc">
									<h4>Price: </h4>
									<p>Per Ton</p></br>
									<h4>Minimum Order: </h4>
									<p>1 Ton</p></br>
									<h4>Coverage: </h4>
									<p>300 sq/ft per Ton</p></br>
									<p>*Coverage is an approximate and based on a depth of 1-1/2" - 2".</p></br>
									<p>*Under no circumstances will we be responsible for any miscalculations.</p></br>
									<h4>Maximum delivery load: </h4>
									<p>20 Tons</p></br>
									<h4>Delivery: </h4>
									<p>Based on mileage from our yard. All delivery mileage will be verified by Darboy Stone and Brick. Customers will be contacted if mileage discrepancy is found prior to delivery of order.</p>
								</div>
							</div>
							<div id="brownGranite" style="display:none;">
								<div class="col-md-6 col-xs-12 productImg">
									<h1>Brown Granite</h1>
									<img src="./stone/brown granite.jpg" />
									<p>Note that stone is a product of nature and natural color may vary.</p>
								</div>
								<div class="col-md-6 col-xs-12 productDesc">
									<h4>Price: </h4>
									<p>Per Ton</p></br>
									<h4>Minimum Order: </h4>
									<p>1 Ton</p></br>
									<h4>Coverage: </h4>
									<p>150 sq/ft per Ton</p></br>
									<p>*Coverage is an approximate and based on a depth of 1-1/2" - 2".</p></br>
									<p>*Under no circumstances will we be responsible for any miscalculations.</p></br>
									<h4>Maximum delivery load: </h4>
									<p>20 Tons</p></br>
									<h4>Delivery: </h4>
									<p>Based on mileage from our yard. All delivery mileage will be verified by Darboy Stone and Brick. Customers will be contacted if mileage discrepancy is found prior to delivery of order.</p>
								</div>
							</div>
							<div id="carmel" style="display:none;">
								<div class="col-md-6 col-xs-12 productImg">
									<h1>Carmel 1-1/4"</h1>
									<img src="./stone/carmel.jpg" />
									<p>Note that stone is a product of nature and natural color may vary.</p>
								</div>
								<div class="col-md-6 col-xs-12 productDesc">
									<h4>Price: </h4>
									<p>Per Ton</p></br>
									<h4>Minimum Order: </h4>
									<p>1 Ton</p></br>
									<h4>Coverage: </h4>
									<p>125 sq/ft per Ton</p></br>
									<p>*Coverage is an approximate and based on a depth of 1-1/2" - 2".</p></br>
									<p>*Under no circumstances will we be responsible for any miscalculations.</p></br>
									<h4>Maximum delivery load: </h4>
									<p>20 Tons</p></br>
									<h4>Delivery: </h4>
									<p>Based on mileage from our yard. All delivery mileage will be verified by Darboy Stone and Brick. Customers will be contacted if mileage discrepancy is found prior to delivery of order.</p>
								</div>
							</div>
							<div id="clearGranite" style="display:none;">
								<div class="col-md-6 col-xs-12 productImg">
									<h1>Barkstone</h1>
									<img src="./stone/clear Granite.jpg" />
									<p>Note that stone is a product of nature and natural color may vary.</p>
								</div>
								<div class="col-md-6 col-xs-12 productDesc">
									<h4>Price: </h4>
									<p>Per Ton</p></br>
									<h4>Minimum Order: </h4>
									<p>1 Ton</p></br>
									<h4>Coverage: </h4>
									<p>300 sq/ft per Ton</p></br>
									<p>*Coverage is an approximate and based on a depth of 1-1/2" - 2".</p></br>
									<p>*Under no circumstances will we be responsible for any miscalculations.</p></br>
									<h4>Maximum delivery load: </h4>
									<p>20 Tons</p></br>
									<h4>Delivery: </h4>
									<p>Based on mileage from our yard. All delivery mileage will be verified by Darboy Stone and Brick. Customers will be contacted if mileage discrepancy is found prior to delivery of order.</p>
								</div>
							</div>
							<div id="flintstone" style="display:none;">
								<div class="col-md-6 col-xs-12 productImg">
									<h1>Flintstone 1-1/4"</h1>
									<img src="./stone/flintstone.jpg" />
									<p>Note that stone is a product of nature and natural color may vary.</p>
								</div>
								<div class="col-md-6 col-xs-12 productDesc">
									<h4>Price: </h4>
									<p>Per Ton</p></br>
									<h4>Minimum Order: </h4>
									<p>1 Ton</p></br>
									<h4>Coverage: </h4>
									<p>100 sq/ft per Ton</p></br>
									<p>*Coverage is an approximate and based on a depth of 1-1/2" - 2".</p></br>
									<p>*Under no circumstances will we be responsible for any miscalculations.</p></br>
									<h4>Maximum delivery load: </h4>
									<p>20 Tons</p></br>
									<h4>Delivery: </h4>
									<p>Based on mileage from our yard. All delivery mileage will be verified by Darboy Stone and Brick. Customers will be contacted if mileage discrepancy is found prior to delivery of order.</p>
								</div>
							</div>
							<div id="flintstone34" style="display:none;">
								<div class="col-md-6 col-xs-12 productImg">
									<h1>Flintstone 3/4"</h1>
									<img src="./stone/34 flintstone.jpg" />
									<p>Note that stone is a product of nature and natural color may vary.</p>
								</div>
								<div class="col-md-6 col-xs-12 productDesc">
									<h4>Price: </h4>
									<p>Per Ton</p></br>
									<h4>Minimum Order: </h4>
									<p>1 Ton</p></br>
									<h4>Coverage: </h4>
									<p>150 sq/ft per Ton</p></br>
									<p>*Coverage is an approximate and based on a depth of 1-1/2" - 2".</p></br>
									<p>*Under no circumstances will we be responsible for any miscalculations.</p></br>
									<h4>Maximum delivery load: </h4>
									<p>20 Tons</p></br>
									<h4>Delivery: </h4>
									<p>Based on mileage from our yard. All delivery mileage will be verified by Darboy Stone and Brick. Customers will be contacted if mileage discrepancy is found prior to delivery of order.</p>
								</div>
							</div>
							<div id="indianRiver" style="display:none;">
								<div class="col-md-6 col-xs-12 productImg">
									<h1>Indian River</h1>
									<img src="./stone/indianRiver.jpg" />
									<p>Note that stone is a product of nature and natural color may vary.</p>
								</div>
								<div class="col-md-6 col-xs-12 productDesc">
									<h4>Price: </h4>
									<p>Per Ton</p></br>
									<h4>Minimum Order: </h4>
									<p>1 Ton</p></br>
									<h4>Coverage: </h4>
									<p>125 sq/ft per Ton</p></br>
									<p>*Coverage is an approximate and based on a depth of 1-1/2" - 2".</p></br>
									<p>*Under no circumstances will we be responsible for any miscalculations.</p></br>
									<h4>Maximum delivery load: </h4>
									<p>20 Tons</p></br>
									<h4>Delivery: </h4>
									<p>Based on mileage from our yard. All delivery mileage will be verified by Darboy Stone and Brick. Customers will be contacted if mileage discrepancy is found prior to delivery of order.</p>
								</div>
							</div>
							<div id="merrimac" style="display:none;">
								<div class="col-md-6 col-xs-12 productImg">
									<h1>Merrimac 1-1/2"</h1>
									<img src="./stone/merrimac.jpg" />
									<p>Note that stone is a product of nature and natural color may vary.</p>
								</div>
								<div class="col-md-6 col-xs-12 productDesc">
									<h4>Price: </h4>
									<p>Per Ton</p></br>
									<h4>Minimum Order: </h4>
									<p>1 Ton</p></br>
									<h4>Coverage: </h4>
									<p>125 sq/ft per Ton</p></br>
									<p>*Coverage is an approximate and based on a depth of 1-1/2" - 2".</p></br>
									<p>*Under no circumstances will we be responsible for any miscalculations.</p></br>
									<h4>Maximum delivery load: </h4>
									<p>20 Tons</p></br>
									<h4>Delivery: </h4>
									<p>Based on mileage from our yard. All delivery mileage will be verified by Darboy Stone and Brick. Customers will be contacted if mileage discrepancy is found prior to delivery of order.</p>
								</div>
							</div>
							<div id="merrimac58" style="display:none;">
								<div class="col-md-6 col-xs-12 productImg">
									<h1>Merrimac 1-1/2"</h1>
									<img src="./stone/58 merrimac.jpg" />
									<p>Note that stone is a product of nature and natural color may vary.</p>
								</div>
								<div class="col-md-6 col-xs-12 productDesc">
									<h4>Price: </h4>
									<p>Per Ton</p></br>
									<h4>Minimum Order: </h4>
									<p>1 Ton</p></br>
									<h4>Coverage: </h4>
									<p>175 sq/ft per Ton</p></br>
									<p>*Coverage is an approximate and based on a depth of 1-1/2" - 2".</p></br>
									<p>*Under no circumstances will we be responsible for any miscalculations.</p></br>
									<h4>Maximum delivery load: </h4>
									<p>20 Tons</p></br>
									<h4>Delivery: </h4>
									<p>Based on mileage from our yard. All delivery mileage will be verified by Darboy Stone and Brick. Customers will be contacted if mileage discrepancy is found prior to delivery of order.</p>
								</div>
							</div>
							<div id="midnightBlue" style="display:none;">
								<div class="col-md-6 col-xs-12 productImg">
									<h1>Midnight Blue</h1>
									<img src="./stone/midnight blue.jpg" />
									<p>Note that stone is a product of nature and natural color may vary.</p>
								</div>
								<div class="col-md-6 col-xs-12 productDesc">
									<h4>Price: </h4>
									<p>Per Ton</p></br>
									<h4>Minimum Order: </h4>
									<p>1 Ton</p></br>
									<h4>Coverage: </h4>
									<p>150 sq/ft per Ton</p></br>
									<p>*Coverage is an approximate and based on a depth of 1-1/2" - 2".</p></br>
									<p>*Under no circumstances will we be responsible for any miscalculations.</p></br>
									<h4>Maximum delivery load: </h4>
									<p>20 Tons</p></br>
									<h4>Delivery: </h4>
									<p>Based on mileage from our yard. All delivery mileage will be verified by Darboy Stone and Brick. Customers will be contacted if mileage discrepancy is found prior to delivery of order.</p>
								</div>
							</div>
							<div id="mississippiRiver" style="display:none;">
								<div class="col-md-6 col-xs-12 productImg">
									<h1>Mississippi River 1 1/2" Decorative Stone</h1>
									<img src="./stone/mississippiRiver.jpg" />
									<p>Note that stone is a product of nature and natural color may vary.</p>
								</div>
								<div class="col-md-6 col-xs-12 productDesc">
									<h4>Price: </h4>
									<p>Per Ton</p></br>
									<h4>Minimum Order: </h4>
									<p>1 Ton</p></br>
									<h4>Coverage: </h4>
									<p>100 sq/ft per Ton</p></br>
									<p>*Coverage is an approximate and based on a depth of 1-1/2" - 2".</p></br>
									<p>*Under no circumstances will we be responsible for any miscalculations.</p></br>
									<h4>Maximum delivery load: </h4>
									<p>20 Tons</p></br>
									<h4>Delivery: </h4>
									<p>Based on mileage from our yard. All delivery mileage will be verified by Darboy Stone and Brick. Customers will be contacted if mileage discrepancy is found prior to delivery of order.</p>
								</div>
							</div>
							<div id="mississippi34" style="display:none;">
								<div class="col-md-6 col-xs-12 productImg">
									<h1>Mississippi River 3/4" Decorative Stone</h1>
									<img src="./stone/34 mississippi.jpg" />
									<p>Note that stone is a product of nature and natural color may vary.</p>
								</div>
								<div class="col-md-6 col-xs-12 productDesc">
									<h4>Price: </h4>
									<p>Per Ton</p></br>
									<h4>Minimum Order: </h4>
									<p>1 Ton</p></br>
									<h4>Coverage: </h4>
									<p>150 sq/ft per Ton</p></br>
									<p>*Coverage is an approximate and based on a depth of 1-1/2" - 2".</p></br>
									<p>*Under no circumstances will we be responsible for any miscalculations.</p></br>
									<h4>Maximum delivery load: </h4>
									<p>20 Tons</p></br>
									<h4>Delivery: </h4>
									<p>Based on mileage from our yard. All delivery mileage will be verified by Darboy Stone and Brick. Customers will be contacted if mileage discrepancy is found prior to delivery of order.</p>
								</div>
							</div>
							<div id="peastone" style="display:none;">
								<div class="col-md-6 col-xs-12 productImg">
									<h1>Peastone</h1>
									<img src="./stone/peastone.jpg" />
									<p>Note that stone is a product of nature and natural color may vary.</p>
								</div>
								<div class="col-md-6 col-xs-12 productDesc">
									<h4>Price: </h4>
									<p>Per Ton</p></br>
									<h4>Minimum Order: </h4>
									<p>1 Ton</p></br>
									<h4>Coverage: </h4>
									<p>200 sq/ft per Ton</p></br>
									<p>*Coverage is an approximate and based on a depth of 1-1/2" - 2".</p></br>
									<p>*Under no circumstances will we be responsible for any miscalculations.</p></br>
									<h4>Maximum delivery load: </h4>
									<p>20 Tons</p></br>
									<h4>Delivery: </h4>
									<p>Based on mileage from our yard. All delivery mileage will be verified by Darboy Stone and Brick. Customers will be contacted if mileage discrepancy is found prior to delivery of order.</p>
								</div>
							</div>
							<div id="pewter" style="display:none;">
								<div class="col-md-6 col-xs-12 productImg">
									<h1>Pewter Granite 1-1/4"</h1>
									<img src="./stone/Pewter Granite.jpg" />
									<p>Note that stone is a product of nature and natural color may vary.</p>
								</div>
								<div class="col-md-6 col-xs-12 productDesc">
									<h4>Price: </h4>
									<p>Per Ton</p></br>
									<h4>Minimum Order: </h4>
									<p>1 Ton</p></br>
									<h4>Coverage: </h4>
									<p>125 sq/ft per Ton</p></br>
									<p>*Coverage is an approximate and based on a depth of 1-1/2" - 2".</p></br>
									<p>*Under no circumstances will we be responsible for any miscalculations.</p></br>
									<h4>Maximum delivery load: </h4>
									<p>20 Tons</p></br>
									<h4>Delivery: </h4>
									<p>Based on mileage from our yard. All delivery mileage will be verified by Darboy Stone and Brick. Customers will be contacted if mileage discrepancy is found prior to delivery of order.</p>
								</div>
							</div>
							<div id="slate" style="display:none;">
								<div class="col-md-6 col-xs-12 productImg">
									<h1>Slate Scape</h1>
									<img src="./stone/slate scape.jpg" />
									<p>Note that stone is a product of nature and natural color may vary.</p>
								</div>
								<div class="col-md-6 col-xs-12 productDesc">
									<h4>Price: </h4>
									<p>Per Ton</p></br>
									<h4>Minimum Order: </h4>
									<p>1 Ton</p></br>
									<h4>Coverage: </h4>
									<p>150 sq/ft per Ton</p></br>
									<p>*Coverage is an approximate and based on a depth of 1-1/2" - 2".</p></br>
									<p>*Under no circumstances will we be responsible for any miscalculations.</p></br>
									<h4>Maximum delivery load: </h4>
									<p>20 Tons</p></br>
									<h4>Delivery: </h4>
									<p>Based on mileage from our yard. All delivery mileage will be verified by Darboy Stone and Brick. Customers will be contacted if mileage discrepancy is found prior to delivery of order.</p>
								</div>
							</div>
						</div><!--End Stone Products-->
						
						<!--Selector-->
						<div class="productScroll">
							<div class="productSelector">
								<a onclick="showProduct('barkstone','productDisplayStone'); return false;"><img src="./stone/Barkstone.jpg"/></a>
								<a onclick="showProduct('brownGranite','productDisplayStone'); return false;"><img src="./stone/brown granite.jpg"/></a>
								<a onclick="showProduct('carmel','productDisplayStone'); return false;"><img src="./stone/carmel.jpg"/></a>
								<a onclick="showProduct('clearGranite','productDisplayStone'); return false;"><img src="./stone/clear Granite.jpg"/></a>
								<a onclick="showProduct('flintstone','productDisplayStone'); return false;"><img src="./stone/flintstone.jpg"/></a>
								<a onclick="showProduct('flintstone34','productDisplayStone'); return false;"><img src="./stone/34 flintstone.jpg"/></a>
								<a onclick="showProduct('indianRiver','productDisplayStone'); return false;"><img src="./stone/indianRiver.jpg"/></a>
								<a onclick="showProduct('merrimac','productDisplayStone'); return false;"><img src="./stone/merrimac.jpg"/></a>
								<a onclick="showProduct('merrimac58','productDisplayStone'); return false;"><img src="./stone/58 merrimac.jpg"/></a>
								<a onclick="showProduct('midnightBlue','productDisplayStone'); return false;"><img src="./stone/midnight blue.jpg"/></a>
								<a onclick="showProduct('mississippiRiver','productDisplayStone'); return false;"><img src="./stone/mississippiRiver.jpg"/></a>
								<a onclick="showProduct('mississippi34','productDisplayStone'); return false;"><img src="./stone/34 mississippi.jpg"/></a>
								<a onclick="showProduct('peastone','productDisplayStone'); return false;"><img src="./stone/peastone.jpg"/></a>
								<a onclick="showProduct('pewter','productDisplayStone'); return false;"><img src="./stone/Pewter Granite.jpg"/></a>
								<a onclick="showProduct('slate','productDisplayStone'); return false;"><img src="./stone/slate scape.jpg"/></a>
							</div>
						</div><!--End Selector-->
		        	</div>
    	<!--Begin Paver Products-->
					<div class="tab-pane" id="paver">
						<div class="tab-pane active" id="stone">
						<div id="productDisplayPaver">
							<div id="productPlaceholder">
								<h1>Select a product from below to view details</h1>
							</div>
							<div id="holland" class="prodImg" style="display:none;">
								<div class="col-sm-6 col-md-4 col-xs-12 productImg">
									<h1>Holland Pavers</h1>
									<img src="./pavers/wausau/Holland/PAVER PATIO.png" />
								</div>
								<div class="col-sm-6 col-md-8 col-xs-12 productDesc">
									<h4>Selecting Colors: </h4>
									<p>Colors are shown as accurately as possible. Due to the nature of the product color preference and variables in monitor displays, colors may not match exactly. Final color selection should be made from actual samples.</p></br>
									<h4>Choosing Blends</h4>
									<p>Wausau Tile manufactures pavers in various blend colors that consist of either two or three colors. When choosing a blend, it is important to keep in mind that some of the pavers will be dominant in one of the colors and some will be a combination of the colors that are in that particular blend. </p></br>
									<div class="imgWrap">
										<img src="pavers/wausau/Holland/HOLLAND PAVERS - RED BROWN BLEND.JPG" />
										<p class="imgDescription">Red Brown Blend</p>
									</div>
									<div class="imgWrap">
										<img src="pavers/wausau/Holland/HOLLAND_PAVERS_ BROWN_TAN_BLEND.JPG" />
										<p class="imgDescription">Brown Tan blend</p>
									</div>
									<div class="imgWrap">
										<img src="pavers/wausau/Holland/HOLLAND_PAVERS_ RED_BLACK_BLEND.JPG" />
										<p class="imgDescription">Red Black Blend</p>
									</div>
									<div class="imgWrap">
										<img src="pavers/wausau/Holland/HOLLAND_PAVERS_BROWN_BLACK_BLEND.JPG" />
										<p class="imgDescription">Brown Black Blend</p>
									</div>
									<div class="imgWrap">
										<img src="pavers/wausau/Holland/HOLLAND_PAVER_RED_RANGE.JPG"/>
										<p class="imgDescription">Red Range</p>
									</div>
								</div>
							</div>
							<div id="munich" class="prodImg" style="display:none;">
								<div class="col-sm-6 col-md-4 col-xs-12 productImg">
									<h1>Munich Pavers</h1>
									<img src="pavers/wausau/Munich/MUNICH_CIRCLE_PAVER_CIRCLE.JPG" />
								</div>
								<div class="col-sm-6 col-md-8 col-xs-12 productDesc">
									<h4>Selecting Colors: </h4>
									<p>Colors are shown as accurately as possible. Due to the nature of the product color preference and variables in monitor displays, colors may not match exactly. Final color selection should be made from actual samples.</p></br>
									<h4>Choosing Blends</h4>
									<p>Wausau Tile manufactures pavers in various blend colors that consist of either two or three colors. When choosing a blend, it is important to keep in mind that some of the pavers will be dominant in one of the colors and some will be a combination of the colors that are in that particular blend. </p></br>
									<div class="imgWrap">
										<img src="pavers/wausau/Munich/MUNICH_CIRCLE_PAVERS.JPG" />
										<p class="imgDescription">Paver Circle</p>
									</div>
									<div class="imgWrap">
										<img src="pavers/wausau/Munich/MUNICH_II_PAVERS.JPG" />
										<p class="imgDescription">Munich II</p>
									</div>
								</div>
							</div>
							<div id="terraLok" class="prodImg" style="display:none;">
								<div class="col-sm-6 col-md-4 col-xs-12 productImg">
									<h1>Terra-Lok Pavers</h1>
									<img src="pavers/wausau/Terra-Lok/TERRA- LOK TUMBLED PAVER SIDEWALK BROWN TAN BLEND.JPG" />
								</div>
								<div class="col-sm-6 col-md-8 col-xs-12 productDesc">
									<h4>Selecting Colors: </h4>
									<p>Colors are shown as accurately as possible. Due to the nature of the product color preference and variables in monitor displays, colors may not match exactly. Final color selection should be made from actual samples.</p></br>
									<h4>Choosing Blends</h4>
									<p>Wausau Tile manufactures pavers in various blend colors that consist of either two or three colors. When choosing a blend, it is important to keep in mind that some of the pavers will be dominant in one of the colors and some will be a combination of the colors that are in that particular blend. </p></br>
									<div class="imgWrap">
										<img src="pavers/wausau/Terra-Lok/TUMBLE_LOK_ 6X9_PAVER.JPG" />
										<p class="imgDescription">6x9 Tumble Lok</p>
									</div>
									<div class="imgWrap">
										<img src="pavers/wausau/Terra-Lok/TUMBLE_LOK_6x6_ PAVER.JPG" />
										<p class="imgDescription">6x6 Tumble Lok</p>
									</div>
									<div class="imgWrap">
										<img src="pavers/wausau/Terra-Lok/TUMBLE_LOK_9X12_ PAVER.JPG" />
										<p class="imgDescription">9x12 Tumble Lok</p>
									</div>
								</div>
								
							</div>
							<div id="englishEdge" class="prodImg" style="display:none;">
								<div class="col-sm-6 col-md-4 col-xs-12 productImg">
									<h1>English Edge</h1>
									<img src="pavers/pine hall/english edge/pinehall_english_edge.jpg" />
								</div>
								<div class="col-sm-6 col-md-8 col-xs-12 productDesc">
									<h4>Selecting Colors: </h4>
									<p>English Edge® 2-1/4" is the original clay paver with spacer nibs and bevels on both bed surfaces. Available in 2-1/4" x 4" x 8" (2-1/4" for heavy vehicular applications.)</p></br>
									<div class="imgWrap">
										<img src="pavers/pine hall/english edge/pinehall_english_edge_autumn.jpg" />
										<p class="imgDescription">Autum</p>
									</div>
									<div class="imgWrap">
										<img src="pavers/pine hall/english edge/pinehall_english_edge_buff.jpg" />
										<p class="imgDescription">Buff</p>
									</div>
									<div class="imgWrap">
										<img src="pavers/pine hall/english edge/pinehall_english_edge_dark_accent.jpg" />
										<p class="imgDescription">Dark Accent</p>
									</div>
									<div class="imgWrap">
										<img src="pavers/pine hall/english edge/pinehall_english_edge_full_range.jpg" />
										<p class="imgDescription">Full Range</p>
									</div>
									<div class="imgWrap">
										<img src="pavers/pine hall/english edge/pinehall_english_edge_ironspot.jpg" />
										<p class="imgDescription">Iron Spot</p>
									</div>
									<div class="imgWrap">
										<img src="pavers/pine hall/english edge/pinehall_english_edge_red.jpg" />
										<p class="imgDescription">Red</p>
									</div>
									<div class="imgWrap">
										<img src="pavers/pine hall/english edge/pinehall_english_edge_rose.jpg" />
										<p class="imgDescription">Rose</p>
									</div>
								</div>
								
							</div>
						</div>
						<!--Selector-->
						<div class="productScroll">
							<div class="productSelector">
								<a onclick="showProduct('holland','productDisplayPaver'); return false;"><img src="./pavers/wausau/Holland/PAVER PATIO.png"/></a>
								<a onclick="showProduct('munich','productDisplayPaver'); return false;"><img src="pavers/wausau/Munich/MUNICH_CIRCLE_PAVER_CIRCLE.JPG"/></a>
								<a onclick="showProduct('terraLok','productDisplayPaver'); return false;"><img src="pavers/wausau/Terra-Lok/TERRA- LOK TUMBLED PAVER SIDEWALK BROWN TAN BLEND.JPG"/></a>
								<a onclick="showProduct('englishEdge','productDisplayPaver'); return false;"><img src="pavers/pine hall/english edge/pinehall_english_edge.jpg"/></a>
								<a onclick="showProduct('','productDisplayPaver'); return false;"><img src=""/></a>
								<a onclick="showProduct('','productDisplayPaver'); return false;"><img src=""/></a>
								<a onclick="showProduct('','productDisplayPaver'); return false;"><img src=""/></a>
								<a onclick="showProduct('','productDisplayPaver'); return false;"><img src=""/></a>
								<a onclick="showProduct('','productDisplayPaver'); return false;"><img src=""/></a>
								
							</div>
						</div><!--End Selector-->
		        	</div>
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
