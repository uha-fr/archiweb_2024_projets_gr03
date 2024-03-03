<?php

class NutritionModel extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getUserBioInfo($email){
        $query = "SELECT age, poids, sexe, taille FROM users WHERE email=?";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(1, $email);

        if ($stmt->execute()) {
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } else {
            die("Error: " . implode(", ", $stmt->errorInfo()));
        }
    }

    public function getUserNutritionalGoals($email){
        $query = "SELECT * FROM nutritionalgoals AS ng
         INNER JOIN users AS u ON ng.id_user = u.id
         WHERE u.email=?";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(1, $email);

        if ($stmt->execute()) {
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } else {
            die("Error: " . implode(", ", $stmt->errorInfo()));
        }
    }

    public function getUserNutritionsTracked($email){
        $query = "SELECT * FROM nutritiontracking AS nt
         INNER JOIN users AS u ON nt.id_user = u.id
         WHERE u.email=?";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(1, $email);

        if ($stmt->execute()) {
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } else {
            die("Error: " . implode(", ", $stmt->errorInfo()));
        }
    }

    public function getBMI($height, $weight, $age){
            $heightMeters = $height / 100;
            $bmi = $weight/ ($heightMeters ** 2);
            $bmi = round($bmi, 1);
            return $bmi;
    }
    
}