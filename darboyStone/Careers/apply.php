<?php
	session_start();
	define('_ROOT', "../");
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		Inquire about a job
	</title>
	<script src="../js/jquery.js" type="text/javascript"></script>
	<script src="../js/php_file_tree_jquery.js" type="text/javascript"></script>
	<script src="../js/bootstrap.js" type="text/javascript"></script>

	<link href="../styles/bootstrap.css"  rel="stylesheet"/>
	<link href="../styles/adamvh.css" rel="stylesheet" />
	
</head>
<body>
	<?php
	  include('../header.php');
	
		if(isset($_GET['job'])){
			$job = $_GET['job'];
		}else{
			$job = "Let us know which position you're interested in";
		}
	?>
	
	 <script type="text/javascript">
	    function ShowHideDiv() {
	        var chkYes = document.getElementById("chkYes");
	        var callTime = document.getElementById("callTime");
	        callTime.style.display = chkYes.checked ? "block" : "none";
	    }
	</script>
	
	<div class="container">
	<div class="row">
	<div class="col-md-8 col-md-offset-2 col-xs-10 col-xs-offset-1">
	
	<div class="panel panel-info">
		<div class="panel-heading"><?=$job?></div>
		<form role="form" method="post" action="acknowledge.php">
			<div class="panel-body">
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
				  <label class="radio-inline"><input id="chkYes" class="radio" type="radio" name="preference" onclick="ShowHideDiv()" value="phone">Phone</label>
				  <label class="radio-inline"><input id="chkNo" class="radio" type="radio" name="preference" onclick="ShowHideDiv()" value="email">E-mail</label>
				</div>
				
				<div id="callTime" class="form-group"> 
				  <label class="control-label" for="call">What is the best time to call?</label>
				  <input class="form-control" type="call" name="call" placeholder="3:00PM" id="call"></input>
				</div>
					
				<p class="antispam">Leave this empty: <input type="text" name="url" /></p>
				<p class="antispam"><input type="text" name="position"/ value=<?=$_GET['job']?>></p>		
				<div class="form-group">
				  <label class="control-label" for="comments">Comments:</label>
				  <textarea class="form-control" name="comments" id="comments"></textarea>
				</div> 
				
				  <input class="btn btn-primary" type="submit" name="send" value="Send Message"></input>
			  </div>
		</form>
	</div>
	</div>
	</div>
	</div>
	<?php
		include"../footer.php";
	?>
	<script>
		window.onload(ShowHideDiv());
	</script>
</body>
</html>  
  