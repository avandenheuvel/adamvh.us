<script>
	(function ($) {
  $(document).ready(function(){

    // hide .navbar first
    $(".navbar").hide();

    // fade in .navbar
    $(function () {
        $(window).scroll(function () {

                 // set distance user needs to scroll before we start fadeIn
            if ($(this).scrollTop() > 300) {
                $('.navbar').fadeIn();
            } else {
                $('.navbar').fadeOut();
            }
        });
    });

});
  }(jQuery));
</script>
<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="UTF-8">	

</head>

<!--Contact Modal-->
	<div id="contactModal" class="modal fade" role="dialog">
	  <div class="modal-dialog">
	
	    <!-- Modal content-->
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h4 class="modal-title">Contact us</h4>
	      </div>
	      <div class="modal-body txtLeft row">	
	      	<form role="form" method="post" action="<?php echo _ROOT . "acknowledge.php"?>">				
				<div class="form-group">
				  <label class="control-label" for="cName">Name:</label>
				  <input class="form-control" type="text" name="cName" placeholder="Enter Name" id="name"></input>
				</div>
				
				<p class="antispam">Leave this empty: <input type="text" name="url" /></p>
				
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
<!--End Contact Modal-->

<!-- Navigation -->
	<div class="container-fluid">
		<div class="row topInfo">
			<div class="col-sm-10 col-xs-12">
				
				
				<script type="text/javascript">
					var first = "customerservice";
					var last = "darboystone.com";
					var tel = "(920)734-2882";
					var address = "W3277 Creekview Lane-Appleton, WI 54915";
					document.write('<a href="<?php echo _ROOT . "about.php"?>" class="col-xs-12 col-md-5"><p>&#10044;'+address+'</p></a>');
					document.write('<a href="#" class="col-xs-12 col-md-3"><p>&#9743;'+tel+ '</p></a>');
					document.write('<a class="col-xs-12 col-md-4" href="mailto:'+first + '@' + last+'"><p>&#9993;'+first + '@' + last+'</p><\/a>');
				</script>
			</div>
			<div class="social col-sm-2 col-xs-12">
				<a target="https://www.facebook.com/darboystone/" title="follow me on facebook" href="https://www.facebook.com/darboystone/"><img class="fbImg" alt="follow me on facebook" src="http://darboystone.com/img/facebook.png" border=0></a>
				<!--a target="_blank" title="follow me on Twitter" href="http://www.twitter.com/PLACEHOLDER"><img alt="follow me on Twitter" src="https://c866088.ssl.cf3.rackcdn.com/assets/twiiter30x30.png" border=0></a-->
				<!--a target="_blank" title="follow me on instagram" href="http://www.instagram.com/PLACEHOLDER"><img alt="follow me on instagram" src="https://c866088.ssl.cf3.rackcdn.com/assets/instagram30x30.png" border=0></a-->
			</div>
		</div>
		<div class="row topBanner">
			
			<div class="col-xs-12 col-md-4">
				<div class="topBannerLeft ">
					<a href="<?php echo _ROOT?>"><img src="<?php echo _ROOT . "img/DSandB_Logo.png"?>"/></a>
				</div>
			</div>
			<div class="col-xs-12 col-md-8">
				<div class="topBannerRight">
					<li><a href="<?php echo _ROOT . "about.php"?>">About</a></li>
                    <li><a onclick="showContactModal(); return false;">Contact</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Products<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo _ROOT . "Granite"?>">Granite</a></li>
                            <li><a href="<?php echo _ROOT . "Brick"?>">Brick & Stone</a></li>
                            <li><a href="<?php echo _ROOT . "Fireplace"?>">Fireplace</a></li>
                            <li><a href="<?php echo _ROOT . "Landscape"?>">Landscape</a></li>
                        </ul>
                    </li>
					
					<!--li class="col-xs-3"><a href="<?php echo _ROOT . "Granite"?>">Granite</a></li>
					<li class="col-xs-3"><a href="<?php echo _ROOT . "Brick"?>">Stone</a></li>
					<li class="col-xs-3"><a href="<?php echo _ROOT . "Fireplace"?>">Fireplace</a></li>
					<li class="col-xs-3"><a href="<?php echo _ROOT . "Landscape"?>">Landscape</a></li-->
				</div>
			</div>
		</div>

<div class="row"></div>
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    	
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="http://darboystone.com" class="pull-left navImg"><img src="<?php echo _ROOT . "img/DSandB_Logo-sm.png"?>"></a>
                <a target="https://www.facebook.com/darboystone/" title="follow me on facebook" href="https://www.facebook.com/darboystone/"><img class="fbImg" alt="follow me on facebook" src="http://darboystone.com/img/facebook.png" border=0></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="http:darboyStone/about.php">About</a>
                    </li>
                                       
                    <li>
                        <a onclick="showContactModal(); return false;">Contact</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Products<b class="caret"></b></a>
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
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
  
 </div><!--End Row--> 	
   