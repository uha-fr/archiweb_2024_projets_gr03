<?php

class NutritionistModel extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getNutritionistInfo($email)
    {
        $query = "SELECT * FROM nutritionists WHERE email=?";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(1, $email);
        if ($stmt->execute()) {
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } else {
            die("Error: " . implode(", ", $stmt->errorInfo()));
        }
    }

    public function isValidNutritionist($email, $password)
    {
        $query = "SELECT * FROM users WHERE email = :email";
        $stmt = $this->db->prepare($query);

        $stmt->bindParam(':email', $email);

        try {
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($user !== false) {
                if (password_verify($password, $user['password'])) {
                    return true;
                } else {
                    return false;
                }
            }

            return false; // Either user not found or password is incorrect
        } catch (PDOException $e) {
            die("Error checking user: " . $e->getMessage());
        }
    }
    public function isEmailFound($email)
    {
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
    public function isTokenValid($token)
    {
        $currentDate = date("Y-m-d H:i:s");

        $query = "SELECT * FROM reset_password WHERE token = ? AND expiry_date > ?";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$token, $currentDate]);

        return $stmt->rowCount() > 0;
    }

    public function isUsernameFound($username)
    {
        $query = "SELECT * FROM users WHERE username = :username";
        $stmt = $this->db->prepare($query);

        $stmt->bindParam(':username', $username);
        try {
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC) !== false;
        } catch (PDOException $e) {
            die("Error checking nutrisionist: " . $e->getMessage());
        }
    }
    public function insertNutritionist($email, $password, $firstname, $lastname, $qualifications)
    {
        if (!$this->isEmailFound($email)) {

            $query = 'INSERT INTO nutritionists (email, password, firstname, lastname, qualifications) VALUES (:email, :password, :firstname, :lastname, :qualifications)';
            $stmt = $this->db->prepare($query);

            $stmt->bindValue(':email', $email);
            $stmt->bindValue(':password', password_hash($password, PASSWORD_DEFAULT));
            $stmt->bindParam(':firstname', $firstname);
            $stmt->bindParam(':lastname', $lastname);
            $stmt->bindParam(':qualifications', $qualifications);

            try {
                return $stmt->execute();
            } catch (PDOException $e) {
                return false;
            }
        } else {
            return false;
        }
    }

    public function getallusers (){

        $query = 'SELECT * FROM users';
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        try {
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die("Error checking user: " . $e->getMessage());
        }

    }
     public function deleteNutritionist($id){
        $query = "DELETE FROM nutritionist WHERE id_user = :id";
        $stmt = $this->db->prepare($query);

        $stmt->bindParam(':id', $id);
        try {
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC) !== false;
        } catch (PDOException $e) {
            die("Error checking user: " . $e->getMessage());
        }

     }

    

}
