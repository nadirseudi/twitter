<?php
session_start();
include_once('../Model/follower_following_model.php');

$model = new followerFollowing("localhost", "Zozo921506", "tf-rK4a3", "tweeter");
if (!isset($_SESSION['id_user']) || !$model -> getToken($_SESSION['id_user'])) 
{
    header("Location: connexion.html");
    exit();
}

$followers = $model -> showFollower($_SESSION['id_user']);
$followings = $model -> showFollowing($_SESSION['id_user']);

include_once('../View/follower_following.php');
?>