<?php

final class DashboardController extends Controller{
    
    function index(){
        if(!isset($_SESSION['isLogged'])){
            header("Location: " . BASE_URL . "auth/login");
        }else{

            $this->view("dashboard","Dashboard");
        }
    }

    function logOut(){
        session_destroy();
        header('Location: '.BASE_URL.'auth/login');
    }
}
