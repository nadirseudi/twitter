<?php

require_once('../db.php');

Class Connexion extends DB 
{
    public function Connexion($email, $password) 
    {
        $SQL = "SELECT * FROM user WHERE mail = ? AND password = ?";
        $execute = $this -> connect -> prepare($SQL);
        $execute -> execute([$email, $password]);
        return $execute -> fetchAll();
    }

    public function createToken($id_user, $token)
    {
        $query = $this -> connect -> prepare("INSERT INTO token (id_user, token, now) 
        VALUES (?, ?, NOW())");
        $query -> execute([$id_user, $token]);
    }

    public function deleteToken($id_user)
    {
        $query = $this -> connect -> prepare("DELETE FROM token WHERE id_user = ?");
        $query -> execute([$id_user]);
    }
}