<?php

class DashboardController extends Controller
{
    public $user;
    public $userDetails;
    public $email;

    public function __construct()
    {
        $this->user = $this->model('User');

        if (!isset($_SESSION['isLogged'])) {
            header("Location: " . BASE_URL . "auth/login");
            exit();
        } elseif (isset($_SESSION['email'])) {
            $this->email = $_SESSION["email"];
            $this->getUserDetails();
        }

        
    }

    private function getUserDetails()
    {
        $userInfo = $this->user->getUserInfo($this->email);
        $this->userDetails = $userInfo[0];
    }

    public function index()
    {

        $this->getUserDetails();
        $this->view("users/index", 'Dashboard', ['userDetails' => $this->userDetails]);

        
    }

    public function updateProfile()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Get the data from the form
            $firstName = htmlspecialchars($_POST['fname']);
            $lastName = htmlspecialchars($_POST['lname']);
            $phoneNumber = htmlspecialchars($_POST['number']);
            $gender = isset($_POST['gender']) ? 1 : 0;
            $dob = date('Y-m-d', strtotime($_POST['date']));

            if ($this->user->update($this->email, $firstName, $lastName, $phoneNumber, $gender, $dob)) {
                // Update successful
                header('Location: ' . BASE_URL . 'users');
                exit();
            } else {
                die('Error updating profile! Please try again later.');
            }
        }

        $this->view('users/editprofile', 'Update Profile', ['userDetails' => $this->userDetails]);
    }

    public function logOut()
    {
        session_destroy();
        header('Location: ' . BASE_URL . 'auth/login');
        exit();
    }
}
