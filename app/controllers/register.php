<?php 

class register extends Controller{
    public function index(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if($this->model('UserModel')->create()){
                header('Location: ' . BASEURL . '/home');
            }
            else{
                header('Location: ' . BASEURL . '/register');
            };
        } 
        else if($_SERVER['REQUEST_METHOD'] == 'GET'){
            $this->view('register/index');
        }
    }
}