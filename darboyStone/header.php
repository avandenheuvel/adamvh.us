<script>
	(function ($) {
  $(document).ready(function(){

    // hide .navbar first
    $(".navbar").hide();

    // fade in .navbar
    $(function () {
        $(window).scroll(function () {

            // set distance user needs to scroll before we start fadeIn
            if ($(this).scrollTop() > 100) {
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
	
	<!--script src="http://adamvh.us/darboyStone/js/backgroundTransition.js" type="text/javascript"></script-->
	<!--script src="http://adamvh.us/darboyStone/js/fade.js" type="text/javascript"></script-->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<!-- Navigation -->
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
                <a class="navbar-brand" href="http://adamvh.us/darboyStone">Darboy Stone & Brick</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="http://adamvh.us/darboyStone/about.php">About</a>
                    </li>
                                       
                    <li>
                        <a href="http://adamvh.us/darboyStone/contact.php">Contact</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Products<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="">Granite</a>
                            </li>
                            <li>
                                <a href="">Stone</a>
                            </li>
                            <li>
                                <a href="">Fireplace</a>
                            </li>
                            <li>
                                <a href="">Landscape</a>
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
   