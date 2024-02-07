<?php

final class HomeController extends Controller{
    
    function index(){
        $this->view("index","Welcome to our website | Manger");
    }
    public function notfound(){
        $this->view("404");
    }
    
}
