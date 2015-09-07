<?php
	session_start();
	//$_SESSION['Administrator']=1;
	define('_ROOT',"./");
?>

<!DOCTYPE html>

<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		New Darboy Stone & Brick
	</title>


	<link href="../styles/bootstrap.css"  rel="stylesheet"/>
	<link href="../styles/adamvh.css" rel="stylesheet" />
	
	<script src="../js/jquery.js" type="text/javascript"></script>
	<script src="../js/bootstrap.js" type="text/javascript"></script>
	
</head>
<body>
<?php
	include("../header.php");
?>
<div class="container">
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
	$images_dir = './img/';
	$thumbs_dir = './imgThumb/';
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
			echo '<a href="',$images_dir.$file,'" class="img-thumbnail" rel="gallery"><img src="',$thumbnail_image,'" /></a>';
			if($index % $images_per_row == 0) { echo '<div class="clear"></div>'; }
		}
		echo '<div class="clear"></div>';
	}
	else {
		echo '<p>There are no images in this gallery.</p>';
	}
?>
</div>
</body>
</html>