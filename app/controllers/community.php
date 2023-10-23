<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
class community extends Controller{
    public function post(){
        //Thanks GPT
        //Btw these verification stuff is probably aint secure but eh
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $this->auth();
            if($this->ratelimit(1) && $_FILES['image']['error'] == 0){
                $allowedMimeTypes = ['image/jpeg', 'image/png', 'image/jpg', 'image/webp', 'image/gif'];
                $video = ['video/mp4', 'video/webm', 'video/ogg'];

                if (in_array($_FILES['image']['type'], $allowedMimeTypes)){
                    $maxFileSize = 5 * 1024 * 1024; // 5 MB
                    if ($_FILES['image']['size'] <= $maxFileSize) {
                        $destinationDirectory = (dirname(__DIR__,2)) . "/public/assets";
                        $filename = uniqid() . '_' . $_FILES['image']['name'];
                        $targetPath = $destinationDirectory . '/' . $filename;
                        if (move_uploaded_file($_FILES['image']['tmp_name'], $targetPath)) {
                            if($this->model('PostModel')->create($filename, 'image'))
                                echo 'File uploaded successfully!';
                            else{
                                echo 'Error uploading file to database.';
                            }
                        }
                        else{
                            echo 'Error uploading file.';
                        }
                    }
                    else{
                        echo 'file to big';
                    }
                }
                else if(in_array($_FILES['image']['type'], $video)){
                    $maxFileSize = 50 * 1024 * 1024; // 50 MB
                    if ($_FILES['image']['size'] <= $maxFileSize) {
                        $destinationDirectory = (dirname(__DIR__,2)) . "/public/assets";
                        $filename = uniqid() . '_' . $_FILES['image']['name'];
                        $targetPath = $destinationDirectory . '/' . $filename;
                        if (move_uploaded_file($_FILES['image']['tmp_name'], $targetPath)) {
                            if($this->model('PostModel')->create($filename, 'video'))
                                echo 'File uploaded successfully!';
                            else{
                                echo 'Error uploading file to database.';
                            }
                        }
                        else{
                            echo 'Error uploading file.';
                        }
                    }
                    else{
                        echo 'file to big';
                    }
                }
                else{
                    echo 'wrong type you dum';
                }
            }
            else{
                echo 'ratelimit or no file';
		var_dump($_FILES);
            }
        } 
        else if($_SERVER['REQUEST_METHOD'] == 'GET'){
            $this->view('community/post/index');
        }
        
    }
    public function index(){
        $data = $this->model('PostModel')->saferead();
        $this->view('community/index',$data);
    }
}
