<?php
// get user id
$user_id=isset($_GET['user_id']) ? $_GET['user_id'] : die('ERROR: User ID not found.');
 
// include database and object files
include_once 'config/database.php';
include_once 'objects/user.php';
 
// instantiate database and product object
$database = new Database();
$db = $database->getConnection();
 
// initialize object
$user = new User($db);
 
// set product id property
$user->iduser=$user_id;
 
// read single product
$user->readOne();
?>
<!--we have our html form here where new product information will be entered-->
<form id='update-user-form' action='#' method='post' border='0'>
    <table class='table table-bordered table-hover'>
        <tr>
            <td>Username</td>
            <td><input type='text' name='username' class='form-control' value='<?php echo htmlspecialchars($user->username, ENT_QUOTES); ?>' required /></td>
        </tr>
        <tr>
            <td>E-mail</td>
            <td>
            <textarea name='email' class='form-control' required><?php echo htmlspecialchars($user->email, ENT_QUOTES); ?></textarea>
            </td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input name='password' class='form-control' value='<?php echo htmlspecialchars($user->password, ENT_QUOTES);  ?>' required /></td>
        </tr>
        <tr>
            <td>
                <!-- hidden ID field so that we could identify what record is to be updated -->
                <input type='hidden' name='iduser' value='<?php echo $user_id ?>' /> 
            </td>
            <td>
                <button type='submit' class='btn btn-primary'>
                    <span class='glyphicon glyphicon-edit'></span> Save Changes
                </button>
            </td>
        </tr>
    </table>
</form>