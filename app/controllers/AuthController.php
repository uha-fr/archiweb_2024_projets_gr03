<?php

class AuthController extends Controller {
    protected $data = [];

    function index(){
        $this->view('login', $this->data);
    }


    function login(){
        $userModel = $this->model('User');

        if(isset($_POST['email']) && isset($_POST['password'])){
            // Checking the user's credentials
            $username = $_POST["email"];
            $password = $_POST["password"];

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
                $this->data['error'] = "Invalid username / password";            
            }
        }
        $this->view('login',"Login", $this->data);

    }



    function signup(){
        // Check if the form has been submitted
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $userModel = $this->model('User');

            // Retrieve data from POST
            $username = $_POST['username'] ?? '';
            $password = $_POST['password'] ?? '';
            $email = $_POST['email'] ?? '';
            $firstname = $_POST['firstname'] ?? '';
            $lastname = $_POST['lastname'] ?? '';

            // You might want to add additional validation for the data

            // Insert data into the users table
            $userModel->insertUser($username, $password, $email, $firstname, $lastname);
        }

        // Render the signup view
        $this->view('signup', 'Sign Up', $this->data);
    }
}
