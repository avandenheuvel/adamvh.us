<?php
 session_start();
 require_once ("dbconfig.php");
 
 //if(isset($_POST['btn-login']))
 //{
  //echo"<script>alert('login process called and btn-login posted');</script>";	
  $user_email = trim($_POST['user_email']);
  $user_password = trim($_POST['password']);
  
  //$password = md5($user_password); disabled for test
  $password = $user_password;
  //echo"<script>alert('".$password."');</script>";
  
  try
  { 
  
   $stmt = $DBcon->prepare("SELECT * FROM tbl_members WHERE email=:user_email");
   $stmt->execute(array(":user_email"=>$user_email));
   $row = $stmt->fetch(PDO::FETCH_ASSOC);
   $count = $stmt->rowCount();
   
   if($row['user_password']==$password){
    
    echo "ok"; // log in
    $_SESSION['user_session'] = $row['user_id'];
	$_SESSION['user_name'] = $row['first_name'];
	$_SESSION['user_level']= "boss"; //beginnings of this logic
   }
   else{
    
    echo "email or password does not exist."; // wrong details 
   }
    
  }
  catch(PDOException $e){
   echo $e->getMessage();
  }

?>