<?php
class Database{
     
    // specify your own database credentials
    private $host = "localhost";
    private $db_name = "adamvh99_golfPro";
    private $username = "adamvh99_admin";
    private $password = "apv0703";
    public $conn;
     
    // get the database connection
    public function getConnection(){
     
        $this->conn = null;
         
        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
         
        return $this->conn;
    }
}
?>