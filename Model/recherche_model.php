<?php

require_once('home_model.php');
class Search extends Tweet
{
    public function search($search, $id_user)
    {
        $query = $this -> connect -> prepare("SELECT * FROM user 
        WHERE (at_user_name LIKE ? OR username LIKE ?) AND NOT id = ? ORDER BY at_user_name");
        $query -> execute(["%$search%", "%$search%", $id_user]);
        return $query->fetchAll();
    }
}