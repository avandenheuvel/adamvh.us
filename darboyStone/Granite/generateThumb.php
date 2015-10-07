<div>
<!-- Trigger the modal with a button >
<a class="modalLink col-xs-6 col-md-3 clickable"data-toggle="modal" data-target="#lgImageModal">Bathroom Gallery</a-->

<!-- Modal -->
<div id="lgImageModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Check out this large image</h4>
      </div>
      <div class="modal-body">
      	<img id="lgImage"/>
        <p>*Click the I like button below to add to your profile</p>
        <p>Preferences will be shared with our sales staff if you use the <a href="../contact.php>">Contact us</a> button.</p>
        <p id="testJS">File path</p>
      </div>
      <div class="modal-footer">
      	<button type="button" class="btn btn-success">I like</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
	
<?php
if(!function_exists("generate_Thumb")){
	function generate_Thumb($thumbFile, $largeFile){
	    /* function:  generates thumbnail */
		if(!function_exists("make_thumb")){
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
		}
		
		/* function:  returns files from dir */
		if(!function_exists("get_files")){
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
		}
		
		/* function:  returns a file's extension */
		if(!function_exists("get_file_extension")){
			function get_file_extension($file_name) {
				return substr(strrchr($file_name,'.'),1);
			}
		}
		
		// create new directory with 744 permissions if it does not exist yet
		// owner will be the user/group the PHP script is run under
		if(!function_exists("makeDir")){
			function makeDir($dir){
				if ( !file_exists($dir) ) {
					mkdir ($dir, 0744);
				}
			}
		}
					
		/** settings **/
		$images_dir = $largeFile;
		$thumbs_dir = $thumbFile;
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
				echo '<a class="img-responsive col-md-4 col-sm-6 col-xs-12 col-lg-3 modalLink clickable" 
				onclick="getImage(this); return false;" data-toggle="modal" data-target="#lgImageModal" rel="gallery">
					<img src="',$thumbnail_image,'" /></a>';
					echo '<a href="',$images_dir.$file,'" class="hidden" />lgImage</a>';
				//echo '<a href="',$images_dir.$file,'" class="img-responsive col-md-4 col-sm-6 col-xs-12 col-lg-3 " target="_blank" rel="gallery"><img src="',$thumbnail_image,'" /></a>';
				//if($index % $images_per_row == 0) { echo '<div class="clear"></div>'; }
			}
			echo '<div class="clear"></div>';
		}
		else {
			echo '<p>There are no images in this gallery.</p>';
		}
	}
}
?>
<script>
	function getImage(el){
		var fileName = el.firstElementChild.src;	
		var filePath = el.nextSibling.href;
		var filePathName = filePath.class;
		//var fileName = el.getElementsByTagName('a')[0].getAttribute('href');
		document.getElementById("testJS").innerHTML = filePath;
		document.getElementById("lgImage").src=filePath;
	}
</script>
</div>