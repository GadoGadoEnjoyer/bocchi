<?php

class PostModel{
    
    private $table = '`Post`';
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function create($filename, $type){
        try{
            $this->db->query('INSERT INTO ' . $this->table . ' (title, photo, user_id, verified, type) VALUES (:title, :photo, :user_id, 0, :type)');
            $this->db->bind('title', $_POST['title']);
            $this->db->bind('photo', $filename);
            $this->db->bind('user_id', $_SESSION['user_id']);
            if($type == 'image'){
                $this->db->bind('type', 'image');
            }
            else if($type == 'video'){
                $this->db->bind('type', 'video');
            }
            else{
                $this->db->bind('type', 'image');
            }
            $this->db->execute();
            return true;
        } catch (PDOException $e){
            return array('error' => 'Database error: ' . $e->getMessage());
        }
    }
    public function read($id = NULL){
        try {
            if ($id == NULL) {
                $this->db->query('SELECT * FROM ' . $this->table . ' WHERE verified = 0');
                return $this->db->resultset();
            } else {
                $this->db->query('SELECT * FROM ' . $this->table . ' WHERE post_id = :id AND verified = 0');
                $this->db->bind('id', $id);
                return $this->db->resultset();
            }
        } catch (PDOException $e) {
            return array('error' => 'Database error: ' . $e->getMessage());
        }
    }
    public function saferead($id = NULL){
        try {
            if ($id == NULL) {
                $this->db->query('SELECT * FROM ' . $this->table . ' WHERE verified = 1');
                return $this->db->resultset();
            } else {
                $this->db->query('SELECT * FROM ' . $this->table . ' WHERE post_id = :id AND verified = 1');
                $this->db->bind('id', $id);
                return $this->db->resultset();
            }
        } catch (PDOException $e) {
            return array('error' => 'Database error: ' . $e->getMessage());
        }
    }
    
    public function update($id){
        try{
            $this->db->query('UPDATE ' . $this->table . ' SET verified = 1 WHERE post_id = :id');
            $this->db->bind('id', $id);
            $this->db->execute();
            return true;
        } catch (PDOException $e){
            return array('error' => 'Database error: ' . $e->getMessage());
        }
    }
    public function delete($id){
        try{
            $this->db->query('SELECT * FROM ' . $this->table . ' WHERE post_id = :id');
            $this->db->bind('id', $id);
            $post = $this->db->resultsingle();
            unlink((dirname(__DIR__,2)) . "/public/assets/" . $post['photo']);
            $this->db->query('DELETE FROM ' . $this->table . ' WHERE post_id = :id');
            $this->db->bind('id', $id);
            $this->db->execute();
            return true;

        } catch(PDOException $e){
            return array('error' => 'Database error: ' . $e->getMessage());
        }
    }
}