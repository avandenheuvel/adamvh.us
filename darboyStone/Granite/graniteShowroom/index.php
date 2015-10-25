<?php
	session_start();
	define('_ROOT',"../../");
?>

<!--DOCTYPE html>

<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		New Darboy Stone & Brick
	</title>


	<link href="../../styles/bootstrap.css"  rel="stylesheet"/>
	<link href="../../styles/adamvh.css" rel="stylesheet" />
	
	<script src="../../js/jquery.js" type="text/javascript"></script>
	<script src="../../js/bootstrap.js" type="text/javascript"></script>
	
</head>
<body>
<?php
	include("../../header.php");
?>
<div class="container">
	<div class="container">
	<!-- Page Heading/Breadcrumbs>
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Granite
                    <small>Sample Gallery</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="../../">Home</a></li>
                    <li><a href="../../Granite">Granite</a></li>
                    <li class="active">Granite Showroom</li>
                </ol>
            </div>
        </div-->
<div class="col-xs-12 bannerContent">
	<p>Feel free to browse these sample images of granite pieces we've installed in the past</p>
	<p>Remember, granite is a product of nature. Every piece will exibit individual colors and characteristics
		<a href="../../contact.php">Contact us</a> today or come on in to our <a href="../../showroom.php">showroom</a> to 
		meet with a professional salesperson and view our current selection of granite.</p>
</div>
<div class="">
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
	$images_dir = './graniteShowroom/img/';
	$thumbs_dir = './graniteShowroom/imgThumb/';
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
			if(!file_exists($thumbnail_image)) {
				$extension = get_file_extension($thumbnail_image);
				if($extension) {
					make_thumb($images_dir.$file,$thumbnail_image,$thumbs_width);
				}
			}
			echo '<a href="',$images_dir.$file,'" class="img-responsive col-md-4 col-sm-6 col-xs-12 col-lg-3" target="_blank" rel="gallery"><img src="',$thumbnail_image,'" /></a>';
			//if($index % $images_per_row == 0) { echo '<div class="clear"></div>'; }
		}
		echo '<div class="clear"></div>';
	}
	else {
		echo '<p>There are no images in this gallery.</p>';
	}
?>
</div>
<!--
<?php
	include("../footer.php");
?>
</body-->
</html>