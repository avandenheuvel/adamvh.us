<?php
	define('_ROOT',"../");
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Darting Needles Quilt guild is located in the heart of the Fox Cities. We have regular quilting classes, workshops and monthly guild meetings.">
    <meta name="author" content="">

    <title>Darting Needles Quilt Guild - Appleton, WI</title>
    
    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/modern-business.css" rel="stylesheet">
    <link href="../css/customStyles.css" rel="stylesheet" /><!--http://twbscolor.smarchal.com/-->

    <!-- Custom Fonts -->
    <link href="../font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    <!--My styles-->
    <link href="../_styles.css" / rel="stylesheet">
    
    <script src="../js/jquery-1.11.0.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

	<?php
	include("../header.php");
	?>
	
    

    <!-- Page Content -->
    <div class="container">
    	<!-- Content Row -->
        <div class="row">
        	<div class="col-lg-12">
                <ul class="page-header list-unstyled list-inline list-social-icons">
                	<li>
		                <h1>
		                    2016 Quilt Show
		                </h1>
		                <h2>
		                	Sponsored by The Darting Needles Quilt Guild
		                </h2>
	                </li>                    
			        <li>
			            <a href="https://www.facebook.com/dartingneedlesquiltguild"><i class="fa fa-facebook-square fa-3x"></i></a>
			        </li>
			    </ul>
            </div>
            <!-- Map Column -->
            <div class="col-md-8">
            	<h2>Held at Fox Valley Lutheran High School</h2>
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
						        mapTypeId: 'roadmap'
						    };
						                    
						    // Display a map on the page
						    map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
						    map.setTilt(45);
						        
						    // Multiple Markers
						    var markers = [
						        ['Fox Valley Lutheran', 44.31839, -88.39513 ]
						    ];
						                        
						    // Info Window Content
						    var infoWindowContent = [
						        ['<div class="info_content">' +
						        '<h3>Fox Valley Lutheran</h3>' +
						        '<p>Enter through the parking lot off JJ</p>' + '</div>'],
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
            </div>
            
            <!-- Contact Details Column -->
            <div class="col-md-4">
                <h3>October 29 & 30, 2016</h3>
                <p>Saturday: 10:00-4:00  |  Sunday 10:00-3:00</p>
                <p>Drop Off Between Hours of 5:00 PM and 8:00 PM on October 27th</p>
                <p>5300 N. Meade St.</p>
                <h4>Use parking lot off of JJ</h4>
                <p>Small Gym</p>
                <h3>Download our signup form for complete details</h3>
                <a href="../pdfs/DNQG 2016 Quilt Show Entry Form.docx" class="btn btn-primary">Register now!</a>
                <h5>For More information Contact us at:</h5>
                <p><i class="fa fa-envelope-o"></i> 
                    <abbr title="Email">E</abbr>: <a href="mailto:dartingneedles@gmail.com ">dartingneedles@gmail.com</a>
                </p>
            </div>
        </div>
        <!-- /.row -->
        <hr>
        <!-- Marketing Icons Section -->
        <div class="row">
            
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i> Registration</h4>
                    </div>
                    <div class="panel-body">
                        <p>Download our registration form</p>
                        <a href="../pdfs/DNQG 2016 Quilt Show Entry Form.docx" class="btn btn-default" target="_blank">Sign up Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-gift"></i> 2016 Quilt Show events</h4>
                    </div>
                    <div class="panel-body">
                        <p>The 2016 Quilt show also features 2 special events.</p>
                        <a href="../pdfs/2016 DNQG Show Challenge.docx" class="btn btn-default pad-after">Show Challenge</a>
                        <a href="../pdfs/Honoring our Veterans Special Event.docx" class="btn btn-default pad-after">Honoring Veterans Challenge</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-compass"></i> Quilt Shows</h4>
                    </div>
                    <div class="panel-body">
                        <p>Check out our photo gallery from this years quilt show</p>
                        <a href="../2014-Gallery.php" class="btn btn-default">2014 Gallery</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <hr>
		
		<div class="row" id="slow">
        	<div class="col-md-1"></div>
            <div class="col-md-4">
                <h3>Raffle Quilt</h3>
                <h4>Each year our members create a beautiful quilt to be raffled off at the show.</h4>
                <p>Tickets can be purchased at the door<p>
                <p>$1 each or 6 for $5</p>
            </div>
            <div class="col-md-6">
                <a href="#">
                    <img class="img-responsive img-hover promo" src="../Pictures/2016_DNQG_Show_Raffle_Quilt_2.jpg" alt="">
                </a>
            </div>
            <div class="col-md-1"></div>
        </div>
		
		<hr>
		
		<div class="row">
			<div class="col-md-12">
	            <div class="panel panel-default">
	                <div class="panel-heading">
	                    <h4>2016 Quilt Show Sponsors</h4>
	                </div>
	                <div class="panel-body">
	                    <h5>A special thanks to all our 2016 quilt show sponsors.</h5>
	                    <ul class="list-inline">
		                    <li><a href="" target="_blank">Heart to Hand Stitchery</a></li>
							<li><a href="" target="_blank">Going to Pieces Quilt Co.</a></li>
							<li><a href="" target="_blank">Pat's Place</a></li>
							<li><a href="" target="_blank">Life's A Stitch</a></li>
							<li><a href="" target="_blank">Antoinette's Quilt Shop</a></li>
							<li><a href="" target="_blank">The Quilting Connection</a></li>
							<li><a href="" target="_blank">Creative Juices Designs</a></li>
							<li><a href="" target="_blank">Fabric Creations</a></li>
							<li><a href="" target="_blank">Primitive Gatherings</a></li>
							<li><a href="" target="_blank">Pine Street Quilts</a></li>
							<li><a href="" target="_blank">Julies Sewing Center</a></li>
							<li><a href="" target="_blank">Keep Me In Stitches</a></li>
							<li><a href="" target="_blank">Stoney Creek Retreats</a></li>
							<li><a href="" target="_blank">The Bead Cupid</a></li>
							<li><a href="" target="_blank">Piece By Piece</a></li>
							<li><a href="" target="_blank">Jack Richeson & Co.</a></li>
							<li><a href="" target="_blank">KK Sew & Vac</a></li>
							<li><a href="" target="_blank">Thistledown & Co.</a></li>
							<li><a href="" target="_blank">Silver Thimble</a></li>
							<li><a href="" target="_blank">Country Baskets</a></li>
							<li><a href="" target="_blank">Goin To Pot Orchids</a></li>
							<li><a href="" target="_blank">Wooden Scenes</a></li>
							<li><a href="" target="_blank">Les Schultz Barn Quilts</a></li>
						</ul>
						</p>
	                </div>
	            </div>
	        </div>
		</div>
		<hr>
		
        <!-- Call to Action Section -->
        <div class="well">
            <div class="row">
                <div class="col-md-8">
                	<h2>Want to become a Member?</h2>
                    <p>Dues for 2015 are $35 per calendar year, $45 if receiving the mailed monthly newsletter. The dues and the Membership Registration Form may be sent to the Membership Chairman or mailed to the address on the membership form. For a Darting Needles Membership application</p>
                </div>
                <div class="col-md-4">
                    <a class="btn btn-lg btn-default btn-block" href="../pdfs/DNQG Registration 2015.pdf">Sign up Today</a>
                </div>
            </div>
        </div>

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; <a href="http://adamvh.us">adamVh.us</a></p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
