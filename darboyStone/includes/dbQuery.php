<?php
session_start();

$q = strval($_GET['q']);
//$q = intval($_GET['q']);

$con = mysqli_connect('localhost','adamvh99_admin','apv0703','adamvh99_darboy');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"adamvh99_darboy");
$sql="SELECT * FROM modal WHERE imgPath = '".$q."'";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
$heading = $row['heading'];
$image = $row['imgPath'];
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
      	<div class="col-xs-12 bannerContent">
			<p><a href="../contact.php">Contact us</a> today or come on in to our <a href="../about.php">showroom</a> to 
				meet with a professional salesperson and view our current selection of granite.</p>
			<img src=<?=$image?> />
			<p><?=$image?></p>
			<p><?=$q?></p>
		</div>
      </div>
      <div class="modal-footer">
      	<?php
      		if($_SESSION['Administrator']==1){
      			echo '<button type="button" class="btn btn-default">Update</button>';
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