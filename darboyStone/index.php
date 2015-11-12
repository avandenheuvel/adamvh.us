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
<body id="top" data-spy="scroll" data-target=".navbar">
	<div class="frontText">
		<img src="img/DSandB_Logo.png"/>
	</div>
	<div class="frontOverlay"></div>
	
	<nav class="navbar navbar-default navbar-fixed-top homeNav" role="navigation">
    	<a href="#top" class="pull-left"><img src="./img/DSandB_Logo-sm.png"></a>
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            	
                <ul class="nav navbar-nav navbar-right">
                    
                    <li>
                        <a href="#products">Products</a>
                    </li>                   
                    <li>
                        <a href="#contact">Contact</a>
                    </li>
                    <li>
                        <a href="#findUs">Find Us</a>
                    </li>
                    <!--li class="dropdown">
                        <a href="#products" class="dropdown-toggle" data-toggle="dropdown">Products<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="<?php echo _ROOT . "Granite"?>">Granite</a>
                            </li>
                            <li>
                                <a href="<?php echo _ROOT . "Brick"?>">Stone</a>
                            </li>
                            <li>
                                <a href="<?php echo _ROOT . "Fireplace"?>">Fireplace</a>
                            </li>
                            <li>
                                <a href="<?php echo _ROOT . "Landscape"?>">Landscape</a>
                            </li>
                        </ul>
                    </li-->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	
	<!--Background image fader-->
	<div id="cf4a">
		<img src="./img/bg-fade_1.jpg"/>
		<img src="./img/bg-fade_2.jpg"/>
		<img src="./img/bg-fade_.JPG"/>
		<img src="./img/bg-fade_4.JPG"/>
	</div>
	
	<div class="down-button">
		<a href="#banner">
			<img src="./img/downArrow-75px.png" />
		</a>
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
	
	<div class="container-fluid">
				
		<section id="banner" class="row firstrow activity-section">
            <div class="activity-element col-sm-4">
                <img src="../../images/map.png" />
                <h2>VALUE</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="activity-element col-sm-4">
                <img src="../../images/pic.png" />
                <h2>SELECTION</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
            </div>
            <div class="activity-element col-sm-4">
                <img src="../../images/backpack.png" />
                <h2>SERVICE</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
            </div>
        </section>
		
        <section class="row">
            <div class="fill-screen fixed-attachment" style="background-image: url(./img/unilockCover.png)">
            </div>
        </section>

        <!--Thumbnail section-->
		<div id="products" class="row activity-section">
		<div class="activity-element col-xs-12">
                <h2>Our Products</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
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
			    <a href="./Fireplace" class="thumbnail">
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
			      <img src="./img/cover2.png" alt="Granite">
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
			    <a href="./Landscape" class="thumbnail">
			      <img src="./img/cover3.png" alt="Landscape">
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
			    <a href="./Brick" class="thumbnail">
			      <img src="./img/cover.png" alt="Brick">
			    </a>
			 </div>
		 </div>
		</div><!--End Thumbnail-->
		
        <section class="row">
            <div class="fill-screen fixed-attachment" style="background-image: url(./img/CypressMoonlight.png)">
            </div>
        </section>

        <div id="contact" class="row getStarted activity-section">
			  <div class="col-xs-12 col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
			  	<h1>Let's get started</h1>
			  	<p>Contact a Darboy Stone and Brick Representative today</p>
			  	<p>We will connect you with one of or professional design consultants</p>
			  	<h4><a href="mailto:customerservice@darboystone.com">&#9993; e-mail</a><span>|</span><a>&#9743;  (920)734-2882</a></h4>
		  		<button class="btn btn-lg">Contact us</button>
		  	</div>
	 	 </div>
    
		<section class="row">
            <div class="fill-screen fixed-attachment" style="background-image: url(./img/coverHome.png)">
            </div>
        </section>
        
		<!--Begin Maps-->
		<div id="findUs" class="row activity-section">
			<div class="row">
				<div class="col-xs-12">
					<h1>Come on in to our Showroom!</h1>
				</div>
			</div>
			<!-- Map Column -->
			<div class="col-xs-12 col-sm-8">
			    <!-- Embedded Google Map -->
			    <div id="map_wrapper">
				    <div id="map_canvas" class="mapping pointer-events: none;">
				    	<script>
				 		//Map locations
				    	jQuery(function($) {
						    // Asynchronously Load the map API 
						    var script = document.createElement('script');
						    script.src = "http://maps.googleapis.com/maps/api/js?sensor=false&callback=initialize";
						    document.body.appendChild(script);
						});
						
						function initialize() {
						    var map;
						    var bounds = new google.maps.LatLngBounds();
						    var mapOptions = {
						        scrollwheel: false,
						        draggable: false,
						        mapTypeId: 'roadmap'
						    };
						                    
						    // Display a map on the page
						    map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
						    map.setTilt(45);
						        
						    // Multiple Markers
						    var markers = [
						        ['Darboy Stone and Brick', 44.2513986,-88.3545062]
						    ];
						                        
						    // Info Window Content
						    var infoWindowContent = [
						        ['<div class="info_content">' +
						        '<h3>Darboy Stone and Brick</h3>' +
						        '<h4>Showroom Hours:</h4>' + 
						        '<p>Monday- 7:00AM-5:00PM</p>' +
								'<p>Tuesday- 7:00AM-5:00PM</p>' +
								'<p>Wednesday- 7:00AM-5:00PM</p>' +
								'<p>Thursday- 7:00AM-5:00PM</p>' +
								'<p>Friday- 7:00AM-5:00PM</p>' +
								'<p>Saturday- 8:00AM-1:30PM</p>' + '</div>'],
						    ];
						        
						    // Display multiple markers on a map
						    var infoWindow = new google.maps.InfoWindow(), marker, i;
						    
						    // Loop through our array of markers & place each one on the map  
						    for( i = 0; i < markers.length; i++ ) {
						        var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
						        bounds.extend(position);
						        marker = new google.maps.Marker({
						            position: position,
						            map: map,
						            title: markers[i][0]
						        });
						        
						        // Allow each marker to have an info window    
						        google.maps.event.addListener(marker, 'click', (function(marker, i) {
						            return function() {
						                infoWindow.setContent(infoWindowContent[i][0]);
						                infoWindow.open(map, marker);
						            }
						        })(marker, i));
						
						        // Automatically center the map fitting all markers on the screen
						        map.fitBounds(bounds);
						    }
						
						    // Override our map zoom level once our fitBounds function runs (Make sure it only runs once)
						    var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
						        this.setZoom(13);
						        google.maps.event.removeListener(boundsListener);
						    });
						    
						}
						</script>
				    </div>
				</div>
			</div><!--End column-->
			<div class="col-xs-12 col-sm-4 storeInfo">
				<h3>Contact Info:</h3>
				<p>W3277 Creekview Lane</p>
				<p>Appleton, WI 54915</p>
				<p>Phone:</p>
				<p>Fax:</p>
				<p>E-mail:</p>
				<h3>Hours:</h3>
				<p>Monday- 7:00AM-5:00PM</p>
				<p>Tuesday- 7:00AM-5:00PM</p>
				<p>Wednesday- 7:00AM-7:00PM</p>
				<p>Thursday- 7:00AM-5:00PM</p>
				<p>Friday- 7:00AM-5:00PM</p>
				<p>Saturday- 8:00AM-1:30PM</p>
			</div>
		</div><!--End Row-->
		<!--End Maps-->
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
			$(document).ready(function(){
				$(".firstrow").css("marginTop",window.innerHeight);
			});
			$(window).on("load resize", function(){
				$(".firstrow").css("marginTop",window.innerHeight);
				$(".fixed-attachment").css("minHeight",window.innerHeight);
			});
			$('body').scrollspy({
				target:'.navbar'
			});
		
			$(function() {
			  $('a[href*=#]:not([href=#])').click(function() {
			    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			      var target = $(this.hash);
			      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			      if (target.length) {
			        $('html,body').animate({
			          scrollTop: target.offset().top
			        }, 1000);
			        return false;
			      }
			    }
			  });
			});
		});
    </script>
</body>
</html>
