<?php

class DashboardController extends Controller
{
    public $user;
    public $userDetails;
    public $email;
    
    /****************** */
    public $nutritionist;
    public $nutritionistDetails;
    public $emailNutrisionist;
    /****************** */


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
      
        /*$this->nutritionist = $this->model('Nutritionist');

        if (!isset($_SESSION['isLogged'])) {
            header("Location: " . BASE_URL . "auth/login");
            exit();
        } elseif (isset($_SESSION['email'])) {
            $this->emailNutrisionist = $_SESSION["email"];
            $this->getNutritionistDetails();
        }*/
        
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

    public function product(){
    
        $this->view("infos/product",'this is product');
    }

    public function recipe(){
        $this->view("users/recipe",'this is recipe', ['userDetails' => $this->userDetails]);
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

    public function recipes(){
        $this->view("users/recipes", 'Recette', ['userDetails' => $this->userDetails]);
    }

    public function tracker(){
        $this->view("users/tracker", 'Tracker', ['userDetails' => $this->userDetails]);
    }

    public function Mealplan(){
        $this->view("users/mealPlan", 'Meal plan', ['userDetails' => $this->userDetails]);
    }


    /********************Nutriti**************** */
    public function nutritionnists(){
        $this->view("users/nutritionnists", 'Nutritionniste', ['userDetails' => $this->userDetails]);
    }

    private function getNutritionistDetails()
    {
        $nutritionistInfo = $this->user->getNutritionistInfo($this->emailNutrisionist);
        $this->nutritionistDetails = $nutritionistInfo[0];
    }

    public function indexNutrisionists()
    {

        $this->getNutritionistDetails();
        $this->view("nutrisionists/index", 'Dashboard', ['nutritionistDetails' => $this->nutritionistDetails]);
    
    }

    public function updateNutritionistProfile()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            
        }

        // Afficher la vue pour la mise à jour du profil du nutritionniste
    }

    // Méthode pour gérer les plans alimentaires des utilisateurs
    public function manageMealPlans()
    {
        // Récupérer et traiter les plans alimentaires
        
        // Afficher la vue pour la gestion des plans alimentaires
    }

    
    public function viewNutritionalInformation()
    {
        // Récupérer et afficher les informations nutritionnelles
        
    }

    
    public function manageAppointments()
    {
        // Gérer les rendez-vous entre nutritionnistes et utilisateurs
        
    }

}
