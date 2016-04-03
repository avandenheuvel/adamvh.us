<form id='create-user-form' action='#' method='post' border='0'>
    <table class='table table-hover table-responsive table-bordered'>
        <tr>
            <td>Username</td>
            <td><input type='text' name='username' class='form-control' required /></td>
        </tr>
        <tr>
            <td>E-mail</td>
            <td><textarea name='email' class='form-control' required></textarea></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input name='password' class='form-control' required /></td>
        </tr>
        <tr>
            <td>Access level</td>
            <td><textarea name='auth' class='form-control' required></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td>                
                <button type='submit' class='btn btn-primary'>
            <span class='glyphicon glyphicon-plus'></span> Create User
        </button>
            </td>
        </tr>
    </table>
</form>