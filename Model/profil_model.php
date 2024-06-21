<?php

require_once('home_model.php');
class Account extends Tweet
{
    public function logOut($id_user)
    {
        $query = $this -> connect -> prepare("DELETE FROM token WHERE id_user = ?");
        $query -> execute([$id_user]);
    }

    public function changePassword($password, $id_user)
    {
        $query = $this -> connect -> prepare("UPDATE user SET password = ? WHERE id = ?");
        $query -> execute([$password, $id_user]);
        return $query -> fetchAll();
    }

    public function changeAtUsername($at_username, $id_user)
    {
        $query = $this -> connect -> prepare("UPDATE user SET at_user_name = ? WHERE id = ?");
        $query -> execute([$at_username, $id_user]);
        return $query -> fetchAll();
    }

    public function changeUsername($username, $id_user)
    {
        $query = $this -> connect -> prepare("UPDATE user SET username = ? WHERE id = ?");
        $query -> execute([$username, $id_user]);
        return $query -> fetchAll();
    }

    public function changePicture($picture, $id_user)
    {
        $query = $this -> connect -> prepare("UPDATE user SET profile_picture = ? WHERE id = ?");
        $query -> execute([$picture, $id_user]);
        return $query -> fetchAll();
    }

    public function changeBanner($banner, $id_user)
    {
        $query = $this -> connect -> prepare("UPDATE user SET banner = ? WHERE id = ?");
        $query -> execute([$banner, $id_user]);
        return $query -> fetchAll();
    }

    public function countFollowers($id_user)
    {
        $query = $this -> connect -> prepare("SELECT COUNT(*) FROM follow 
        INNER JOIN user ON follow.id_follow = user.id 
        WHERE follow.id_user = ? GROUP BY id_user");
        $query -> execute([$id_user]);
        return $query -> fetchColumn();
    }

    public function countFollowings($id_user)
    {
        $query = $this -> connect -> prepare("SELECT COUNT(*) FROM follow 
        INNER JOIN user ON follow.id_user = user.id 
        WHERE follow.id_follow = ? GROUP BY id_follow");
        $query -> execute([$id_user]);
        return $query -> fetchColumn();
    }

    public function addFollower($id_user, $id_follow)
    {
        $query = $this -> connect -> prepare("INSERT INTO follow(id_user, id_follow, time) VALUES(?, ?, NOW())");
        $query -> execute([$id_user, $id_follow]);
    }

    public function userInfo($id_user)
    {
        $query = $this -> connect -> prepare("SELECT * FROM user WHERE id = ?");
        $query -> execute([$id_user]);
        return $query -> fetchAll();
    }
}