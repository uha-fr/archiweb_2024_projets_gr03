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
    public $nutrition;
    public $nutritionGoals;
    public $nutritionTracked;
    public $nutritionPercentage;
    /****************** */


    public function __construct()
    {
        $this->user = $this->model('User');

        $this->nutrition = $this->model('Nutrition');

        if (!isset($_SESSION['isLogged'])) {
            header("Location: " . BASE_URL . "auth/login");
            exit();
        } elseif (isset($_SESSION['email'])) {
            $this->email = $_SESSION["email"];
            $this->getUserDetails();
            $this->getNutritionGoals();
            $this->getNutritionTracked();
            $this->getNutritionPercentage();
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
        $this->view("users/index", 'Dashboard', ['userDetails' => $this->userDetails,
        'nutritionGoals' => $this->nutritionGoals,
        'nutritionTracked' => $this->nutritionTracked,
        'nutritionPercentage' => $this->nutritionPercentage
        ]);
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

   

    public function Mealplan(){
        $this->view("users/mealPlan", 'Meal plan', ['userDetails' => $this->userDetails]);
    }

    


    /********************Nutritionists**************** */
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

    /************************Nutrition****************** */
    private function getNutritionGoals()
    {
        $goals = $this->nutrition->getUserNutritionalGoals($this->email);
        $this->nutritionGoals = $goals;
    }

    private function getNutritionTracked()
    {
        $tracked = $this->nutrition->getUserNutritionsTracked($this->email);
        $this->nutritionTracked = $tracked;
    }

    private function getNutritionPercentage()
    {
        $goals = $this->nutrition->getUserNutritionalGoals($this->email);
        $tracked = $this->nutrition->getUserNutritionsTracked($this->email);
        $percentage = $this->nutrition->calculatePourcentage($goals, $tracked);
        $this->nutritionPercentage = $percentage;
    }

    public function tracker(){
        $bmi = $this->nutrition->getBMI($this->userDetails['taille'], $this->userDetails['poids'], $this->userDetails['age']);
        $this->view("users/tracker", 'Nutritional tracker', ['userDetails' => $this->userDetails, 'bmi' => $bmi, 
        'nutritionGoals' => $this->nutritionGoals,
        'nutritionTracked' => $this->nutritionTracked,
        'nutritionPercentage' => $this->nutritionPercentage
        ]);
    }

    public function updateGoals(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $caloriesGoal = htmlspecialchars($_POST['calories_goal']);
            $proteinsGoal = htmlspecialchars($_POST['proteins_goal']);
            $lipidsGoal = htmlspecialchars($_POST['lipids_goal']);
            $carbohydratesGoal = htmlspecialchars($_POST['carbohydrates_goal']);
            $fiberGoal = htmlspecialchars($_POST['fiber_goal']);

            if ($this->nutrition->updateNutritionalGoals($this->email, $caloriesGoal, $proteinsGoal, $lipidsGoal, $carbohydratesGoal, $fiberGoal)) {
                header('Location: ' . BASE_URL . 'dashboard');
                exit();
            } else {
                die('Error ! Please try again later.');
            }
        }

        $this->view("users/updateGoals", 'Update goals', ['userDetails' => $this->userDetails, 'nutritionGoals' => $this->nutritionGoals]);
    }

    public function addNutritionalIntake(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $today = date("Y-m-d H:i:s");  
            /*
                $calories = htmlspecialchars($_POST['calories_tracked']);
                $proteins = htmlspecialchars($_POST['proteins_tracked']);
                $lipids = htmlspecialchars($_POST['lipids_tracked']);
                $carbohydrates = htmlspecialchars($_POST['carbohydrates_tracked']);
                $fiber = htmlspecialchars($_POST['fiber_tracked']);
            */
            $result = $this->nutrition->addNutritionalIntake($this->email, $today, 10, 5, 30, 2, 10);

            if ($result) {
                header('Location: ' . BASE_URL . 'dashboard');
                exit();
            } else {
                die('Error ! Please try again later.');
            }
        }
    }
}
