<?php
	session_start();
	//$_SESSION['Administrator']=1;
?>
<!DOCTYPE html>

<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="">
	<title>
		New Darboy Stone & Brick
	</title>
	
	<link href="styles/bootstrap.css"  rel="stylesheet"/>
	<link href="styles/adamvh.css" rel="stylesheet" />
	<script src="http://adamvh.us/darboyStone/js/jquery.js" type="text/javascript"></script>
	<script src="http://adamvh.us/darboyStone/js/bootstrap.js" type="text/javascript"></script>
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
                <a class="navbar-brand" href="<?php echo _ROOT . "./"?>">Darboy Stone & Brick</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="<?php echo _ROOT . "./about.php"?>">About</a>
                    </li>
                    
                    <li>
                        <a href="<?php echo _ROOT . "./request"?>">Request Information</a>
                    </li> 
                                       
                    <li>
                        <a href="./contact.php">Contact</a>
                    </li>
                    <?php
                    	if($_SESSION['Administrator']==1){
                    		echo"<li><a href='#'>Welcome: ".$_SESSION['FirstName']."</a></li>";
                    		echo"<li class='dropdown'>";
					          echo"<a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-expanded='false'>User Functions<span class='caret'></span></a>";
					          echo"<ul class='dropdown-menu' role='menu'>";
					            echo"<li><a href='./update.php'>Update</a></li>";
					            echo"<li><a href='./Logout.php'>Logout</a></li>";
					            echo"<li class='divider'></li>";
					            echo"<li ><a href='./insert.php'>Add user</a></li>";
								echo"<li ><a href='./select.php'>Administer users</a></li>";
								
                    	}else{
                    		echo"<li><a href='./login.php'>Login</a></li>";
                    	}
					?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
  
  	

   </br>
   