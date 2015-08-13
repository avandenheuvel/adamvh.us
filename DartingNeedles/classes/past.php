<?php 
	define('_ROOT', "../"); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="The Darting Needles Quild Guild offers regular classes and workshops. Below is a summary of our upcoming classes.">
    <meta name="author" content="">

    <title>DNQG - Quilting Classes</title>
    
    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/modern-business.css" rel="stylesheet">
    <link href="../css/customStyles.css" rel="stylesheet" /><!--http://twbscolor.smarchal.com/-->

    <!-- Custom Fonts -->
    <link href="../font-awesome-4.1.0/css/font-awesome.css" rel="stylesheet" type="text/css">
    
    <!--My styles-->
    <link href="../_styles.css" rel="stylesheet"/>
    
    <script src="../js/jquery-1.11.0.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<body>

    <?php
    include("../header.php");
    ?>
    
    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row" id="top">
            <div class="col-lg-12">
                <h1 class="page-header">Darting Needles
                    <small>Upcoming class schedule</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="../index.php">Home</a>
                    </li>
                    <li class="active">Past Class Schedule</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
        
        <div class="row">
        	<div class="col-md-8">
        		<table class="table table-hover">
        			<thead>
        				<tr>
		        			<th>Date</th>
		        			<th>Instructor</th>
		        			<th>Topic</th>
	        			</tr>
        			</thead>
        			<tbody>
        				
	        			<span class="nav"><tr class="clickableRow nav-landscape" href="#landscape"></span><!--Smooth scroll script added to jquery-1.11.0.js file-->
	        				<td>February 22nd</td>
	        				<td>Susan</td>
	        				<td>Landscape Quilt</td>
	    				</tr>
	    				<span class="nav"><tr class="clickableRow nav-largescale" href="#largescale"></span><!--Smooth scroll script added to jquery-1.11.0.js file-->
	        				<td>March 14th</td>
	        				<td>Bill Kerr</td>
	        				<td>Working with Large-Scale Prints</td>
	    				</tr>
	    				<span class="nav"><tr class="clickableRow nav-transparency" href="#transparency"></span>
	        				<td>March 15th</td>
	        				<td>Weeks Ringle</td>
	        				<td>Transparency Quilts</td>
	    				</tr>
	    				<!--span class="nav"><tr class="clickableRow nav-stitchandflip" href="#stitchandflip"></span>
	        				<td>June 14th</td>
	        				<td>Jacquie Gering</td>
	        				<td>Stitch and Flip Improvisation</td>
	    				</tr>
	    				<span class="nav"><tr class="clickableRow nav-sliceandinsert" href="#sliceandinsert"></span>
	        				<td>June 15th</td>
	        				<td>Jacquie Gering</td>
	        				<td>Slice and Insert Improvisation</td>
	    				</tr>
	    				<span class="nav"><tr class="clickableRow nav-bustrip" href="#bustrip"></span>
	        				<td>August 15th</td>
	        				<td>-</td>
	        				<td>Guild Bus Trip</td>
	    				</tr>
	    				<span class="nav"><tr class="clickableRow nav-flowers" href="#flowers"></span>
	        				<td>September 20th</td>
	        				<td>Juanita Yeager</td>
	        				<td>Flowers on a Grand Scale</td>
	    				</tr>
	    				<span class="nav"><tr class="clickableRow nav-piecing" href="#piecing"></span>
	        				<td>October 18th</td>
	        				<td>Lee Heinrich</td>
	        				<td>Advanced Piecing</td>
	    				</tr>
	    				<!--Template
	    				<span class="nav"><tr class="clickableRow nav-"" href="#"></span>
	        				<td>Date</td>
	        				<td>Instr</td>
	        				<td>Topic</td>
	    				</tr>
	    				-->
    				</tbody>
        		</table>
        	</div>
        	<div class="col-md-4">
        		<div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <h3 class="panel-title">Classes Pricing</h3>
                    </div>
                    <div class="panel-body">
                        <span class="price"><sup>$</sup>25<sup>00</sup></span>
                        <span class="period">Members</span>
                    </div>
                    <div class="panel-body">
                        <span class="price"><sup>$</sup>35<sup>00</sup></span>
                        <span class="period">Non-Members</span>
                    </div>
                    <li class="list-group-item">
                    	<h5>Discounts and many more benefits available for members</h5>
                    	<a href="../pdfs/DNQG Registration 2015.pdf" class="btn btn-primary">Sign Up!</a>
                </div>
                <p>For more information contact: <i class="fa fa-envelope-o"></i> 
                    <a href="mailto:kimfoxquilts@gmail.com">Kimberly Fox</a>
                </p>
        	</div>
        </div>
		
		<!-- Project Template 
        <div class="row" id="idfor Autoscroll function">
        	<div class="col-md-1"></div>
            <div class="col-md-4">
                <h3>Title</h3>
                <h4>Date</h4>
                <p>Guest speaker</p>
                <p>Event details</p>
                <a class="btn btn-primary" href="program_2015-02-20_lecture_Sue Hoffman.php">View Project</i></a>
            </div>
            <div class="col-md-6">
                <a href="#">
                    <img class="img-responsive img-hover" src="Pictures/#" alt="">
                </a>
            </div>
            <div class="col-md-1"></div>
        </div>
        <!-- /.row -->
        
        <!-- Project -->
        <div class="row" id="landscape">
        	<div class="col-md-1"></div>
            <div class="col-md-4">
                <h3>Landscape Quilts</h3>
                <h4>Sunday, February 22nd</h4>
                <p>Susan Hoffmann</p>
            </div>
            <div class="col-md-6">
                <!--a href="program_2015-02-20_lecture_Sue Hoffman.php"-->
                    <img class="img-responsive img-hover" src="Pictures/feb22.jpg" alt="">
                </a>
            </div>
            <div class="col-md-1"></div>
        </div>
        <!-- /.row -->
		
		<!--Project-->
			<div class="row" id="largescale">
			<div class="col-md-1"></div>	
            <div class="col-md-6">
                <a href="#">
                    <img class="img-responsive img-hover" src="Pictures/mar14.png" alt="">
                </a>
            </div>
            
            <div class="col-md-4">
                <h3>Working with Large-Scale Prints</h3>
                <h4>Saturday, March 14th</h4>
                <p>Bill Kerr</p>
                <p>Many quilters love large-scale prints but find it challenging to combine them effectively with other prints. Students will learn the design concepts behind using large-scale prints and how to show them off to their best advantage. 
                	</p>
            </div>
            <div class="col-md-1"></div>
        </div>
		<!--/.row-->
		<hr>
		
        <!-- Project -->
        <div class="row" id="transparency">
        	<div class="col-md-1"></div>
            <div class="col-md-4">
                <h3>Transparency Quilts</h3>
                <h4>Sunday, March 15th</h4>
                <p>Weeks Ringle</p>
                <p>The workshop will guide you through explorations to help you develop color confidence in achieving transparency in your quilts. In the first half of the class, we will explain how to use color to create effective transparencies followed by explorations that bring those concepts to life.
					</p>
            </div>
            <div class="col-md-6">
                <!--a href="program_2015-02-20_lecture_Sue Hoffman.php"-->
                    <img class="img-responsive img-hover" src="Pictures/Mar15.png" alt="">
                </a>
            </div>
            <div class="col-md-1"></div>
        </div>
        <!-- /.row -->

        <hr>
		
		
        
        <!--Button to return to top of page-->
        <div class="scroll-top page-scroll nav">
	        <a class="btn btn-primary" href="#top">
	            <i class="fa fa-chevron-up"></i>
	        </a>
	    </div>
        
        <!-- Pagination -->
        <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                    <li>
                        <a href="#">&laquo;</a>
                    </li>
                    <li class=>
                        <a href="./">Upcoming programs</a>
                    </li>
                    <li class="active">
                        <a href="#">Past Programs</a>
                    </li>
                    
                    <li>
                        <a href="#">&raquo;</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; <a href="http://adamvh.us">adamVh</a></p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.0 -->
    <script src="../js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

</body>

</html>
