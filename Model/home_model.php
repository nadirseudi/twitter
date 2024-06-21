<?php

require_once('../db.php');
class Tweet extends DB
{
    public function newTweet($id_user, $content)
    {
        $query = $this -> connect -> prepare("INSERT INTO tweet(id_user, time, content) 
        VALUES(?, NOW(), ?)");
        $query -> execute([$id_user, $content]);
        $query -> fetchAll();
    }

    public function deleteTweet($id_user, $content)
    {
        $query = $this -> connect -> prepare("DELETE FROM tweet WHERE id_user = ? AND content = ?");
        $query -> execute([$id_user, $content]);
    }

    public function response($id_user, $id_tweet, $content)
    {
        $query = $this -> connect -> prepare("INSERT INTO tweet(id_user, id_response, time, content)
        VALUES(?, ?, NOW(), ?");
        $query -> execute([$id_user, $id_tweet, $content]);
        $query -> fetchAll();
    }

    public function quoted($id_user, $content, $id_quote)
    {
        $query = $this -> connect -> prepare("INSERT INTO tweet(id_user, time, content, id_quoted_tweet)
        VALUES(?, NOW(), ?, ?");
        $query -> execute([$id_user, $content, $id_quote]);
    }

    public function getToken($id_user)
    {
        $query = $this -> connect -> prepare("SELECT * FROM token
        INNER JOIN user on token.id_user = user.id
        WHERE id_user = ?");
        $query -> execute([$id_user]);
        return $query -> fetchAll();
    }

    public function getProfilePicture($id_user)
    {
        $query = $this -> connect -> prepare("SELECT profile_picture FROM user WHERE id = ?");
        $query -> execute([$id_user]);
        return $query -> fetchAll();
    }

    public function publication() 
    {
        $query = $this-> connect -> prepare("SELECT username, at_user_name, profile_picture, content, time, tweet.id FROM user 
        INNER JOIN tweet ON user.id = tweet.id_user ORDER BY time DESC");
        $query -> execute();
        return $query -> fetchAll();
    }

    public function countLike($id_tweet)
    {
        $query = $this -> connect -> prepare("SELECT COUNT(*) FROM likes INNER JOIN tweet ON likes.id_tweet = tweet.id
        WHERE id_tweet = ? GROUP BY id_tweet");
        $query -> execute([$id_tweet]);
        return $query -> fetchAll();
    }
}