<?php

require_once('../db.php');

Class Inscription extends DB 
{

    public function insc($username, $at_user_name, $naissance, $private, $campus, $city, $email, $password, $bio) 
    {
        try 
        {
            $sql = "INSERT INTO user (username, at_user_name, profile_picture, bio, banner, mail, password, birthdate, private, creation_time, city, campus)
            VALUES (:username, :at_user_name, 'Image/logo.profil.png', :bio, 'Image/default_banner.png', :email, :password, :naissance, :private ,NOW(), :city ,:campus)";

            $stmt = $this->connect->prepare($sql);
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':at_user_name', $at_user_name);
            $stmt->bindParam(':bio', $bio);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $password);
            $stmt->bindParam(':naissance', $naissance);
            $stmt->bindParam(':private', $private);
            $stmt->bindParam(':city', $city);
            $stmt->bindParam(':campus', $campus);
            return $stmt->execute();
        } 
        catch (PDOException $e) 
        {
            die("Erreur lors de l'inscription : " . $e->getMessage());
        }
    }

    public function getUserByEmail($email)
    {
        try 
        {
            $query = $this -> connect -> prepare("SELECT * FROM user WHERE mail = :mail");
            $query -> bindParam(':mail', $email);
            $query -> execute();
            $user = $query -> fetch(PDO::FETCH_ASSOC);
            return $user;
        } 
        catch (PDOException $e) 
        {
            die("Erreur lors de la recherche d'utilisateur par e-mail : " . $e->getMessage());
        }
    }

    public function getUserByAtSign($at_user_name)
    {
        try 
        {
            $query = $this -> connect -> prepare("SELECT * FROM user WHERE at_user_name = :at_user_name");
            $query -> bindParam(':at_user_name', $at_user_name);
            $query -> execute();
            $user = $query -> fetch(PDO::FETCH_ASSOC);
            return $user;
        } 
        catch (PDOException $e) 
        {
            die("Erreur lors de la recherche d'utilisateur par e-mail : " . $e->getMessage());
        }
    }
}