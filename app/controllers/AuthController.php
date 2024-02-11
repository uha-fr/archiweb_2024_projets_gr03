<?php

class AuthController extends Controller
{
    protected $data = [];
    protected $userModel;

    public function __construct()
    {
        if(isset($_SESSION['isLogged'])) {
            header("Location: " . BASE_URL . "dashboard");
        }
        $this->userModel = $this->model('User');
    }

    public function index()
    {
        header("Location: " . BASE_URL . "auth/login");
    }

    public function login()
    {

        if (isset($_POST['email']) && isset($_POST['password'])) {
            // Checking the user's credentials
            $email = $_POST["email"];
            $password = $_POST["password"];

            // Validate the username and password (add more validation as needed)
            if ($this->userModel->isValidUser($email, $password)) {
                // Authentication successful
                $_SESSION['email'] = $email;
                $_SESSION['isLogged'] = true;
                header("Location: " . BASE_URL . "dashboard");
                exit();
            } else {
                // Redirect back to the login page with an error message
                $this->data['error'] = "Invalid email / password";
            }
        }
        $this->view('login', "Login", $this->data);

    }

    public function signup(){

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {

                // Retrieve data from POST
                $firstname = $_POST['firstname'] ?? '';
                $lastname = $_POST['lastname'] ?? '';
                $username = $_POST['username'] ?? '';
                $email = $_POST['email'] ?? '';
                $password = $_POST['password'] ?? '';
                $confirmPassword = $_POST['confirm-password'] ?? '';
                $sexe = $_POST['sexe'] ?? '';
                $age = $_POST['age'] ?? '';
                $poids = $_POST['poids'] ?? '';
                $taille = $_POST['taille'] ?? '';
               // $profileImg;

                /***********Image************ */
                if ($_FILES['profile-image']['error'] != 4 || ($_FILES['profile-image']['size'] != 0 && $_FILES['profile-image']['error'] != 0)) {

                
                    $bytes = random_bytes(20);
                    $profileImg = bin2hex($bytes);

                    // Append the token to the filename
                    $imageFileType = strtolower(pathinfo($_FILES["profile-image"]["name"], PATHINFO_EXTENSION));
                    $targetFile = IMG_DIRECTORY . '/profile/' . $profileImg . '.' . $imageFileType;

                    $uploadOk = 1;
                    // Check if image file is a actual image or fake image
                    $check = getimagesize($_FILES["profile-image"]["tmp_name"]);
                    if ($check !== false) {
                        $uploadOk = 1;
                    } else {
                        $this->data["error"] = "Le fichier n'est pas une image.";
                        die("Le fichier n'est pas une image");
                        $uploadOk = 0;
                    }

                    // Allow certain file formats
                    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
                        $this->data["error"] = "Seuls les fichiers JPG, JPEG, PNG & GIF sont autorisés.";
                        $uploadOk = 0;
                    }

                    if ($uploadOk == 0) {
                        $this->data["error"] = "Votre fichier n'a pas été téléchargé.";
                        die("Votre fichier n'a pas été téléchargé.");
                    } else {
                        // If everything is ok, try to upload file
                        if (move_uploaded_file($_FILES["profile-image"]["tmp_name"], $targetFile)) {
                            $this->data["success"] = "L'image " . htmlspecialchars(basename($_FILES["profile-image"]["name"])) . " a été téléchargée avec succès.";
                            $profileImg = $profileImg .'.'. $imageFileType;
                        } else {
                            $this->data["error"] = "Une erreur s'est produite lors du téléchargement de votre fichier.";
                            die("Une erreur s'est produite lors du téléchargement de votre fichier.");
                        }
                    }
                }else{
                    $profileImg = $sexe == "homme" ? "man-avatar.png" : "woman-avatar.png";
                }
                /***********Image************ */
                if ($password !== $confirmPassword) {
                    $this->data["error"] = "Les mot de passe ne sont pas identiques!";
                } else if (!preg_match("/^[A-Za-z\s]+$/", $firstname) || !preg_match("/^[A-Za-z\s]+$/", $lastname)) {
                    $this->data["error"] = "Le nom et le prénom doivent contenir uniquement des lettres";
                } else if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
                    $this->data["error"] = "L'adresse e-mail est incorrecte";
                } else {

                    if ($this->userModel->insertUser($username, $password, $email, $firstname, $lastname, $profileImg, $sexe, $age ,$taille, $poids )) {
                        $this->data["success"] = "Compte créé avec succès. Vous pouvez maintenant vous connecter.";
                        header("Location: " . BASE_URL . "auth/login");
                    } else {
                        $this->data["error"] = "Cet utilisateur existe déjà";
                    }

                }
                $_SESSION['signup_input'] = compact('firstname', 'lastname', 'username', 'email', 'sexe', 'age' ,'poids' , 'taille');

            }

            $this->view('signup', 'Sign Up', $this->data);
        
    }

    public function reset()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $email = $_POST['email'] ?? '';
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                if ($this->userModel->isEmailFound($email)) {
                    $token = bin2hex(random_bytes(16));
                    $expiryDate = date("Y-m-d H:i:s", strtotime("+1 hour"));
                    $this->userModel->storeResetToken($email, $token, $expiryDate);
                    $this->userModel->sendPasswordResetEmail($email, $token);
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

    public function resetPassword()
    {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $password = $_POST['password'];
            $confirmPassword = $_POST['confirm-password'];
            $token = $_POST["token"];

            if (!empty($password)) {
                if ($password === $confirmPassword) {
                    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
                    $this->userModel->updatePassword($token, $hashedPassword);
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
