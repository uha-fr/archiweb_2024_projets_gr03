<?php

class Controller{
    
    public function model($model){
        $modelName = ucfirst($model).'Model';
        require_once '../app/models/' .$modelName.'.php';
        return new $modelName();

    }

    public function view($view , $data = []){
        // Check if the view file exists
        $viewFile = "../app/views/" . $view . ".php";
        if (file_exists($viewFile)) {
            // Extract the data array into individual variables
            extract($data);

            // Include the view file
            require_once $viewFile;
        } else {
            // If the view file doesn't exist, you may want to handle this case accordingly
            die("View file not found: " . $view);
        }
    }
}