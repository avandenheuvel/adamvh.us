<?php
	session_start();
	echo "<script>changeUserTitle('user_login_form');</script>";
?>
<form id='user-login-form' action='#' method='post' border='0'>
	 <?php
        if(isset($error))
        {
          echo "<script>changeUserTitle('Error!');</script>";
          ?>
          <div class="alert alert-danger">
              <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $error; ?> !
          </div>
          <?php
        }
    ?>
    <table class='table table-hover table-responsive table-bordered'>
        <tr>
            <td><input type='text' name='username' class='form-control' placeholder="Username or email" /></td>
        </tr>
        <tr>
            <td><input name='password' class='form-control' placeholder="Password" required /></td>
        </tr>
        <tr>
            <td>                
                <button type='submit' class='btn btn-primary btn-login'>
                	Login
		        </button>
            </td>
        </tr>
    </table>
</form>