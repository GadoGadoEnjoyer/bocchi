<?php

class verifikasi extends Controller{
    public function index($token){
        if($this->model('UserModel')->verify($token)){
            echo('Verifikasi berhasil, silahkan login');
            echo('<br><a href="' . BASEURL . '/login">Login</a>');
        }
        else{
            echo('Verifikasi gagal');
        }
    }
}