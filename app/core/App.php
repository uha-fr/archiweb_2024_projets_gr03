<?php

class App{

    protected $controller = "HomeController"; 
    protected $method = "index"; 
    protected $params= [];

    public function __construct() {
        $url = $this->parseUrl();
        //for the controller
        unset($url[0]);
        if(isset($url[1])){
            $contollerName = ucfirst($url[1])."Controller";
            if(file_exists("../app/controllers/".$contollerName.".php")){
                $this->controller = $contollerName;
                unset($url[1]);
            }else{
                $this->notfound();
            }
        }
        require_once("../app/controllers/". $this->controller .".php");

        //For the methods
        if(isset($url[2])){
            if(method_exists($this->controller, $url[2])){
                $this->method = $url[2];
                unset($url[2]);
            }else{
                $this->notfound();
            }
        }

        //For the params
        $this->params = $url ? array_values($url) : [];
        call_user_func_array([new $this->controller, $this->method], $this->params);



    }

    public function parseUrl(){
        if (isset($_GET['url'])) {
            return explode("/", filter_var(rtrim($_GET['url'],'/'), FILTER_SANITIZE_URL));
            
        }
    }

    public function notfound(){
        $this->method= "notfound";
    }
}