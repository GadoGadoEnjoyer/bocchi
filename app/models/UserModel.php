<?php
require __DIR__ .'../../../vendor/autoload.php';
use Mailgun\Mailgun;
session_start();
class UserModel{
    
    private $table = '`User`';
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function create(){
        try {
            $this->db->query('INSERT INTO ' . $this->table . ' (username, password, email, verified, role, photo, token) VALUES (:username, :password, :email, 0, DEFAULT, DEFAULT, :token)');
            $this->db->bind('username', $_POST['username']);
            $this->db->bind('email', $_POST['email']);
            $this->db->bind('password', password_hash($_POST['password'], PASSWORD_DEFAULT));
            $token = bin2hex(random_bytes(10));
            $this->db->bind('token', $token);
            if($this->db->execute()){
                $this->sendmail($_POST['email'], $token);
                return true;
            }
            else{
                return false;
            }
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
    public function read($id = NULL){
        try {
            if ($id == NULL) {
                $this->db->query('SELECT * FROM ' . $this->table);
                return $this->db->resultset();
            } else {
                $this->db->query('SELECT * FROM ' . $this->table . ' WHERE user_id = :id');
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
    public function sendmail($destination, $token){
        $mg = Mailgun::create(API_MAIL); //sukaair.online api?

        $mg->messages()->send('mail.sukaair.online', [
        'from'    => 'LoafAnon@mail.sukaair.online',
        'to'      => $destination,
        'subject' => 'Email Verification!',
        'text'    => BASEURL . '/verifikasi/' . $token . '   Click this link to verify your email!'
        ]);

        return true;
    }

    public function verify($token){
        try {
            $this->db->query('SELECT * FROM ' . $this->table . ' WHERE token = :token');
            $this->db->bind('token', $token);
            $valid = $this->db->resultset();
            if($valid){
                $this->db->query('UPDATE ' . $this->table . ' SET verified = 1 WHERE token = :token');
                $this->db->bind('token', $token);
                if($this->db->execute()){
                    return true;
                }
                else{
                    return false;
                }
            }
            else{
                return false;
            }
        } 
        catch (PDOException $e) {
            return $e->getMessage();
        }
    }

    public function login(){
        try {
            $this->db->query('SELECT * FROM ' . $this->table . ' WHERE username = :username');
            $this->db->bind('username', $_POST['username']);
            $user = $this->db->resultset();
            if($user){
                if($user[0]['verified'] == 1){
                    if(password_verify($_POST['password'], $user[0]['password'])){
                        $_SESSION['user_id'] = $user[0]['user_id'];
                        $_SESSION['username'] = $user[0]['username'];
                        $_SESSION['role'] = $user[0]['role'];
                        $_SESSION['authenticated'] = true;
                        return true;
                    }
                    else{
                        return false;
                    }
                }
                else{
                    return false;
                }
            }
            else{
                return false;
            }
        } 
        catch (PDOException $e) {
            return $e->getMessage();
        }
    }
}
