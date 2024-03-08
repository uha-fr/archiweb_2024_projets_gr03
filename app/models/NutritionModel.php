<?php

class NutritionModel extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getUserBioInfo($email){
        $query = "SELECT id, age, poids, sexe, taille FROM users WHERE email=?";
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

    public function calculatePourcentage($goals, $tracked){
        if(!empty($goals)){
            $caloriesPercentage = ($tracked['calories_tracked'] / $goals['calories_goal']) * 100;
            $proteinPercentage = ($tracked['proteins_tracked'] / $goals['proteins_goal']) * 100;
            $carbsPercentage = ($tracked['lipids_tracked'] / $goals['lipids_goal']) * 100;
            $fatPercentage = ($tracked['carbohydrates_tracked'] / $goals['carbohydrates_goal']) * 100;
            $fiberPercentage = ($tracked['fiber_tracked'] / $goals['fiber_goal']) * 100;
        
            return [
                'calories' => $caloriesPercentage,
                'proteins' => $proteinPercentage,
                'lipids' => $carbsPercentage,
                'carbohydrates' => $fatPercentage,
                'fiber' => $fiberPercentage,
            ];
        }else{
            return [];
        }
    }

    public function updateNutritionalGoals($email, $caloriesGoal, $proteinsGoal, $lipidsGoal, $carbohydratesGoal, $fiberGoal){
        $existingGoals = $this->getUserNutritionalGoals($email);
        $id = $this->getUserBioInfo($email);

        if ($existingGoals) {
            // Goals exist, perform update
            $query = "UPDATE nutritionalgoals SET calories_goal=?, proteins_goal=?, lipids_goal=?, carbohydrates_goal=?, fiber_goal=? WHERE id_user=?";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(1, $caloriesGoal);
            $stmt->bindParam(2, $proteinsGoal);
            $stmt->bindParam(3, $lipidsGoal);
            $stmt->bindParam(4, $carbohydratesGoal);
            $stmt->bindParam(5, $fiberGoal);
            $stmt->bindParam(6, $id['id']); 

            return $stmt->execute();
        } else {
            // Goals don't exist, perform insert
            $query = "INSERT INTO nutritionalgoals (id_user, calories_goal, proteins_goal, lipids_goal, carbohydrates_goal, fiber_goal) VALUES (?, ?, ?, ?, ?, ?)";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(1, $id['id']);
            $stmt->bindParam(2, $caloriesGoal);
            $stmt->bindParam(3, $proteinsGoal);
            $stmt->bindParam(4, $lipidsGoal);
            $stmt->bindParam(5, $carbohydratesGoal);
            $stmt->bindParam(6, $fiberGoal);

            return $stmt->execute();
        }
    }
    
}