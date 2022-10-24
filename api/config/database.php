<?php

// used to get mysql database connection
class Database{
 
    // specify your own database credentials
    private $host = "sql6.freesqldatabase.com";
    private $db_name = "sql6528786";
    private $username = "sql6528786";
    private $password = "aF9DZGsJTZ";
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
