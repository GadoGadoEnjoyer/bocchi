<?php 

class register extends Controller{
    public function index(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if($this->ratelimit(30,'register')){
                if($this->model('UserModel')->create()){
                    echo("User created successfully!");
                    echo("Please check your email to verify your account!");
                }
                else{
                    header('Location: ' . BASEURL . '/register?error=1');
                };
            }
            else{
                echo("You are being ratelimited!");
                echo('Buat akun per 30 detik');
            }
            
        } 
        else if($_SERVER['REQUEST_METHOD'] == 'GET'){
            $this->view('register/index');
        }
    }
}