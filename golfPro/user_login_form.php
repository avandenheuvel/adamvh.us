<form id='user-login-form' action='#' method='post' border='0'>
	 <?php
        if(isset($error))
        {
          ?>
          <div class="alert alert-danger">
              <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $error; ?> !
          </div>
          <?php
        }
    ?>
    <table class='table table-hover table-responsive table-bordered'>
        <tr>
            <td>Username or email</td>
            <td><input type='text' name='username' class='form-control' required /></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input name='password' class='form-control' required /></td>
        </tr>
        <tr>
            <td></td>
            <td>                
                <button type='submit' class='btn btn-primary btn-login'>
                	Login
		        </button>
            </td>
        </tr>
    </table>
</form>