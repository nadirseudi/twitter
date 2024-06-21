<?php
session_start();
include_once('../Model/home_model.php');

$model = new Tweet("localhost", "Zozo921506", "tf-rK4a3", "tweeter");
if (!isset($_SESSION['id_user']) || !$model -> getToken($_SESSION['id_user'])) 
{
    header("Location: connexion.html");
    exit();
}

$tweets = $model -> publication();
$id_tweet = $_POST['id'];
$_SESSION['tweets'] = $tweets;
$getImage = $model -> getProfilePicture($_SESSION['id_user']);
$path = "../". $getImage[0]['profile_picture'];
$_SESSION['picture'] = $path;
$countLikes = $model -> countLike($id_tweet);
$response = array();
if (isset($_POST['tweet']))
{
    $tweet = $_POST['tweet'];
    $newTweet = $model -> newTweet($_SESSION['id_user'], $tweet);
    $response['success'] = true;
}

if (isset($_POST['id']) && isset($_POST['response_' . $_POST['id']])) 
{
    $responseId = $_POST['id'];
    $responseContent = $_POST['response_' . $responseId];
    $repondre = $model -> response($_SESSION['id_user'], $responseId, $responseContent);
    if ($repondre) 
    {
        $response['success'] = true;
    } 
    else 
    {
        $response['success'] = false;
        $response['message'] = "Erreur lors de l'insertion de la réponse dans la base de données.";
    }
}

echo json_encode($response);