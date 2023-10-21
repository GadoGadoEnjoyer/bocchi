<?php

class home extends Controller{
    public function index(){
        $json = file_get_contents('https://safebooru.org/index.php?page=dapi&s=post&q=index&pid=1&limit=20&json=1&tags=bocchi_the_rock!');
        $data = json_decode($json, true);
        $this->view('home/index',$data);
    }
}

?>