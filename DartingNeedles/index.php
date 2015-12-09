<?php
	define('_ROOT',"./");
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
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="css/customStyles.css" rel="stylesheet" /><!--http://twbscolor.smarchal.com/-->

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    <!--My styles-->
    <link href="_styles.css" / rel="stylesheet">
    
    <script src="js/jquery-1.11.0.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

	<?php
	include("./header.php");
	?>
	
    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide One');">
                	<img src="Pictures/2014 raffle quilt -3 Orig.jpg"  style="min-width:500px;"/>
            	</div>
                <div class="carousel-caption">
                    <h2></h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Two');">
                	<img src="Pictures/A_Winner_DSC02402.JPG" style="min-width:500px;"/>
                </div>
                <div class="carousel-caption">
                    <h2></h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Two');">
                	<img src="Pictures/A_Winner_DSC02404.JPG" style="min-width:500px;"/>
                </div>
                <div class="carousel-caption">
                    <h2></h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Two');">
                	<img src="Pictures/A_Winner_DSC02405.JPG" style="min-width:500px;"/>
                </div>
                <div class="carousel-caption">
                    <h2></h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Two');">
                	<img src="Pictures/A_Winner_DSC02408.JPG" style="min-width:500px;"/>
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
    


    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <ul class="page-header list-unstyled list-inline list-social-icons">
                	<li>
		                <h1>
		                    Welcome to the Darting Needles Quilt Guild
		                </h1>
	                </li>                    
			        <li>
			            <a href="https://www.facebook.com/dartingneedlesquiltguild"><i class="fa fa-facebook-square fa-3x"></i></a>
			        </li>
			        <li>
			            <a href="#"><i class="fa fa-twitter-square fa-3x"></i></a>
			        </li>
			    </ul>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i> Membership</h4>
                    </div>
                    <div class="panel-body">
                        <p>Want to become a member? Here's our signup form</p>
                        <a href="pdfs/DNQG Registration 2015.pdf" class="btn btn-default">Sign up Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-gift"></i> 2016 Program List</h4>
                    </div>
                    <div class="panel-body">
                        <p>Darting needles members meet on the <strong>third Monday of each month.</strong> Meetings often include guest speakers or fun group activities. Classes are also scheduled throughout the year. Feel free to browse our upcoming class and meeting schedules.</p>
                        <a href="./meetings" class="btn btn-default">Meetings</a>
                        <a href="./classes" class="btn btn-default">Classes</a>
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
                        <a href="2014-Gallery.php" class="btn btn-default">2014 Gallery</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <!-- Features Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Our Goals:</h2>
            </div>
            <div class="col-md-6">
            	<p>We are the Darting Needles Quilt Guild. Based in Appleton Wisconsin, we have members from all around the Fox Valley area.
            		From Oshkosh to Green Bay, Wausau to Manitowoc and all areas in between.</p>
                <p>The goals of the Darting Needles Quilt Guild are to:</p>
                <ul>
                    <li><strong>Promote quilting</strong></li>
                    <li>Inspire quilting through classes and speakers</li>
                    <li>Share our talent with the community</li>
                </ul>
                <p>The guild has grown from 22 members at our founding in1982 to over 140 today.  Our members range from beginner quilters to master quilters, so no matter your skills or experience Darting Needles Quilt Guild may be the place for you to share in our common interest of quilting.  Membership is open to all interested.  </p>
            </div>
            <div class="col-md-6">
                <img class="img-responsive img-circle" src="Pictures/featuresPic.JPG" alt="">
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Section -->
        <div class="well">
            <div class="row">
                <div class="col-md-8">
                    <p>Dues for 2015 are $35 per calendar year, $45 if receiving the mailed monthly newsletter. The dues and the Membership Registration Form may be sent to the Membership Chairman or mailed to the address on the membership form. For a Darting Needles Membership application</p>
                </div>
                <div class="col-md-4">
                    <a class="btn btn-lg btn-default btn-block" href="pdfs/DNQG Registration 2015.pdf">Sign up Today</a>
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

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
