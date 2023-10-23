<?php

session_start();
class logout extends Controller{
    public function index(){
        $this->auth();
        session_destroy();
        header('Location: ' . BASEURL . '/login');
    }
}