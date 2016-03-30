<?php
	session_start();
	define('_ROOT', "./");
	$source = "about";
?>

<!DOCTYPE html>

<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	<meta name="description" content="Come visit Our showroom. We're Northeast Wisconsin's leading supplier of: Granite, Fireplaces, Landscaping products Stone and Brick materials" />
	<meta name="keywords" content="Granite, Landscape, Fireplace, Showroom, Brick, Stone"/> 
	<title>
		Darboy Stone & Brick - About us
	</title>


	<link href="./styles/bootstrap.css"  rel="stylesheet"/>
	<link href="./styles/adamvh.css" rel="stylesheet" />
	<link href='https://fonts.googleapis.com/css?family=Oswald:700|Merriweather' rel='stylesheet' type='text/css'>
	
	<script src="./js/jquery.js" type="text/javascript"></script>
	<script src="./js/bootstrap.js" type="text/javascript"></script>
	<script src="./includes/scripts.js" type="text/javascript"></script>
	
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
		include("header.php");
	?>
	<div class="container">
	<!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">About
                    <small>Darboy Stone and Brick</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="./index.php">Home</a>
                    </li>
                    <li class="active">About</li>
                </ol>
            </div>
        </div>
	<!-- Content Row -->
	
		<div class="row">
			<!-- Map Column -->
			<div class="col-md-8">
			    <!-- Embedded Google Map -->
			    <div id="map_wrapper">
				    <div id="map_canvas" class="mapping">
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
						        '<p>Monday- Closed</p>' +
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
				</div>
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
						<script type="text/javascript">
							var first = "customerservice";
							var last = "darboystone.com";
							var tel = "(920)734-2882";
							document.write('<a href="#"><p>&#9743;'+tel+ '</p></a>');
							document.write('<a href="mailto:'+first + '@' + last+'"><p>&#9993;'+first + '@' + last+'</p><\/a>');
						</script>
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
				        <p>Monday- Closed</p>
						<p>Tuesday- 8:00AM-5:00PM</p>
						<p>Wednesday- 8:00AM-5:00PM</p>
						<p>Thursday- 8:00AM-5:00PM</p>
						<p>Friday- 8:00AM-5:00PM</p>
						<p>Saturday- 9:00AM-1:30PM</p>
					</div>
				</div>
			</div>
		</div><!--End Row-->
		
	</div><!--End container-->
	<div class="row">
		 	 <!-- Header Carousel -->
		    <header id="myCarousel" class="carousel slide">
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
		                	<img src="img/IMG_2084.JPG"/>
		            	</div>
		                <div class="carousel-caption">
		                    <h2>Granite Showroom</h2>
		                </div>
		            </div>
		            <div class="item">
		                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Two');">
		                	<img src="img/IMG_2088.JPG"/>
		                </div>
		                <div class="carousel-caption">
		                    <h2>Burning fireplace's</h2>
		                </div>
		            </div>
		            <div class="item">
		                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Two');">
		                	<img src="img/IMG_2109.JPG"/>
		                </div>
		                <div class="carousel-caption">
		                    <h2>Large inventory</h2>
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
	        </div>
	<?php
		include("./footer.php");
	?>
</body>
	<!-- Script to Activate the Carousel -->
	<script>
	$('.carousel').carousel({
	    interval: 5000 //changes the speed
	})
	</script>
</html>