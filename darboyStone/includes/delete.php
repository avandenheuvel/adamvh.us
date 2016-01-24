<?php
	session_start();
	define('_ROOT', "../");
	
	function deleteFiles($fileName){
	  //str_replace ( mixed $search , mixed $replace , mixed $subject [, int &$count ] )
	  	$subject=$fileName;
		$search=["http://darboystone.com","imgThumb"];
		$replace=[$_SERVER['DOCUMENT_ROOT'],"img"];
		$imgLgFileName = str_replace($search, $replace, $subject);
	  	
		$search="http://darboystone.com";
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
	deleteFiles(strval($_GET['q']));
	
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
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">OK</button>
      </div>
    </div>
</div>
</div>