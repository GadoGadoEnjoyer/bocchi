<?php 

class Database{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $db_name = DB_NAME;

    private $dbh;
    private $stmt;

    public function __construct(){
        
        $dsn = 'mysql:host='.$this->host;
        $option = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];

        try {
            // Create a connection without specifying the database
            $this->dbh = new PDO($dsn, $this->user, $this->pass, $option);
        } catch (PDOException $e) {
            die($e->getMessage());
        }

        // Create the database if it doesn't exist
        $this->createDatabaseIfNotExists();

        // Reconnect to the database you want to use
        $dsn = 'mysql:host='.$this->host.';dbname='.$this->db_name;
        $this->dbh = new PDO($dsn, $this->user, $this->pass, $option);
    }

    // Method to create the database if it doesn't exist
    private function createDatabaseIfNotExists() {
        $createDbSql = "CREATE DATABASE IF NOT EXISTS " . $this->db_name;
        
        try {
            $this->dbh->exec($createDbSql);
        } catch (PDOException $e) {
            die("Error creating database: " . $e->getMessage());
        }
    }

    public function query ($query){
        $this->stmt = $this->dbh->prepare($query);
    } 
    
    public function bind($param, $value, $type = null){
        if(is_null($type)){
            switch(true){
                case is_int($value) :
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value) :
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value) :
                    $type = PDO::PARAM_NULL;
                    break;
                default :
                    $type = PDO::PARAM_STR;
            }
        }

        $this->stmt->bindValue($param,$value,$type);
    }

    public function execute()
    {
        try {
            return $this->stmt->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function resultset(){
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function resultsingle(){
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getlastid(){
        return $this->dbh->lastInsertId();
    }
    
    public function rowcount(){
        $this->execute();
        return $this->stmt->rowCount();
    }
}