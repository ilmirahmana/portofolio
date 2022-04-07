<?php 

class Controller{
    public function view($view, $data=[]){
        require_once '../admin/views/'. $view. '.php';
    }
}
