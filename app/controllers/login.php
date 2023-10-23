<?php 
session_start();
class login extends Controller{
    public function index(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if($this->model('UserModel')->login()){
                header('Location: ' . BASEURL . '/home');
            }
            else{
                header('Location: ' . BASEURL . '/login');
            };
        } 
        else if($_SERVER['REQUEST_METHOD'] == 'GET'){
            $this->view('login/index');
        }
    }
}
