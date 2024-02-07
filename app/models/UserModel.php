<?php

class UserModel extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getUserInfo($email)
    {
        $query = "SELECT * FROM users WHERE email=?";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(1, $email);
        if ($stmt->execute()) {
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } else {
            die("Error: " . implode(", ", $stmt->errorInfo()));
        }
    }

    public function isValidUser($email, $password)
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
            die("Error checking user: " . $e->getMessage());
        }
    }

    
    

    public function insertUser($username, $password, $email, $firstname, $lastname, $profileImg, $sexe, $age ,$taille, $poids )
    {
        if (!$this->isUsernameFound($username) && !$this->isEmailFound($email)) {

            $query = 'INSERT INTO users (username, password, email, firstname, lastname, image, sexe, age, taille, poids) VALUES (:username, :password, :email, :firstname, :lastname, :image, :sexe, :age, :taille, :poids)';
            $stmt = $this->db->prepare($query);

            $stmt->bindParam(':username', $username);
            $stmt->bindValue(':password', password_hash($password, PASSWORD_DEFAULT));
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':firstname', $firstname);
            $stmt->bindParam(':lastname', $lastname);
            $stmt->bindParam(':image', $profileImg);
            $stmt->bindParam(':sexe', $sexe);
            $stmt->bindParam(':age', $age);
            $stmt->bindParam(':taille', $taille);
            $stmt->bindParam(':poids', $poids);

            try {
                return $stmt->execute();
            } catch (PDOException $e) {
                return false;
            }
        } else {
            return false;
        }
    }

    public function storeResetToken($email, $token, $expiryDate)
    {
        $query = "INSERT INTO reset_password (user_email, token, expiry_date) VALUES (?, ?, ?)";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$email, $token, $expiryDate]);
    }

    public function updatePassword($token, $password)
    {
        $query = 'UPDATE users SET password = ? WHERE email =
                    ( SELECT user_email FROM reset_password WHERE token = ? )';
        $stmt = $this->db->prepare($query);
        $stmt->execute([$password, $token]);
    }

    public function sendPasswordResetEmail($email, $token)
    {

        $subject = "Password Reset";
        $message = "Click the following link to reset your password: " . BASE_URL . "auth/reset?token=$token";
        mail($email, $subject, $message);
    }

}
