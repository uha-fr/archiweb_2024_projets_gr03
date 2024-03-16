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

    private function getNutritionsTrackedByDate($email, $date){
        $query = "SELECT * FROM nutritiontracking AS nt
        INNER JOIN users AS u ON nt.id_user = u.id
        WHERE u.email=? AND DATE(nt.date_tracked)=?";
       $stmt = $this->db->prepare($query);
       $stmt->bindParam(1, $email);
       $stmt->bindParam(2, $date);

       if ($stmt->execute()) {
        return $stmt->fetch(PDO::FETCH_ASSOC);
        } else {
            die("Error: " . implode(", ", $stmt->errorInfo()));
        }
    }

    public function getTodaysUserNutritionsTracked($email){
        $today = date("Y-m-d");
        $nutritionTracked = $this->getNutritionsTrackedByDate($email, $today);

        if (!$nutritionTracked) {
                $query = "INSERT INTO nutritiontracking (id_user, date_tracked, calories_tracked, proteins_tracked, lipids_tracked, carbohydrates_tracked, fiber_tracked) 
                VALUES ((SELECT id FROM users WHERE email=?), ?, 0, 0, 0, 0, 0)";
                $stmt = $this->db->prepare($query);
                $stmt->bindParam(1, $email);
                $stmt->bindParam(2, $today);
                if ($stmt->execute()) {
                    $nutritionTracked = $this->getNutritionsTrackedByDate($email, $today);
                } else {
                    die("Error: " . implode(", ", $stmt->errorInfo()));
                }
        }
        
        return $nutritionTracked;
    }


    public function getBMI($height, $weight, $age){
            $heightMeters = $height / 100;
            $bmi = $weight/ ($heightMeters ** 2);
            $bmi = round($bmi, 1);
            return $bmi;
    }

    public function calculatePourcentage($goals, $tracked){
        $caloriesPercentage = $proteinPercentage = $lipidsPercentage = $carbohydratesPercentage = $fiberPercentage = 0;
    
        if (!empty($goals)) {
            $caloriesGoal = max($goals['calories_goal'], 1);
            $proteinsGoal = max($goals['proteins_goal'], 1);
            $lipidsGoal = max($goals['lipids_goal'], 1);
            $carbohydratesGoal = max($goals['carbohydrates_goal'], 1);
            $fiberGoal = max($goals['fiber_goal'], 1);
    
            if ($caloriesGoal != 0) {
                $caloriesPercentage = ($tracked['calories_tracked'] / $caloriesGoal) * 100;
            }
            if ($proteinsGoal != 0) {
                $proteinPercentage = ($tracked['proteins_tracked'] / $proteinsGoal) * 100;
            }
            if ($lipidsGoal != 0) {
                $lipidsPercentage = ($tracked['lipids_tracked'] / $lipidsGoal) * 100;
            }
            if ($carbohydratesGoal != 0) {
                $carbohydratesPercentage = ($tracked['carbohydrates_tracked'] / $carbohydratesGoal) * 100;
            }
            if ($fiberGoal != 0) {
                $fiberPercentage = ($tracked['fiber_tracked'] / $fiberGoal) * 100;
            }
        }
    
        return [
            'calories' => $caloriesPercentage,
            'proteins' => $proteinPercentage,
            'lipids' => $lipidsPercentage,
            'carbohydrates' => $carbohydratesPercentage,
            'fiber' => $fiberPercentage,
        ];
    }
    
    

    public function updateNutritionalGoals($email, $caloriesGoal, $proteinsGoal, $lipidsGoal, $carbohydratesGoal, $fiberGoal){
        $existingGoals = $this->getUserNutritionalGoals($email);
        $id = $this->getUserBioInfo($email);

        if ($existingGoals) {
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

    public function addNutritionalIntake($email, $today, $calories, $proteins, $lipids, $carbohydrates, $fiber){
        $id = $this->getUserBioInfo($email);
        $query = "UPDATE nutritiontracking SET calories_tracked=calories_tracked+?, proteins_tracked=proteins_tracked+?, lipids_tracked=lipids_tracked+?, carbohydrates_tracked=carbohydrates_tracked+?, fiber_tracked=fiber_tracked+? 
                  WHERE id_user=?";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(1, $calories);
        $stmt->bindParam(2, $proteins);
        $stmt->bindParam(3, $lipids);
        $stmt->bindParam(4, $carbohydrates);
        $stmt->bindParam(5, $fiber);
        $stmt->bindParam(6, $id['id']); 

        return $stmt->execute();
    }
    
}