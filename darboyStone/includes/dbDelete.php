<?php
	session_start();
	define('_ROOT', "../");
	
	function deleteFiles($fileName){
	  if (file_exists($filename)) {
	    unlink($filename);
	    echo 'File '.$filename.' has been deleted';
	  } else {
	    echo 'Could not delete '.$filename.', file does not exist';
	  }
	}
	
	echo '<script>alert("php in dbDelete started");</script>';
	$q = strval($_GET['q']);
	echo '<script>alert("db Delete called w/ param: " + $q);</script>';
	//include('header.php');
	
	/*POST to get db reference
	if(!isset($_SESSION['imgPath'])){
		$fileToUpdate = $_SESSION['imgPath'];
	}*/
	$db = new mysqli('localhost', 'adamvh99_admin', 'apv0703','adamvh99_darboy');
		/* check connection */
		if ($db->connect_errno) {
			printf("Connect failed: %s\n", $db->connect_error);
			deleteFiles($q);
			exit();
		}else{
	$sql = "Delete * 
			FROM modal
			WHERE imgPath = '".$q."'";

		}
	
?>
<!-- Modal content-->
    <!-- Modal -->
<div id="deleteModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Delete</h4>
      </div>
      <div class="modal-body row">
      	<div class="col-xs-12 bannerContent">
			<p>Modal object <?php echo $q;?> Deleted</p>
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">OK</button>
      </div>
    </div>
    </div>
    </div>
<?php
mysqli_close($db);
?>