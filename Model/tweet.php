<?php

require_once('BDD.class.php');

Class Tweet extends BDD {
    public function publication($pseudo) {
        $SQL_tweet = "SELECT username, at_user_name, profile_picture, content, time FROM user INNER JOIN tweet ON user.id = tweet.id_user WHERE user.username = '$pseudo'";
        
        $prepare = $this->BDD->prepare($SQL_tweet);
        $prepare->execute();

        return $prepare->fetchAll();
    } 
}