<?php

class AuthController extends Controller
{
    protected $data = [];

    public function index()
    {
        $this->view('login', $this->data);
    }

    public function login(){
        $userModel = $this->model('User');

        if (!isset($_SESSION['isLogged'])) {
            if (isset($_POST['email']) && isset($_POST['password'])) {
                // Checking the user's credentials
                $email = $_POST["email"];
                $password = $_POST["password"];

                // Validate the username and password (add more validation as needed)
                if ($userModel->isValidUser($email, $password)) {
                    // Authentication successful
                    // You might also set a session variable indicating the user is logged in
                    $_SESSION['user'] = $email;
                    $_SESSION['isLogged'] = true;
                    header("Location: " . BASE_URL . "dashboard");
                    exit();
                } else {
                    // Redirect back to the login page with an error message
                    $this->data['error'] = "Invalid email / password";
                }
            }
            $this->view('login', "Login", $this->data);
        } else {
            header("Location: " . BASE_URL . "dashboard");
        }

    }

    public function signup(){
        if (!isset($_SESSION['isLogged'])) {

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $userModel = $this->model('User');

                // Retrieve data from POST
                $firstname = $_POST['firstname'] ?? '';
                $lastname = $_POST['lastname'] ?? '';
                $username = $_POST['username'] ?? '';
                $email = $_POST['email'] ?? '';
                $password = $_POST['password'] ?? '';
                $confirmPassword = $_POST['confirm-password'] ?? '';
                $sexe = $_POST['sexe'] ?? '';

                if ($password !== $confirmPassword) {
                    $this->data["error"] = "Les mot de passe ne sont pas identiques!";
                } else if (!preg_match("/^[A-Za-z\s]+$/", $firstname) || !preg_match("/^[A-Za-z\s]+$/", $lastname)) {
                    $this->data["error"] = "Le nom et le prénom doit contenir uniquement des lettres";
                } else if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
                    $this->data["error"] = "L'adresse e-mail est incorrecte";
                } else {

                    if ($userModel->insertUser($username, $password, $email, $firstname, $lastname, $sexe)) {
                        $this->data["success"] = "Compte créé avec succès. Vous pouvez maintenant vous connecter.";
                        header("Location: " . BASE_URL . "auth/login");
                    } else {
                        $this->data["error"] = "Cet utilisateur existe déjà";
                    }

                }
                $_SESSION['signup_input'] = compact('firstname', 'lastname', 'username', 'email');

            }

            $this->view('signup', 'Sign Up', $this->data);
        } else {
            header("Location: " . BASE_URL . "dashboard");
        }
    }

    public function reset(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $userModel = $this->model('User');

            $email = $_POST['email'] ?? '';
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                if ($userModel->isEmailFound($email)) {
                    $token = bin2hex(random_bytes(16));
                    $expiryDate = date("Y-m-d H:i:s", strtotime("+1 hour"));
                    $userModel->storeResetToken($email, $token, $expiryDate);
                    $userModel->sendPasswordResetEmail($email, $token);
                    $this->data["success"] = "Un email de réinitialisation a été envoyé à votre adresse.";
                } else {
                    $this->data["error"] = "Cette adresse e-mail n'existe pas.";
                }
            } else {
                $this->data["error"] = "Adresse e-mail invalide.";
            }
        }

        $this->view('forgot', 'Reset password', $this->data);
    }

    public function resetPassword(){
        $userModel = $this->model('User');

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $password = $_POST['password'];
            $confirmPassword = $_POST['confirm-password'];
            $token = $_POST["token"];

            if (!empty($password)) {
                if ($password === $confirmPassword) {
                    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
                    $userModel->updatePassword($token, $hashedPassword);
                    header("Location: login");
                    exit();
                } else {
                    $this->data["error"] = "Le mot de passe et sa confirmation ne correspondent pas";
                }
            } else {
                $this->data["error"] = "Veuillez saisir un mot de passe valide.";
            }
        }

        $this->data["token"] = $token;

    }
}
