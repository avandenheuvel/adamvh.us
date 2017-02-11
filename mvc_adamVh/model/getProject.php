<div class="table-responsive">
  
	<table class="table table-striped table-bordered">
 
<thead>
	<tr>
	<th>Punch In</th>
	<th>Punch Out</th>
	<th>Time total</th>
</tr>
</thead>
<tbody>
	
<?php
 require_once 'dbconfig.php';
 
 if (isset($_REQUEST['id'])) {
   
 $id = intval($_REQUEST['id']);
 $query = "SELECT * FROM tbl_timeentry WHERE project_id=:id";
 $stmt = $DBcon->prepare( $query );
 $stmt->execute(array(':id'=>$id));
 while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
 ?>
 
 <tr>
 	<?php
 	//$now = new DateTime(); // current date/time
	//$now = new DateTime("2010-07-28 01:11:50");
	//$ref = new DateTime("2010-07-30 05:56:40");
	//$diff = $now->diff($ref);
	//printf('%d days, %d hours, %d minutes', $diff->d, $diff->h, $diff->i);
 	//This is the part I'm working on - Not working!
	 	//$now = new DateTime(); // current date/time
		$end = new DateTime($row['end_time']);
		$strt = new DateTime($row['start_time']);
		$diff = $end->diff($strt);
		//$diff = $row('end_time')-($row('start_time'));
		$total = sprintf('%d days, %d hours, %d minutes, %d seconds', $diff->d, $diff->h, $diff->i, $diff->s);
	?>
	
 	<td><?php echo $row['start_time']; ?></td>
	<td><?php echo $row['end_time']; ?></td>
	<td><?php echo $total; ?></td>
 </tr>   
   
<?php 
}
}
?>

</tbody>
</table>