
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="">

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="css/customStyles.css" rel="stylesheet" /><!--http://twbscolor.smarchal.com/-->

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.css" rel="stylesheet" type="text/css">
    
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
                <a class="navbar-brand" href="<?php echo _ROOT . "./"?>">Darting Needles</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="<?php echo _ROOT . "./about.php"?>">About</a>
                    </li>
                    <li>
                        <a href="<?php echo _ROOT . "./meetings"?>">Meetings</a>
                    </li>
                    <li>
                        <a href="<?php echo _ROOT . "./classes"?>">Classes</a>
                    </li>
                    <!--Decided to have separate meetings and classes tabs
                    
                    <li class="dropdown">
                        <a href="programs.php" class="dropdown-toggle" data-toggle="dropdown">Classes<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="programs.php">Program Overview</a>
                            </li>
                            <li>
                            	<a href="program_2015-03-14_workshop_Large prints.php">Large Scale Prints</a>
                            </li>
                            <li>
                            	<a href="program_2015-03-15_workshop_Transparency quilts.php">Transparency Quilts</a>
                            </li>
                            <li>
                            	<a href="program_2015-03-16_workshop_Rediscover.php">Rediscovering your Stash</a>
                            </li>
                        </ul>
                    </li>
                    -->
                    <li>
                        <a href="<?php echo _ROOT. "./contact.php"?>">Contact</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Quilt Shows <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="<?php echo _ROOT ."./2014-Gallery.php"?>">2014 Quilt Show Gallery</a>
                            </li>
                            <li>
                                <a href="<?php echo _ROOT ."./2012-Gallery.php"?>">2012 Quilt Show Gallery</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>