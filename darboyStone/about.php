<?php
	define("_ROOT",'./');
?>

<!DOCTYPE html>

<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		New Darboy Stone & Brick
	</title>	
</head>
<body>
		
	<?php
		include("header.php");
	?>
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
			        mapTypeId: 'roadmap'
			    };
			                    
			    // Display a map on the page
			    map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
			    map.setTilt(45);
			        
			    // Multiple Markers
			    var markers = [
			        ['First United Methodist', 44.264286, -88.402065]
			    ];
			                        
			    // Info Window Content
			    var infoWindowContent = [
			        ['<div class="info_content">' +
			        '<h3>First United Methodist Church</h3>' +
			        '<p>Meetings are held on the third Monday of each month</p>' + '</div>'],
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
</div>
<script src="http://adamvh.us/darboyStone/js/jquery.js" type="text/javascript"></script>
<script src="http://adamvh.us/darboyStone/js/bootstrap.js" type="text/javascript"></script>
</body>