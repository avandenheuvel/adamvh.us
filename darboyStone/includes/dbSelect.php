<?php
	session_start();
	define('_ROOT', "../");
	
	echo '<script>alert("php in dbSelect started");</script>';
	$q = strval($_GET['q']);
	echo '<script>alert("dbSelect called w/ param: " + $q);</script>';
	//include('header.php');
	
	/*POST to get db reference
	if(!isset($_SESSION['imgPath'])){
		$fileToUpdate = $_SESSION['imgPath'];
	}*/
	$db = new mysqli('localhost', 'adamvh99_admin', 'apv0703','adamvh99_darboy');
		/* check connection */
		if ($db->connect_errno) {
			printf("Connect failed: %s\n", $db->connect_error);
			exit();
		}else{
	$sql = "SELECT * 
			FROM modal
			WHERE imgPath = '".$q."'";
	    $result = mysqli_query($db, $sql);
		$row = mysqli_fetch_array($result);
		$heading = $row['heading'];
		$image = $row['lgImgPath'];
		$genDesc = $row['genDesc'];
		$webLink = $row['vendorLink'];
		$bullet1 = $row['bullet1'];
		$bullet2 = $row['bullet2'];
		$bullet3 = $row['bullet3'];
		}
	
?>
<!-- Modal content-->
    <form action="../includes/update.php" method="post" enctype="multipart/form-data">
    <!-- Modal -->
<div id="updateModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add and object</h4>
      </div>
      <div class="modal-body row">
      	<div class="col-xs-12 bannerContent">
			<p>Update modal object <?php echo $q;?></p>
			
				<input type="hidden" id="modalToUpdate" name="modalToUpdate" value="<?php echo $q;?>" />
			    <div class="form-group">
				  <label class="control-label" for="heading">Name:</label>
				  <input class="form-control" type="text" name="heading" value="<?php echo $heading; ?>" id="heading"></input>
				</div>
				<div class="form-group">
				  <label class="control-label" for="genDesc">General Description:</label>
				  <input class="form-control" type="text" name="genDesc" value="<?php echo $genDesc; ?>" id="genDesc"></input>
				</div>
				<div class="form-group">
				  <label class="control-label" for="webLink">Website path:</label>
				  <input class="form-control" type="text" name="webLink" value="<?php echo $webLink; ?>" id="webLink"></input>
				</div>
				<div class="form-group">
				  <label class="control-label" for="webLink">Bullet 1:</label>
				  <input class="form-control" type="text" name="bullet1" value="<?php echo $bullet1; ?>" id="bullet1"></input>
				</div>
				<div class="form-group">
				  <label class="control-label" for="webLink">Bullet 2:</label>
				  <input class="form-control" type="text" name="bullet2" value="<?php echo $bullet2; ?>" id="bullet2"></input>
				</div>
				<div class="form-group">
				  <label class="control-label" for="webLink">Bullet 3:</label>
				  <input class="form-control" type="text" name="bullet3" value="<?php echo $bullet3; ?>" id="bullet3"></input>
				</div>
		</div>
      </div>
      <div class="modal-footer">
        <button type="submit" name="submit" class="btn btn-success" >Update</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
      </div>
    </div>
    </div>
    </div>
    </form>
    <?php
    mysqli_close($db);
	?>