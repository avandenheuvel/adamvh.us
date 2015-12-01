<?php
	session_start();
	define('_ROOT',"./");
	$source = "home";
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
	<link href="styles/animate.css" rel="stylesheet" />
	
	<script src="js/jquery.js" type="text/javascript"></script>
	<script src="js/bootstrap.js" type="text/javascript"></script>
	<script src="js/wow.min.js"></script>
	  <script>
	  	new WOW().init();
	  </script>
	
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
			<div class="wow slideInLeft col-xs-12" data-wow-delay="1s" data-wow-duration="1s">
				<h1>Welcome To Darboy Stone & Brick - Your Idea Store!</h1>
			</div>
            <!--div class="activity-element col-sm-4">
                <h2>VALUE</h2>
                <p>Supplying high quality: Brick, Stone, Granite, Fireplace and Landscape products at a great price</p>
            </div>
            <div class="activity-element col-sm-4">
                <h2>SELECTION</h2>
                <p>Stop into our showroom to see the vast array of products and options we carry.</p>
            </div>
            <div class="activity-element col-sm-4">
                <h2>SERVICE</h2>
                <p>Our friendly, knowledgable sales staff and experienced installers make it easy to turn your ideas into reality.</p>
            </div-->
            <div class="down-button2">
				<a href="#products">
					<img src="./img/downArrow-75px.png" />
				</a>
			</div>
            
        </section>
        
		
        <section class="row">
            <div class="fill-screen fixed-attachment" style="background-image: url(./img/unilockCover.png)">
            </div>
        </section>

        <!--Thumbnail section-->
		<div id="products" class="row activity-section">
			<div class="wow slideInDown activity-element col-xs-12">
                <h2>Our Products</h2>
                <h4>We proudly supply North East Wisconsin with a large variety of high quality products. Please visit our product pages to learn more about our offerings or see some fine examples to inspire your next project.</h4>
            </div>
            <div class="wow slideInLeft col-xs-12 col-sm-6 col-md-3"  data-wow-duration="2s" data-wow-delay="1s">
		  		<div class="panel panel-default linkCircle">
			  		<img class="img-circle"src="./img/fireplace.jpg" />
					<h3>Fireplace</h3>
					<p>View our current gas, wood burning and contemporary fireplaces along with a collection of projects we've installed.</p>
					<a class="btn btn-default" href="./Fireplace">Fireplace</a>
				 </div>
			 </div>
			 <div class="wow slideInLeft col-xs-12 col-sm-6 col-md-3" data-wow-duration="1.5s" data-wow-delay="0.5s">
		  		<div class="panel panel-default linkCircle">
			  		<img class="img-circle"src="./img/landscape.JPG" />
					<h3>Landscape</h3>
					<p>Sample pictures of a wide variety of brick and stone landscape materials along with photos from some of our recent projects.</p>
					<a class="btn btn-default" href="./Landscape">Landscape</a>
				 </div>
			 </div>
            <div class="wow slideInRight col-xs-12 col-sm-6 col-md-3"  data-wow-duration="1.5s" data-wow-delay="0.5s">
		  		<div class="panel panel-default linkCircle">
			  		<img class="img-circle"src="./img/brick.JPG" />
					<h3>Brick & Stone</h3>
					<p>View sample images of a wide variety of brick and stone options along with project galleries to help spark your creativity.</p>
					<a class="btn btn-default" href="./Brick">Brick</a>
				 </div>
			 </div>
            <div class="wow slideInRight col-xs-12 col-sm-6 col-md-3"  data-wow-duration="2s" data-wow-delay="1s">
		  		<div class="panel panel-default linkCircle">
			  		<img class="img-circle"src="./img/granite.jpg" />
					<h3>Granite</h3>
					<p>Visit our granite page to view our large variety of granite available along with customer project galleries to inspire.</p>
					<a class="btn btn-default" href="./Granite">Granite</a>
				 </div>
			 </div>
		 	<div class="down-button2">
				<a href="#contact">
					<img src="./img/downArrow-75px.png" />
				</a>
			</div>
		</div><!--End Thumbnail-->
		
        <section class="row">
            <div class="fill-screen fixed-attachment" style="background-image: url(./img/CypressMoonlight.png)">
            </div>
        </section>

        <div id="contact" class="wow slideInUp row getStarted activity-section">
			  <div class="col-xs-12 col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
			  	<h1>Let's get started</h1>
			  	<p>Contact a Darboy Stone and Brick Representative today</p>
			  	<p>We will connect you with one of or professional design consultants</p>
			  	<h4><a href="mailto:customerservice@darboystone.com">&#9993; e-mail</a><span>|</span><a>&#9743;  (920)734-2882</a></h4>
		  		<a href="./contact.php"><button class="btn btn-lg">Contact us</button></a>
		  	</div>
		  	<div class="down-button2">
				<a href="#findUs">
					<img src="./img/downArrow-75px.png" />
				</a>
			</div>
	 	 </div>
    
		<section class="row">
            <div class="fill-screen fixed-attachment" style="background-image: url(./img/coverHome.png)">
            </div>
        </section>
        
		<!--Begin Maps-->
		<div id="findUs" class="row activity-section">
			<div class="row">
				<div class="col-xs-12 wow pulse" data-wow-delay="1s">
					<h1>Come on in to our Showroom!</h1>
				</div>
			</div>
		</div>
			
			<div class="row">
			<!-- Map Column -->
			<div class="col-md-8">
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
						        ['Darboy Stone and Brick', 44.2513986,-88.3545062],
						        ['Antigo Fireplace', 45.169307, -89.147068]
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
								
								['<div class="info_content">' +
						        '<h3>Antigo Fireplace</h3>' +
						        '<h4>Showroom Hours:</h4>' + 
						        '<p>Monday- 8:00AM-5:00PM</p>' +
								'<p>Tuesday- 8:00AM-5:00PM</p>' +
								'<p>Wednesday- 8:00AM-5:00PM</p>' +
								'<p>Thursday- 8:00AM-5:00PM</p>' +
								'<p>Friday- 8:00AM-5:00PM</p>' +
								'<p>Saturday- 9:00AM-1:30PM</p>' + '</div>']
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
						        this.setZoom(8);
						        google.maps.event.removeListener(boundsListener);
						    });
						    
						}
						</script>
				    </div>
				</div><!--End Maps-->
			</div><!--End column-->
			<div class="col-md-4">
				<ul class="nav nav-tabs" data-tabs="tabs">
				  <li class="active">
				    <a href="#darboy" data-toggle="tab">Darboy Stone</a>
				  </li>
				  <li><a href="#antigo" data-toggle="tab">Antigo Fireplace</a></li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="darboy">
						<h3>Contact:</h3>
						<p>W3277 Creekview Lane</p>
						<p>Appleton, WI 54915</p>
						<p>Phone:(920)734-2882</p>
						<p>E-mail:customerservice@darboystone.com</p>
						<h3>Hours:</h3>
						<p>Monday- 7:00AM-5:00PM</p>
						<p>Tuesday- 7:00AM-5:00PM</p>
						<p>Wednesday- 7:00AM-7:00PM</p>
						<p>Thursday- 7:00AM-5:00PM</p>
						<p>Friday- 7:00AM-5:00PM</p>
						<p>Saturday- 8:00AM-1:30PM</p>
					</div>
					<div class="tab-pane" id="antigo">
						<h3>Contact:</h3>
						<p>2655 Highway 45 North-Suite A</p>
						<p>Antigo, WI 54409</p>
						<p>Phone:(715)627-7882</p>
						<h3>Showroom Hours:</h3> 
				        <p>Monday- 8:00AM-5:00PM</p>
						<p>Tuesday- 8:00AM-5:00PM</p>
						<p>Wednesday- 8:00AM-5:00PM</p>
						<p>Thursday- 8:00AM-5:00PM</p>
						<p>Friday- 8:00AM-5:00PM</p>
						<p>Saturday- 9:00AM-1:30PM</p>
					</div>
				</div>
			</div>
		</div><!--End Row-->
	</div><!--End Container-->
    <script>
    	/*Activate the carousel*/
	    $('.carousel').carousel({
	        interval: 5000 //changes the speed
	    });
	    
	    /*Hide background when scrolled down. better on mobil*/
		$(document).scroll(function() {
		  var y = $(this).scrollTop();
		  if (y > $(window).height()) {
		    $('#cf4a').fadeOut();
		  } else {
		    $('#cf4a').fadeIn();
		  }
		});
		
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
			//Set up scoll to all a links that begin with #
			$(document).ready(function(){
				$('a[href^="#"]').on('click',function (e) {
				    e.preventDefault();
			
				    var target = this.hash;
				    var $target = $(target);
			
				    $('html, body').stop().animate({
				        'scrollTop': $target.offset().top
				    }, 900, 'swing', function () {
				        window.location.hash = target;
				    });
				});
			});
		});
		
    </script>
<?php 
	include("./footer.php");
?>
</body>
</html>
