<?php
	define('_ROOT', "./");
?>
	

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="We are the Darting Needles Quilt Guild. Based in Appleton Wisconsin.
    		We aim to Promote the art of quilting.">
    <meta name="author" content="adamVh">

    <title>About - Darting Needles Quild Guild</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="css/customStyles.css" rel="stylesheet" /><!--http://twbscolor.smarchal.com/-->

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.css" rel="stylesheet" type="text/css">
    
    <!--My styles-->
    <link href="_styles.css" rel="stylesheet"/>
    
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
   include("header.php");
   ?>
   
    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">About
                    <small>Darting Needles Quilt Guild</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">About</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
        
		<!-- Image Header -->
        <div class="row">
            <div class="col-lg-12">
                <img class="img-responsive" src="Pictures/DSC02587_v2.JPG" alt="">
            </div>
        </div>
        
       <hr>
        
        <!-- Intro Content -->
        <div class="row">
            <div class="col-md-6 hidden-sm hidden-xs">
                <img class="img-responsive img-circle" src="Pictures/about.jpg" alt="">
            </div>
            <div class="col-md-6">
            	<p>We are the Darting Needles Quilt Guild. Based in Appleton Wisconsin, we have members from all around the Fox Valley area.
            		From Oshkosh to Green Bay, Wausau to Manitowoc and all areas in between.</p>
                <p>The goals of the Guild are to:</p>
                <ul>
                    <li><strong>Promote quilting</strong></li>
                    <li>Inspire quilting through classes and speakers</li>
                    <li>Share our talent with the community</li>
                </ul>
                <p>The guild has grown from 22 members at our founding in1982 to over 140 today.  Our members range from beginner quilters to master quilters, so no matter your skills or experience Darting Needles Quilt Guild may be the place for you to share in our common interest of quilting.  Membership is open to all interested.  </p>
            </div>
        </div>
        <!-- /.row -->

        <hr>
        
        <!-- Service Panels -->
        <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Benefits and Offerings</h2>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-5x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-compass fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <h4>Quilt Show</h4>
                        <p>Darting Needles hosts a quilt show bi-annually. </p>
                        <a href="./2016-quilt-show" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-5x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-group fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <h4>Group settings</h4>
                        <p>The guild hosts a retreat weekend in January which provides a fun weekend away from home for members to work on individual projects or to work on projects the retreat committee designs.</p>
                        <!--a href="#" class="btn btn-primary">Learn More</a-->
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-5x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-gift fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <h4>Charity</h4>
                        <p>As part of our charter, Darting Needles provides quilts to local charities. There are usually two meetings per year for working on or presenting quilts made for charitable giving. Darting Needles members have provided several hundred quilts to local charities since it's inception.</p>
                        <!--a href="#" class="btn btn-primary">Learn More</a-->
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-5x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-database fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <h4>Library</h4>
                        <p>Access to our book and video library</p>
                        <a href="https://docs.google.com/spreadsheet/ccc?key=0Al1OzrI7nPS1dExoNndPSnRiVmFLdkotUmpCS1pxbGc&usp=sharing#gid=1" class="btn btn-primary">View list</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Website by: <a href="http://adamvh.us">adamVh</a> 2015</p>
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
