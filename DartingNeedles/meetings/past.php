<?php 
	define('_ROOT', "../"); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="The Darting Needles Quilt Guild hosts meetings on the thrid Monday of each month. Meetings often include workshops or special guest lectures. Below is a summary of our meeting events.">
    <meta name="author" content="">

    <title>DNQG - Meetings</title>
    
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
                    <small>Upcoming quild guild meeting schedule</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="../index.php">Home</a>
                    </li>
                    <li class="active">Upcoming Meeting Schedule</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
        
        <div class="row">
        	<div class="col-md-8">
        		<p>Meetings are held at 7:00PM on the third Monday of each month at <a href="../contact.php">First United Methodist Church</a></p>
        		<table class="table table-hover">
        			<thead>
        				<tr>
		        			<th>Date</th>
		        			<th>Instructor</th>
		        			<th>Topic</th>
	        			</tr>
        			</thead>
        			<tbody>
        				
	        			<span class="nav"><tr class="clickableRow nav-quiltBingo" href="#quiltBingo"></span><!--Smooth scroll script added to jquery-1.11.0.js file-->
	        				<td>January 19th</td>
	        				<td>-</td>
	        				<td>Quilt Bingo</td>
	    				</tr>
	    				<span class="nav"><tr class="clickableRow nav-pictoralaplique" href="#pictoralaplique"></span><!--Smooth scroll script added to jquery-1.11.0.js file-->
	        				<td>February 16th</td>
	        				<td>Susan Hoffman</td>
	        				<td>Pictorial Applique</td>
	    				</tr>
	    				<span class="nav"><tr class="clickableRow nav-weeksRingle" href="#weeksRingle"></span>
	        				<td>March 16th</td>
	        				<td>Weeks Ringle</td>
	        				<td>Creativity & Quilts: The Power of Cross Pollination</td>
	    				</tr>
	    				<span class="nav"><tr class="clickableRow nav-howShould" href="#howShould"></span>
	        				<td>April 20th</td>
	        				<td>-</td>
	        				<td>How do I Quilt This? with the long arm quilters of the guild</td>
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
                        <h3 class="panel-title">Meeting pricing</h3>
                    </div>
                    <div class="panel-body">
                        <span class="price"><sup>$</sup>0<sup>00</sup></span>
                        <span class="period">Included for Members</span>
                    </div>
                    <div class="panel-body">
                        <span class="price"><sup>$</sup>5<sup>00</sup></span>
                        <span class="period">Non-Members</span>
                    </div>
                    <li class="list-group-item">
                    	<h5>Discounts and many more benefits available for members</h5>
                    	<a href="../pdfs/DNQG Registration 2015.pdf" class="btn btn-primary">Sign Up!</a>
                </div>
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
		
		<!--Project-->
			<div class="row" id="quiltBingo">
			<div class="col-md-1"></div>	
            <div class="col-md-6">
                <a href="#">
                    <img class="img-responsive img-hover" src="Pictures/bingo.jpg" alt="">
                </a>
            </div>
            
            <div class="col-md-4">
                <h3>Quilt Bingo</h3>
                <h4>Monday, January 19th</h4>
                <p>7:00PM</p>
                <p>Come on out and join us for a night of fun with friends.!</p>
            </div>
            <div class="col-md-1"></div>
        </div>
		<!--/.row-->
		<hr>
		
        <!-- Project -->
        <div class="row" id="pictoralaplique">
        	<div class="col-md-1"></div>
            <div class="col-md-4">
                <h3>Lecture</h3>
                <h4>Saturday, February 20, 2015</h4>
                <p>Sue Hoffman</p>
                <p>Pictorial Applique- Landscape Painting with fabric</p>
                <p>Sue starts with a photo she’s taken and uses surface design techniques like– hand-dyeing, over-dyeing, hand painting, and/or batik to create the background.  She then hand cuts each element of the composition out of fabric, layers them and uses permanent adhesive.  Most pieces use 10-12 fabrics, 4-6 layers, hundreds of hand cut pieces and many and many hours to complete.  Each piece is then framed.</p>
                <p>Sue will walk us through her design process and technique.  There will be time to look at her work and ask questions.</p>
            </div>
            <div class="col-md-6">
                <!--a href="program_2015-02-20_lecture_Sue Hoffman.php"-->
                    <img class="img-responsive img-hover" src="Pictures/Feb2.png" alt="">
                </a>
            </div>
            <div class="col-md-1"></div>
        </div>
        <!-- /.row -->

        <hr>
		
		<!-- Project--> 
        <div class="row" id="weeksRingle">
        	<div class="col-md-1"></div>
        	<div class="col-md-6">
                <a href="#">
                    <img class="img-responsive img-hover" src="Pictures/mar16.png" alt="">
                </a>
            </div>
            <div class="col-md-4">
                <h3>Creativity & Quilts: The Power of Cross Pollination</h3>
                <h4>Monday, March 16th</h4>
                <p>Weeks Wringle</p>
                <p>Learn how to be more creative by looking at the honeybee. In this lecture you'll get inspiration for your quilts from a variety of unexpected sources. Lessons learned from outside the quilting world can help you with color, design and composition. </p>
            </div>
            <div class="col-md-1"></div>
        </div>
        <!-- /.row -->
        
        <hr>
        
        <div class="row" id="howShould">
        	<div class="col-md-1"></div>
            <div class="col-md-4">
                <h3>How Should I quilt this</h3>
                <h4>Monday, April 20th</h4>
                <p>Topic scheduled for normal Monay guild meeting. It will begin at 7:00PM.</p>
                <p>You’ve got your quilt top done and it’s wonderful – but how to quilt it?  What’s holding you back?
						This will be an interactive meeting – please bring your quilt tops to share and get ideas for quilting!  Several of the Guild’s long arm quilters will lead the discussion and will answer questions like, when you bring your quilt to be quilted why do I need 6” of fabric on each edge?</p>
            </div>
            <div class="col-md-6">
                <a href="#">
                    <img class="img-responsive img-hover" src="Pictures/apr20.png" alt="">
                </a>
            </div>
            <div class="col-md-1"></div>
        </div>
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
                    <li>
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
