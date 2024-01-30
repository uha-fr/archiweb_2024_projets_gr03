<?php

class UserModel  {


    private $db;

    public function __construct() {
        // Initialize the database connection
        $dsn = 'mysql:host=localhost;dbname=recipe';
        $username = 'root';
        $password = '';

        try {
            $this->db = new PDO($dsn, $username, $password);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Database connection failed: " . $e->getMessage());
        }
    }

    public function isValidUser($email, $password) {
        // Query to check if the username and password match in the database
        $query = "SELECT * FROM users WHERE email = :email AND password = :password";
        $stmt = $this->db->prepare($query);
        
        // Assuming you're storing passwords securely (hashed), adjust this accordingly
        $hashedPassword = md5($password);

        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $hashedPassword);

        try {
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC) !== false;
        } catch (PDOException $e) {
            die("Error checking user: " . $e->getMessage());
        }
    }

    public function isEmailFound($email){
        $query = "SELECT * FROM users WHERE email = :email";
        $stmt = $this->db->prepare($query);

        $stmt->bindParam(':email', $email);
        try {
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC) !== false;
        } catch (PDOException $e) {
            die("Error checking user: " . $e->getMessage());
        }
    }
    public function isUsernameFound($username){
        $query = "SELECT * FROM users WHERE username = :username";
        $stmt = $this->db->prepare($query);

        $stmt->bindParam(':username', $username);
        try {
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC) !== false;
        } catch (PDOException $e) {
            die("Error checking user: " . $e->getMessage());
        }
    }


    public function insertUser($username, $password, $email, $firstname, $lastname) {
        if(!isUsernameFound($username) && !isEmailFound($email)){
            $db = Database::open_db();
            $db->prepare('INSERT INTO users (username, password, email, firstname, lastname) VALUES (:username, :password, :email, :firstname, :lastname)');
            $db->bindValue(':username', $username);
            $db->bindValue(':password', password_hash($password, PASSWORD_DEFAULT)); // Hash the password
            $db->bindValue(':email', $email);
            $db->bindValue(':firstname', $firstname);
            $db->bindValue(':lastname', $lastname);
            $db->execute();
        }
    }
}
