<?php
session_start();
class admin extends Controller{
    public function index(){
        $this->auth();
        $this->admin();
        echo("Hello Admin!");
        echo("Welcome back " . $_SESSION['username'] . " !");
        echo("Here are the posts that need to be verified!");
        $data = $this->model('PostModel')->read();
        $this->view('admin/index',$data);
    }
    public function verifikasi($id){
        $this->auth();
        $this->admin();
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if($_POST['verifikasi'] == 'verifikasi'){
                $this->model('PostModel')->update($id);
                header('Location: ' . BASEURL . '/admin');
            }
            else if($_POST['verifikasi'] == 'hapus'){
                $this->model('PostModel')->delete($id);
                header('Location: ' . BASEURL . '/admin');
            }
        }
    }
}

?>
