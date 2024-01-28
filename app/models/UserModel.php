<?php

class UserModel {

    private $db;

    public function __construct() {
        // Initialize the database connection
        // Modify the connection parameters based on your database configuration
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

    public function isValidUser($username, $password) {
        // Query to check if the username and password match in the database
        $query = "SELECT * FROM users WHERE username = :username AND password = :password";
        $stmt = $this->db->prepare($query);
        
        // Assuming you're storing passwords securely (hashed), adjust this accordingly
        $hashedPassword = md5($password);

        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $hashedPassword);

        try {
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC) !== false;
        } catch (PDOException $e) {
            die("Error checking user: " . $e->getMessage());
        }
    }
}
