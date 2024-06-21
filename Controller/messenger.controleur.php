<?php
session_start();
include('../Model/messenger.model.php');

$model = new Message("localhost", "Zozo921506", "tf-rK4a3", "tweeter");
if (!isset($_SESSION['id_user']) || !$model -> getToken($_SESSION['id_user'])) 
{
    header("Location: connexion.html");
    exit();
}
// $email = $_POST['email'];
$response = array();
$convs = $model -> AfficheMessages($_SESSION['id_user']);
$response['success'] = true;
json_encode($response);
?>