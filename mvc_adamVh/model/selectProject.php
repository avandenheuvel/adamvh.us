<table class="table table-striped table-bordered">
              
    <thead>
        <tr>
        <th>Project</th>
        <th>View Details</th>
        </tr>
    </thead>
              
    <tbody>
           
    <?php
              
        require_once 'dbconfig.php';
              
        $query = "SELECT * FROM tbl_projects";
        $stmt = $DBcon->prepare( $query );
        $stmt->execute();
        while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
        ?>
        <tr>
        <td><?php echo $row['project_name']."&nbsp;".$row['project_status']; ?></td>
        <td>
        <button data-id="<?php echo $row['id_project']; ?>" id="getProj" class="btn btn-sm btn-info"><i class="glyphicon glyphicon-eye-open"></i> View</button>
        </td>
        </tr>
        <?php
      }
   ?>

   </tbody>
</table>
