<?php

class CharacterModel{
    
    private $table = '`Character`';
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function create(){
        
    }
    public function read($id = NULL){
        try {
            if ($id == NULL) {
                $this->db->query('SELECT * FROM ' . $this->table);
                return $this->db->resultset();
            } else {
                $this->db->query('SELECT * FROM ' . $this->table . ' WHERE character_id = :id');
                $this->db->bind('id', $id);
                return $this->db->resultset();
            }
        } catch (PDOException $e) {
            return array('error' => 'Database error: ' . $e->getMessage());
        }
    }
    
    public function update(){
        
    }
    public function delete(){

    }
}