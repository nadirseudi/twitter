<?php
$username = $_POST['username'];
$at_user_name = '@'. $_POST['at_user_name'];
$naissance = $_POST['date_naissance'];
$campus = $_POST['campus'];
$city = $_POST['ville'];
$email = $_POST['email'];
$password = $_POST['mot_de_passe'];
$password = hash('ripemd160', $password);
$bio = $_POST['bio'];
$private = $_POST['private'];

$response = array();
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
{
    $response['success'] = false;
    $response['message'] = "Adresse mail invalide";
}
else 
{
    include_once('../Model/inscription_model.php');
    $model = new Inscription("localhost", "Zozo921506", "tf-rK4a3", "tweeter");
    $existingMail = $model -> getUserByEmail($email);
    $existingAtSign = $model -> getUserByAtSign($at_user_name);
    if ($existingMail) 
    {
        $response['success'] = false;
        $response['message'] = "Cette adresse e-mail est déjà utilisée. Veuillez en choisir une autre.";
    }
    elseif ($existingAtSign)
    {
        $response['success'] = false;
        $response['message'] = "Cette arobase est déjà utilisé. Veuillez en choisir un autre.";
    } 
    else 
    {
        try 
        {
            $model -> insc($username, $at_user_name, $naissance, $private, $campus, $city, $email, $password, $bio);
            $response['success'] = true;
            $response['message'] = "Inscription réussie";
        } 
        catch (PDOException $e) 
        {
            $response['success'] = false;
            $response['message'] = "Erreur lors de l'inscription dans la base de données : " . $e->getMessage();
        }
    }
}

echo json_encode($response);