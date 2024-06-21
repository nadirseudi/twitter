<?php
session_start();
include_once('../Model/recherche_model.php');

$model = new Search("localhost", "Zozo921506", "tf-rK4a3", "tweeter");
if (!isset($_SESSION['id_user']) || !$model -> getToken($_SESSION['id_user'])) 
{
    header("Location: connexion.html");
    exit();
}

$search = isset($_POST['search']) ? $_POST['search'] : '';
$users = $model -> search($search, $_SESSION['id_user']);

$response = array();
if (empty($search)) 
{
    $response['success'] = false;
} 
else 
{
    $response['success'] = true;
    $response['users'] = $users;
}
echo json_encode($response);