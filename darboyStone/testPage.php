<!DOCTYPE html>
<html>
<body>

<?php
	$pageSource=$_POST['source'];
?>

<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
 </form>

</body>
</html> 