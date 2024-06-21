<?php
session_start();
$email = $_POST['email'];
$password = $_POST['mot_de_passe'];
$password = hash('ripemd160', $password);
$response = array();
$token = bin2hex(random_bytes(15));
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
{
    $response['success'] = false;
    $response['message'] = "Adresse mail invalide";
}
else 
{
    include_once('../Model/connexion_model.php');
    $model = new Connexion("localhost", "Zozo921506", "tf-rK4a3", "tweeter");
    $user = $model -> Connexion($email, $password);
    if ($user) 
    {
        $id_user = $user[0]['id'];
        $_SESSION['id_user'] = $id_user;
        $model -> deleteToken($id_user);
        $model -> createToken($id_user, $token);
        $response['success'] = true;
    }
    else
    {
        $response['success'] = false;
        $response['message'] = "Identifiants incorrects";
    }
}

echo json_encode($response);
?>