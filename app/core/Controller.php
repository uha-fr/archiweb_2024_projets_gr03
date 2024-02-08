<?php

class Controller{
    
    public function model($model){
        $modelName = ucfirst($model).'Model';
        require_once '../app/models/' .$modelName.'.php';
        return new $modelName();
    }

    public function view($view , $title= "Document",  $data = []){
        // Check if the view file exists
        $viewFile = "../app/views/" . $view . ".php";
        if (file_exists($viewFile)) {
            // Extract the data array into individual variables
            extract($data);

            require_once "../app/includes/header.inc.php";

            require_once $viewFile;
        } else {
            header("Location : 404");
        }
    }

    public function notfound(){
        $this->view("404");
    }
}