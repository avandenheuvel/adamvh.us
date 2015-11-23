<?php
	$q = strval($_GET['q']);
?>
<!-- Modal -->
<div id="addImgModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <form action="../includes/uploadImg.php" method="post" enctype="multipart/form-data">
    	<input type="hidden" name="fileDir" value="<?=$q?>" /><!--New added whole line-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add a new Image</h4>
      </div>
      <div class="modal-body row">
      	<div class="col-xs-12 bannerContent">
				<div class="form-group">
					<p><?=$q?></p>
				  <label class="control-label" for="fileToUpload">Picture to Upload:</label>
				  <input class="form-control" type="file" name="fileToUpload" id="fileToUpload"></input>
				</div>
				
		</div>
      </div>
      <div class="modal-footer">
        <button type="submit" name="submit" class="btn btn-success" >Create</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
      </div>
    </div>
    </form>

  </div>
</div>