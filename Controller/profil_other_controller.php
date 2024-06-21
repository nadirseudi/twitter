<?php
session_start();
include_once('../Model/profil_model.php');

$model = new Account("localhost", "Zozo921506", "tf-rK4a3", "tweeter");
if (!isset($_SESSION['id_user']) || !$model -> getToken($_SESSION['id_user'])) 
{
    header("Location: connexion.html");
    exit();
}

$response = array();
$user_id = isset($_GET['id']) ? $_GET['id'] : null;
$followers = $model -> countFollowers($user_id);
$followings = $model -> countFollowings($user_id);
$info = $model -> userInfo($user_id);
$username = $info[0]['username'];
$at_username = $info[0]['at_user_name'];
$pic = "../".$info[0]['profile_picture'];
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

if ($_POST['abonner'])
{
    $model -> addFollower($user_id, $_SESSION['id_user']);
    $response['success'] = true;
}