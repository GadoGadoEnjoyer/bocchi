<?php
require_once '../core/App.php';
require_once '../core/Controller.php';
require_once '../core/Database.php';

require_once '../core/Constants.php';
class Migration{
    private $db;

    public function __construct(){
        $this->db = new Database;
        //Create Migration code here!!!
        try {
            if(!$this->tableExist('User')){
                //The verified part unusable for now because I can't make email verification work
                //It no workie
                //Fix later
                //Also the password and role have ` ` because just to be safe
                $this->db->query('CREATE TABLE User(
                    user_id INT AUTO_INCREMENT PRIMARY KEY,
                    username VARCHAR(100) NOT NULL UNIQUE,
                    `password` VARCHAR(255) NOT NULL,
                    email VARCHAR(100) NOT NULL UNIQUE,
                    verified BOOLEAN NOT NULL DEFAULT 0,
                    `role` VARCHAR(50) NOT NULL DEFAULT "user",
                    photo VARCHAR(255) NOT NULL DEFAULT "default.jpg",
                    token VARCHAR(255) NOT NULL UNIQUE
                )');
            }
            $this->db->execute();
            if(!$this->tableExist('Post')){
                $this->db->query('CREATE TABLE `Post`(
                    post_id INT AUTO_INCREMENT PRIMARY KEY,
                    title VARCHAR(100) NOT NULL,
                    photo VARCHAR(255) NOT NULL DEFAULT "default.jpg",
                    user_id INT NOT NULL,
                    verified BOOLEAN NOT NULL DEFAULT 0,
                    `type` VARCHAR(50) NOT NULL DEFAULT "image",
                    FOREIGN KEY (user_id) REFERENCES User(user_id) ON DELETE CASCADE ON UPDATE CASCADE
                )');
            }
            $this->db->execute();
            if($this->tableExist('Post') && $this->tableExist('User')){
                $this->db->query('ALTER TABLE `Post` ADD FOREIGN KEY (`user_id`) REFERENCES `User`(`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;');
                $this->db->execute();
                $this->db->query('INSERT INTO `User` (`user_id`, `username`, `password`, `email`, `verified`, `role`, `photo`, `token`) VALUES (1, "admin", "$2a$12$iQ8W.0LlrpA1G7cHqM6fuOlYkoF2JsLBQ/fd4kkg56M5yVNF3us5O", "alirezaarifi69@gmail.com", 1, "admin", "default.jpg", "--");');
                $this->db->execute();
                $this->db->query('INSERT INTO `User` (`user_id`, `username`, `password`, `email`, `verified`, `role`, `photo`, `token`) VALUES (2, "anon", "$2a$12$iQ8W.0LlrpA1G7cHqM6fuOlYkoF2JsLBQ/fd4kkg56M5yVNF3us5O", "koplakreza406@gmail.com", 1, "user", "default.jpg", "-");'); 
                $this->db->execute();
            }

            
        }
        catch(PDOException $e){
            echo "Database Error: " . $e->getMessage();
        }
    }
    public function tableExist($table){
        $this->db->query('SHOW TABLES LIKE :table');
        $this->db->bind(':table', $table);
        if($this->db->rowcount() > 0){
            //Table exist
            return true;
        }else{
            //Table doesn't exist
            return false;
        }
    }
}
    //Call Constructor (Migration) to run it
    $migration = new Migration();
