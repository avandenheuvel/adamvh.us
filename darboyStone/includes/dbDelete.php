<?php
	session_start();
	define('_ROOT', "../");
	
	function deleteFiles($fileName){
	  //str_replace ( mixed $search , mixed $replace , mixed $subject [, int &$count ] )
	  	$subject=$fileName;
		$search=["http://adamvh.us","imgThumb"];
		$replace=[$_SERVER['DOCUMENT_ROOT'],"img"];
		$imgLgFileName = str_replace($search, $replace, $subject);
	  	
		$search="http://adamvh.us";
		$replace=$_SERVER['DOCUMENT_ROOT'];
		$imgThumbFileName = str_replace($search, $replace, $subject);
		
	  if (file_exists($imgLgFileName)) {
	  	
	    unlink($imgThumbFileName);
		unlink($imgLgFileName);
	    $rtrnVal= 'File '.$imgThumbFileName.' and '.$imgLgFileName.' have been deleted';
		
	  } else {
	    $rtrnVal= 'Could not delete '.$fileName.', file does not exist. imgThumbFileName root = '.$imgLgFileName;
		
	  }
	  return $rtrnVal;
	}
	
	$q = strval($_GET['q']);

	$db = new mysqli('localhost', 'adamvh99_admin', 'apv0703','adamvh99_darboy');
		/* check connection */
		if ($db->connect_errno) {
			printf("Connect failed: %s\n", $db->connect_error);
			exit();
		}else{
			$sql = "DELETE
					FROM modal
					WHERE imgPath = '".$q."'";
			$stsMsg=deleteFiles($q);//Return true on success, rollback if error
			//Disabled for testing
			//mysqli_query($db, $sql);
		}
	
?>
<!-- Modal content-->
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
			<p>SQL = <?=$sql?></p>
			<p>Img sts = <?=$stsMsg?></p>
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