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
        if(!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] == false){
            header('Location: ' . BASEURL . '/login');
        }
    }
    public function admin(){
        if($_SESSION['role'] !== 'admin'){
            header('Location: ' . BASEURL . '/login');
        }
    }
    public function ratelimit($timelimit,$type){
        if(isset($_SESSION['action'][$type])){
            $timepass = time() - $_SESSION['action'][$type];
            if($timepass < $timelimit){
                return false;
            }
            else{
                $_SESSION['action'][$type] = time();
                return true;
            }
        }
        else{
            $_SESSION['action'][$type] = time();
            return true;
        }
    }
}
