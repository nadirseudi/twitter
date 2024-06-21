<?php
session_start();
include_once('../Model/follower_following_model.php');

$model = new followerFollowing("localhost", "Zozo921506", "tf-rK4a3", "tweeter");
if (!isset($_SESSION['id_user']) || !$model -> getToken($_SESSION['id_user'])) 
{
    header("Location: connexion.html");
    exit();
}

$user_id = isset($_GET['id']) ? $_GET['id'] : null;
$followers = $model -> showFollower($user_id);
$followings = $model -> showFollowing($user_id);

include_once('../View/follower_following.php');
?>