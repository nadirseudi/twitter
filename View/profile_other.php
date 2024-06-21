<?php
include_once("../Controller/profil_other_controller.php");
?>
<!DOCTYPE html>
<html lang = "fr">
<head>
    <meta charset = "UTF-8">
    <meta name = "viewport" content="width=device-width, initial-scale=1.0">
    <script src = "https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src = "../Script/profil_other.js"></script>
    <link href = "../Style/tailwind.css" rel = "stylesheet">
    <title> Profile </title>
</head>
<body class = "bg-black text-white"> 
    <nav class="flex justify-between max-h-20 p-4 border-b">
        <img src = "../Image/previous.png" alt = "Retour en arrière" class = "w-10 h-10 hover:bg-gray-300 invert">
    <div>
        <img class="rounded-full w-10 h-10" src="<?php echo $_SESSION['picture']?>" alt="photo de profil">
    </div>
    <div class="logo">
        <img class="w-10 h-auto invert" src="../Image/logo_twitter.png" alt="logo">
    </div> 
    <div class="parametres">
        <img class="w-10 h-auto invert" src="../Image/logo.parametres.noir.png" alt = "paramètres">
    </div>
    </nav>
    <div class = "flex">
        <div class = "border-r w-1/5 hidden lg:block h-screen">
            <div class = "flex items-center gap-5 hover:border border-gray-300 h-20 right-4 justify-center">
                <a href = "home.php" class = "flex items-center gap-5">
                    <img class="w-10 h-10 invert" src="../Image/logo.maison.png" alt="logo maison">
                    Home
                </a>
            </div>
            <div class="flex items-center gap-5 hover:border border-gray-300 h-20 right-4 justify-center">
                <a href = "recherche.php" class = "flex items-center gap-5">
                    <img class="w-10 h-10 invert" src="../Image/logo.loupe.png" alt="logo loupe">
                    Rechercher
                </a>
            </div>
            <div class="flex items-center gap-5 hover:border border-gray-300 h-20 right-4 justify-center">
                <a href = "profile.php" class = "flex items-center gap-5">
                    <img class="rounded-full w-10 h-10" src="<?php echo $_SESSION['picture']?>" alt="photo de profil">
                    Profil
                </a>
            </div>
            <div class="flex items-center gap-5 hover:border border-gray-300 h-20 right-4 justify-center">
                <a href = "notification.php" class = "flex items-center gap-5">
                    <img class="w-10 h-10 invert" src="../Image/logo.notifications.png" alt="logo notifications">
                    Notifications
                </a>
            </div>
            <div class = "flex items-center gap-5 hover:border border-gray-300 h-20 right-4 justify-center">
                <a href = "message.php" class = "flex items-center gap-5">
                    <img class="w-10 h-10 invert" src="../Image/logo.enveloppe.png" alt="logo message">
                    Messages
                </a>
            </div>
        </div>
        <div class = "w-4/5">
            <div class = "flex ml-6 mt-20 justify-between">
                <img src = "<?php echo $pic?>" alt = "logo de <?php echo $at_username?>" class = "w-24 h-24 rounded-full">
                <button type = "button" name = "abonner" id = "abonner" class = "border-blue-600 rounded-full border pr-2 pl-2 m-10 text-blue-600"> S'abonner </button>
            </div>
            <div class = "text-white mt-8 ml-6 mb-8">
                <h1> <?php echo $username?> </h1>
                <p class = "text-zinc-500"> <?php echo $at_username?> </p>
                <p class = "text-zinc-300"> <?php echo $bio?> </p>
                <p class = "text-zinc-500"> <?php echo $city?> </p>
                <p class = "text-zinc-500"> <?php echo $create?> </p>
                <a href = "followers_following_other.php?id=<?php echo $user_id?>" class = "text-white my-5"> Abonnements : <?php echo $followings?> &emsp; Abonnés : <?php echo $followers?> </a>
            </div>
            <div class = "flex justify-evenly mb-5">
                <button type = "button" name = "post" class = "focus:border-b-4 border-blue-500 invert-0" id = "post"> Post </button>    
                <button type = "button" name = "reponse" class = "focus:border-b-4 border-blue-500 invert-0" id = "reponse"> Réponse </button>
                <button type = "button" name = "media" class = "focus:border-b-4 border-blue-500 invert-0" id = "media"> Médias </button>
                <button type = "button" name = "like" class = "focus:border-b-4 border-blue-500 invert-0" id = "like"> J'aime </button>
            </div>
        </div>
    </div>
    <footer class="flex justify-between max-h-20 p-4 lg:hidden">
        <div class = "hover:border border-gray-300">
            <a href = "home.php">
                <img class="invert w-10 h-auto hover:bg-gray-300 lg:hidden sm:block" src="../Image/logo.maison.png" alt="logo maison">
            </a>
        </div>
        <div class = "hover:border border-gray-300">
            <a href = "recherche.php">
                <img class="invert w-10 h-auto hover:bg-gray-300 lg:hidden sm:block" src="../Image/logo.loupe.png" alt="logo loupe">
            </a>
        </div>
        <div class = "hover:border border-gray-300">
            <a href = "profile.php">
            <img class = "w-10 h-10 hover:bg-gray-300 lg:hidden sm:block rounded-full" src = "<?php echo $_SESSION['picture']?>" alt = "logo profil">
            </a>
        </div>
        <div class = "hover:border border-gray-300">
            <a href = "notification.php">
                <img class="invert w-10 h-auto hover:bg-gray-300 lg:hidden sm:block" src="../Image/logo.notifications.png" alt="logo notifications">
            </a>
        </div>
        <div class = "hover:border border-gray-300">
            <a href = "message.php">
                <img class="invert w-10 h-auto hover:bg-gray-300 lg:hidden sm:block" src="../Image/logo.enveloppe.png" alt="logo message">
            </a>
        </div>
    </footer>
</body>
</html>