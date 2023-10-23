<?php 

class register extends Controller{
    public function index(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if($this->model('UserModel')->create()){
                echo("User created successfully!");
                echo("Please check your email to verify your account!");
            }
            else{
                header('Location: ' . BASEURL . '/register?error=1');
            };
        } 
        else if($_SERVER['REQUEST_METHOD'] == 'GET'){
            $this->view('register/index');
        }
    }
}