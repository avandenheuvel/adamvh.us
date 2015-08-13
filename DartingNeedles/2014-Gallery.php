<?php
	define("_ROOT",'./');
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>2014-Quilt Show Pictures - Appleton, WI</title>

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
                <h1 class="page-header">Quilt Show Gallery
                    <small>2014</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">2014 quilt show</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
        
        <?php
	        /* function:  generates thumbnail */
			function make_thumb($src,$dest,$desired_width) {
				/* read the source image */
				$source_image = imagecreatefromjpeg($src);
				$width = imagesx($source_image);
				$height = imagesy($source_image);
				/* find the "desired height" of this thumbnail, relative to the desired width  */
				$desired_height = floor($height*($desired_width/$width));
				/* create a new, "virtual" image */
				$virtual_image = imagecreatetruecolor($desired_width,$desired_height);
				/* copy source image at a resized size */
				imagecopyresized($virtual_image,$source_image,0,0,0,0,$desired_width,$desired_height,$width,$height);
				/* create the physical thumbnail image to its destination */
				imagejpeg($virtual_image,$dest);
			}
			
			/* function:  returns files from dir */
			function get_files($images_dir,$exts = array('jpg')) {
				$files = array();
				if($handle = opendir($images_dir)) {
					while(false !== ($file = readdir($handle))) {
						$extension = strtolower(get_file_extension($file));
						if($extension && in_array($extension,$exts)) {
							$files[] = $file;
						}
					}
					closedir($handle);
				}
				return $files;
			}
			
			/* function:  returns a file's extension */
			function get_file_extension($file_name) {
				return substr(strrchr($file_name,'.'),1);
			}
			
			// create new directory with 744 permissions if it does not exist yet
			// owner will be the user/group the PHP script is run under
			function makeDir($dir){
				if ( !file_exists($dir) ) {
					mkdir ($dir, 0744);
				}
			}
						
			/** settings **/
			$images_dir = './2014pictures-med/';
			$thumbs_dir = './2014pictures-smaller/';
			$thumbs_width = 200;
			$images_per_row = 5;
			
			/** generate photo gallery 
			 * 	Photos stored in 2 separate folders with the same name
			 * 
			 **/
			$image_files = get_files($images_dir);
			if(count($image_files)) {
				$index = 0;
				foreach($image_files as $index=>$file) {
					$index++;
					$thumbnail_image = $thumbs_dir.$file;
					//if(!file_exists($thumbnail_image)) {
						//$extension = get_file_extension($thumbnail_image);
						//if($extension) {
							//make_thumb($images_dir.$file,$thumbnail_image,$thumbs_width);
						//}
					//}
					echo '<a href="',$images_dir.$file,'" class="img-thumbnail" rel="gallery"><img src="',$thumbnail_image,'" /></a>';
					//if($index % $images_per_row == 0) { echo '<div class="clear"></div>'; }
				}
				echo '<div class="clear"></div>';
			}
			else {
				echo '<p>There are no images in this gallery.</p>';
			}
		?>
        <hr>

        <!-- Pagination -->
        <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                    <li>
                        <a href="#">&laquo;</a>
                    </li>
                    <li class="active">
                        <a href="#">2014 Gallery</a>
                    </li>
                    <li>
                        <a href="./2012-Gallery.php">2012 Gallery</a>
                    </li>
                    <li>
                        <a href="#">2010 Gallery</a>
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
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
