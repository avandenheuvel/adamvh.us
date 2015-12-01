<?php
session_start();

function jsErrorAlert($msg){
	echo '<script type="text/javascript">alert("ERROR: ' . $msg . '");</script>';
}

function uploadImage($fileDir){
	//http://www.w3schools.com/php/php_file_upload.asp
	$target_dir = $_SERVER['DOCUMENT_ROOT'] . "/darboyStone/".$fileDir."/img/";
	$target_file = $target_dir . ($_FILES["fileToUpload"]["name"]);
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])) {
	    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	    if($check !== false) {
	        echo "File is an image - " . $check["mime"] . ".";
	        $uploadOk = 1;
	    } else {
	        echo "File is not an image.";
	        $uploadOk = 0;
	    }
	}
	// Check if file already exists
	if (file_exists($target_file)) {
	    jsErrorAlert("Sorry, file already exists.".$target_file.", fileDir= ".$fileDir);
	    $uploadOk = 0;
	}
	 // Check file size
	if ($_FILES["fileToUpload"]["size"] > 1000000) {
	    jsErrorAlert("Sorry, your file is too large.");
	    $uploadOk = 0;
	 }
	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" && $imageFileType!="JPG") {
	    jsErrorAlert("Sorry, only JPG, JPEG, PNG & GIF files are allowed.");
	    $uploadOk = 0;
	}
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
	    jsErrorAlert("Sorry, your file was not uploaded.");
	// if everything is ok, try to upload file
	} else {
	    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
	        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded." . 
				" to " . $target_dir;
	    } else {
	        echo "Sorry, there was an error uploading your file:" . $target_file . " to: " . $target_dir;
	    }
	}
	if($uploadOk == 1){
		return $_FILES["fileToUpload"]["name"];
	}else{
		return FALSE;
	}
}

$dirIn=strval($_POST['fileDir']);
uploadImage($dirIn);
?>