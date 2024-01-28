<?php

require_once("../app/init.php");

$app = new App;


// Create a PDO connection
$dsn = 'mysql:host=localhost;dbname=recipe';
$username = 'root';
$password = '';

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}