<?php
session_start();
include_once('../Model/profil_model.php');

$model = new Account("localhost", "Zozo921506", "tf-rK4a3", "tweeter");
if (!isset($_SESSION['id_user']) || !$model -> getToken($_SESSION['id_user'])) 
{
    header("Location: connexion.html");
    exit();
}

$followers = $model -> countFollowers($_SESSION['id_user']);
$followings = $model -> countFollowings($_SESSION['id_user']);
$info = $model -> userInfo($_SESSION['id_user']);
$username = $info[0]['username'];
$at_username = $info[0]['at_user_name'];
$_SESSION['at_user_name'] = $at_username;
$city = $info[0]['city'];
$create = $info[0]['creation_time'];
$bio = $info[0]['bio'];
if (empty($followers))
{
    $followers = 0;
}

if (empty($followings))
{
    $followings = 0;
}