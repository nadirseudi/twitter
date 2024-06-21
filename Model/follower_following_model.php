<?php

require_once('home_model.php');
class followerFollowing extends Tweet
{
    public function showFollower($id_user)
    {
        $query = $this -> connect -> prepare("SELECT * FROM follow 
        INNER JOIN user ON follow.id_follow = user.id 
        WHERE follow.id_user = ? ORDER BY at_user_name");
        $query -> execute([$id_user]);
        return $query -> fetchAll();
    }

    public function showFollowing($id_user)
    {
        $query = $this -> connect -> prepare("SELECT * FROM follow 
        INNER JOIN user ON follow.id_user = user.id 
        WHERE follow.id_follow = ? ORDER BY at_user_name");
        $query -> execute([$id_user]);
        return $query -> fetchAll();
    }
}