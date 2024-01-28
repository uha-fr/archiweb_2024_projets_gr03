<?php

class LoginController extends Controller 
{
    function index(){
        $this->view('login');
    }

    function authentification(){
        $userModel = $this->model('User');

        $username = "test";
        $password = "test";
        // Validate the username and password (add more validation as needed)
        if ($userModel->isValidUser($username, $password)) {
            // Authentication successful
            // Redirect to a dashboard or home page
            // You might also set a session variable indicating the user is logged in
            header('Location: /dashboard');
            exit();
        } else {
            // Authentication failed
            // Redirect back to the login page with an error message
            $this->view('login', ['error' => 'Invalid username or password']);
        }
    }
}
