<table class="table table-striped table-bordered">
              
    <thead>
        <tr>
        <th>Full Name</th>
        <th>View Profile</th>
        </tr>
    </thead>
              
    <tbody>
           
    <?php
              
        require_once 'dbconfig.php';
              
        $query = "SELECT * FROM tbl_members";
        $stmt = $DBcon->prepare( $query );
        $stmt->execute();
        while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
        ?>
        <tr>
        <td><?php echo $row['first_name']."&nbsp;".$row['last_name']; ?></td>
        <td>
        <button data-id="<?php echo $row['user_id']; ?>" id="getUser" class="btn btn-sm btn-info"><i class="glyphicon glyphicon-eye-open"></i> View</button>
        </td>
        </tr>
        <?php
      }
   ?>

   </tbody>
</table>
