<?php
session_start();
class User{

    // database connection and table name
    private $conn;
    private $table_name = "user";
     
    // object properties
    public $iduser;
    public $username;
    public $email;
    public $password;
    public $auth;
     
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }
	// create user
	function create(){
	     
	    // query to insert record
	    $query = "INSERT INTO 
	                " . $this->table_name . "
	            SET 
	                username=:username, email=:email, password=:password, auth=:auth";//, created=:created";
	     
	    // prepare query
	    $stmt = $this->conn->prepare($query);
	 
	    // bind values
	    $stmt->bindParam(":username", $this->username);
	    $stmt->bindParam(":email", $this->email);
	    $stmt->bindParam(":password", $this->password);
		$stmt->bindParam(":auth", $this->auth);
	    //$stmt->bindParam(":created", $this->created);
	     
	    // execute query
	    if($stmt->execute()){
	        return true;
	    }else{
	        return false;
	    }
	}
	
	// read products
	function readAll(){
	 
	    // select all query
	    $query = "SELECT 
	                iduser, username, email, password, auth 
	            FROM 
	                " . $this->table_name . "
	            ORDER BY 
	                username";
	 
	    // prepare query statement
	    $stmt = $this->conn->prepare( $query );
	     
	    // execute query
	    $stmt->execute();
	     
	    return $stmt;
	}
	
    public function login($uname,$email,$upass)
    {
       try
       {
       	  $query = "SELECT * 
          	FROM " . $this->table_name . " 
          	WHERE email = :email";
       	  		
          $stmt = $this->conn->prepare($query);
          
		  // bind values
		  $stmt->bindParam(":email", $email);
          $stmt->execute();
          $userRow=$stmt->fetch(PDO::FETCH_ASSOC);
          if($stmt->rowCount() > 0)
          {
             if($upass==$userRow['password'])//password_verify($upass, $userRow['password']))
             {
                $_SESSION['user'] = $userRow['username'];
				$_SESSION['id'] = $userRow['iduser'];
                $_SESSION['auth'] = $userRow['auth'];
                echo $userRow['username'];
                return true;
             }
             else
             {		
                echo "login failed in user class";
                return false;
             }
          }
          //testing remove later
		  else {
			  echo 'empty row from user.php query';
		  }
       }
	   
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }
	   
   }
 
   public function is_loggedin()
   {
      if(isset($_SESSION['user']))
      {
         return true;
      }
   }
 
   public function redirect($url)
   {
       header("Location: $url");
   }
 
   public function logout()
   {
        session_destroy();
        unset($_SESSION['user']);
        return true;
   }
	
	// used when filling up the update product form
	function readOne(){
	     
	    // query to read single record
	    $query = "SELECT 
	                username, email, password, auth  
	            FROM 
	                " . $this->table_name . "
	            WHERE 
	                iduser = ? 
	            LIMIT 
	                0,1";
	 
	    // prepare query statement
	    $stmt = $this->conn->prepare( $query );
	     
	    // bind id of user to be updated
	    $stmt->bindParam(1, $this->iduser);
	     
	    // execute query
	    $stmt->execute();
	 
	    // get retrieved row
	    $row = $stmt->fetch(PDO::FETCH_ASSOC);
	     
	    // set values to object properties
	    $this->iduser = $row['iduser'];
	    $this->username = $row['username'];
	    $this->email = $row['email'];
	    $this->password = $row['password'];
		$this->auth = $row['auth'];
	}
	
	// update the product
	function update(){
	 
	    // update query
	    $query = "UPDATE 
	                " . $this->table_name . "
	            SET 
	                username = :username, 
	                email = :email, 
	                password = :password, 
	                auth = :auth
	            WHERE
	                iduser = :iduser";
	 
	    // prepare query statement
	    $stmt = $this->conn->prepare($query);
	 
	    // bind new values
	    $stmt->bindParam(':username', $this->username);
	    $stmt->bindParam(':email', $this->email);
	    $stmt->bindParam(':password', $this->password);
		$stmt->bindParam(':auth', $this->auth);
	    $stmt->bindParam(':iduser', $this->iduser);
	     
	    // execute the query
	    if($stmt->execute()){
	        return true;
	    }else{
	        return false;
	    }
	}
	// delete the product
	function delete(){
	 
	    // delete query
	    $query = "DELETE FROM " . $this->table_name . " WHERE iduser = ?";
	     
	    // prepare query
	    $stmt = $this->conn->prepare($query);
	     
	    // bind id of record to delete
	    $stmt->bindParam(1, $this->iduser);
	 
	    // execute query
	    if($stmt->execute()){
	        return true;
	    }else{
	        return false;
	    }
	}
}

