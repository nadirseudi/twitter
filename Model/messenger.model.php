<?php
require_once('home_model.php');

Class Message extends Tweet 
{
    public function AfficheMessages($id_user) 
    {
        $query = $this -> connect -> prepare("SELECT * FROM convo_users 
        INNER JOIN user ON convo_users.id_user = user.id 
        INNER JOIN convo ON convo_users.id_convo = convo.id
        INNER JOIN messages ON convo.id = messages.id_convo
        WHERE convo_users.id_user = ?");
        $query -> execute([$id_user]);
        return $query -> fetchAll();
    }
}