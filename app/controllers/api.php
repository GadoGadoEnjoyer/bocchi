<?php

class api extends Controller{
    public function character($id = NULL){
        $data = $this->model('CharacterModel')->read($id);
        $jsonData = json_encode($data);
        header('Content-Type: application/json');
        echo $jsonData;
    }
}

?>