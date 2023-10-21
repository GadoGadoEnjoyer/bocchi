<?php 

class Controller{
    public function view($view,$data = []){
        require_once '../app/views/'.$view.'.php';
    }

    public function model($model){
        require_once '../app/models/'.$model.'.php';
        return new $model;
    }
    public function auth(){
        if(!isset($_SESSION['authenticated']) || !$_SESSION['authenticated'] == true){
            header('Location: ' . BASEURL . '/login');
        }
    }
    public function admin(){
        if(!isset($_SESSION['role']) || !$_SESSION['role'] == 'admin'){
            header('Location: ' . BASEURL . '/login');
        }
    }
    public function ratelimit($timelimit){
        if(isset($_SESSION['action'])){
            $timepass = time() - $_SESSION['action'];
            if($timepass < $timelimit){
                return false;
            }
            else{
                $_SESSION['action'] = time();
                return true;
            }
        }
        else{
            $_SESSION['action'] = time();
            return true;
        }
    }
}