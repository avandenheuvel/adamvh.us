<!-- Modal -->
<div id="addModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <form action="../includes/insert.php" method="post" enctype="multipart/form-data">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add and object</h4>
      </div>
      <div class="modal-body row">
      	<div class="col-xs-12 bannerContent">
			<p>Create a new modal object</p>
			
				<input type="hidden" id="createWhat"name="createWhat" value="modal" />
			    <div class="form-group">
				  <label class="control-label" for="heading">Name:</label>
				  <input class="form-control" type="text" name="heading" placeholder="Enter Name" id="heading"></input>
				</div>
				<div class="form-group">
				  <label class="control-label" for="genDesc">General Description:</label>
				  <input class="form-control" type="text" name="genDesc" placeholder="General product description" id="genDesc"></input>
				</div>
				<div class="form-group">
				  <label class="control-label" for="webLink">Website path:</label>
				  <input class="form-control" type="text" name="webLink" placeholder="Path to manufacturer website" id="webLink"></input>
				</div>
				<div class="form-group">
				  <label class="control-label" for="fileToUpload">Picture to Upload:</label>
				  <input class="form-control" type="file" name="fileToUpload" id="fileToUpload"></input>
				</div>
				<div class="form-group">
				  <label class="control-label" for="webLink">Bullet 1:</label>
				  <input class="form-control" type="text" name="bullet1" placeholder="Bullet point #1" id="bullet1"></input>
				</div>
				<div class="form-group">
				  <label class="control-label" for="webLink">Bullet 2:</label>
				  <input class="form-control" type="text" name="bullet2" placeholder="Bullet point #2" id="bullet2"></input>
				</div><div class="form-group">
				  <label class="control-label" for="webLink">Bullet 3:</label>
				  <input class="form-control" type="text" name="bullet3" placeholder="Bullet point #3" id="bullet3"></input>
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