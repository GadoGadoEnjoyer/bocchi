<?php 
session_start();
class character extends Controller{
    public function index(){
        $this->view('character/index');
    }
    
}