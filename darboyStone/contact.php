<?php
	$source=$_POST['source'];
	define('_ROOT', './');
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
<body>
	<?php
		include"header.php";
	?>
	<div class="container">
	<div class="row">
	<div class="col-md-8 col-md-offset-2 col-xs-10 col-xs-offset-1">
	
	<div class="panel panel-info contactUs">
		<div class="panel-heading">
			<h4>Send us a request:</h4>
		</div>
		<div class="panel-body">
				<form role="form" method="post" action="acknowledge.php">
					
					
					<div class="form-group">
					  <label class="control-label" for="cName">Name:</label>
					  <input class="form-control" type="text" name="cName" placeholder="Enter Name" id="name"></input>
					</div>
					<div class="form-group">
					  <label class="control-label" for="email">Email:</label>
					  <input class="form-control" type="email" name="email" placeholder="E-mail address" id="email"></input>
					</div>
					<div class="form-group"> 
					  <label class="control-label" for="phone">Phone:</label>
					  <input class="form-control" type="phone" name="phone" placeholder="Phone Number" id="phone"></input>
					</div>
					<div class="form-group"> 
					  <label class="control-label" for="preference">Preferred method:</label></br>
					  <label class="radio-inline"><input class="radio" type="radio" name="preference" value="phone">Phone</label>
					  <label class="radio-inline"><input class="radio" type="radio" name="preference" value="email">E-mail</label>
					</div>
					
					<p class="antispam">Leave this empty: <input type="text" name="url" /></p>
					
					 <div class="form-group">
					  <label for="sel1">Interest:<span class="hidden-xs">(Hold ctrl to select multiple)</span></label>
					  <select class="form-control" id="sel1" multiple="multiple" name="interests[]" size="3">
				    	  <option value="Brick">Brick</option>
						  <option value="Fireplace">Fireplace</option>
						  <option value="Landscape">Landscape</option>
						  <option value="Granite">Granite</option>
					  </select>
					</div>
					
					<div class="form-group">
					  <label class="control-label" for="comments">Comments:</label>
					  <textarea class="form-control" name="comments" id="comments"></textarea>
					</div> 
					  <input type="hidden" name="source" id="source" value="<?php echo $source;?>"/></input>
					
					  <input class="btn btn-primary" type="submit" name="send" value="Send Message"></input>
				
				</form>
			</div>
		</div>
	</div>
	</div>
	</div>
</body>
</html>
	