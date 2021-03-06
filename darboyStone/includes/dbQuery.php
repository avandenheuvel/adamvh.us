<?php
session_start();

/**
 * This is called from clicking a thumbnail image in a modal.
 * dbQuery searches based on the file path 
 */
$q = strval($_GET['q']);

$con = mysqli_connect('localhost','adamvh99_admin','apv0703','adamvh99_darboy');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"adamvh99_darboy");
$sql="SELECT * FROM modal WHERE imgPath = '".$q."'";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
$heading = $row['heading'];
$image = $row['lgImgPath'];
$genDesc = $row['genDesc'];
$webLink = $row['vendorLink'];
$bullet1 = $row['bullet1'];
$bullet2 = $row['bullet2'];
$bullet3 = $row['bullet3'];
?>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><?= $heading ?></h4>
      </div>
      <div class="modal-body row">
		<div class="col-sm-6">
			<h4 class="txtLeft"><?=$genDesc?></h4>
			<ul class="txtLeft">
				<li><?=$bullet1?></li>
				<li><?=$bullet2?></li>
				<li><?=$bullet3?></li>
			</ul>
			<a href=<?=$webLink?> class="txtLeft" target="_blank">VendorSite</a>
		</div>
		
		<div class="col-sm-6">
			<img src=<?=$image?> class="thumbnail modalImg" />
		</div>
		
		<div class="row">
			<div class="col-lg-12 txtLeft">
				<p class="txtLeft"><a href="../contact.php">Contact us</a> today or come on in to our <a href="../about.php">showroom</a> to 
					meet with a professional salesperson.</p>
			</div>
		</div>
      </div>
      <div class="modal-footer">
      	<?php
      		if(isset($_SESSION['Administrator'])){
	      		if($_SESSION['Administrator']==1){
	      			/**
					 * Update and delete .js function located in scripts.js
					 * Modal to be updated is decided from dbSelect.php
					 * Modal to be deleted is straight to dbDelete.php
					 */
	      			echo '<button type="button" onclick="updateModal(&quot;' . $q . '&quot;);" class="btn btn-default">Update</button>';
	      			echo '<button type="button" onclick="deleteModal(&quot;' . $q . '&quot;);" class="btn btn-danger">Delete</button>';
	      		}
			}
      	?>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<?php
	mysqli_close($con);
?>