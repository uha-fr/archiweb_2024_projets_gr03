<?php 
session_start();

class Model{


    public $db;

    public function __construct()
    {
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
}