<?php 

class App{

    //Controller dan Method default
    protected $controller = 'home';
    protected $method = 'index';

    protected $params = [];

    public function __construct(){
        $url = $this->parseURL();
        //Cek ada kontroler? Ada pakai, gak ada no
        if(file_exists('../app/controllers/' . $url[0] . '.php')){
            $this->controller = $url[0];//Set controller
            unset($url[0]);//Hapus controller dari url
        }

        require_once '../app/controllers/' . $this->controller . '.php';//Require controller
        $this->controller = new $this->controller;//Instansiasi controller
        //Alasannya bukan $url[0] karena setelah di unset $url[1] gak jadi $url[0]
        //Cek ada method? Ada pakai, gak ada no
        if(isset($url[1])){
            if(method_exists($this->controller,$url[1])){
                $this->method = $url[1];//Set method
                unset($url[1]);//Hapus method dari url
            }
        }
        //Params
        if(!empty($url)){
            $this->params = array_values($url);//Set params
        }
        
        //RUN!
        call_user_func_array([$this->controller,$this->method],$this->params); //Run Method with array as parameter
        
    }

    public function parseURL(){
        if(isset($_GET['url'])){
            $url =  rtrim($_GET['url'],'/');//Ilangin / di akhir url
            $url = filter_var($url, FILTER_SANITIZE_URL);//Ilangin karakter2 aneh
            $url = explode('/',$url);//Pisahin url berdasarkan /
            return $url;
        }
    }
}