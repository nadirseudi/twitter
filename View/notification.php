<?php
include_once("../Controller/notification_controller.php");
?>
<!DOCTYPE html>
<html lang = "fr">
<head>
    <meta charset = "UTF-8">
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
    <link href = "../Style/tailwind.css" rel = "stylesheet">
    <title> Notification </title>
</head>
<body class = "bg-black text-white">
    <nav class="flex justify-between max-h-20 p-4 border-b">
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
                    <p class = "text-white"> Home </p>
                </a>
            </div>
            <div class="flex items-center gap-5 hover:border border-gray-300 h-20 right-4 justify-center">
                <a href = "recherche.php" class = "flex items-center gap-5">
                    <img class="w-10 h-10 invert" src="../Image/logo.loupe.png" alt="logo loupe">
                    <p class = "text-white"> Rechercher </p>
                </a>
            </div>
            <div class="flex items-center gap-5 hover:border border-gray-300 h-20 right-4 justify-center">
                <a href = "profile.php" class = "flex items-center gap-5">
                <img class="rounded-full w-10 h-10" src="<?php echo $_SESSION['picture']?>" alt="photo de profil">
                    <p class = "text-white"> Profil </p>
                </a>
            </div>
            <div class="flex items-center gap-5 hover:border border-gray-300 h-20 right-4 justify-center">
                <a href = "notification.php" class = "flex items-center gap-5">
                    <img class="w-10 h-10 invert" src="../Image/logo.notifications.png" alt="logo notifications">
                    <p class = "text-white"> Notifications </p>
                </a>
            </div>
            <div class = "flex items-center gap-5 hover:border border-gray-300 h-20 right-4 justify-center">
                <a href = "message.php" class = "flex items-center gap-5">
                    <img class="w-10 h-10 invert" src="../Image/logo.enveloppe.png" alt="logo message">
                    <p class = "text-white"> Messages </p>
                </a>
            </div>
        </div>
        <div class = "w-full">
            <div class = "flex justify-evenly mb-10">
                <button type = "button" name = "Tous" class = "focus:border-b-4 border-blue-500 invert-0" id = "tous"> Tous </button>    
                <button type = "button" name = "certifier" class = "focus:border-b-4 border-blue-500 invert-0" id = "certifier"> Certifié </button>
                <button type = "button" name = "mention" class = "focus:border-b-4 border-blue-500 invert-0" id = "mention"> Mentions </button>
            </div>
            <div class = "flex w-3/5">
                <div class = "w-1/5">
                    <img src = "../Image/logo_twitter.png" alt = "logo-twitter" class = "invert h-auto w-10">
                </div>
                <div class = "w-4/5 mb-14">
                    <p> il y a eu une connexion à votre compte <?php echo $_SESSION['at_user_name']?> depuis un nouvel appareil le 22 févr. 2024 Passez-la maintenant en revue. </p>
                </div>
            </div>
            <div class = "mb-14">
                <p> Notification Push </p>
                <p> Ne manquez jamais ce qui se sur x en activant les notifications push </p>
            </div>
            <div>
                <p> Pour le moment aucune notification </p>
            </div>
        </div>
    </div>
    </div>
    <footer class="flex justify-between max-h-20 p-4 border-t lg:hidden">
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
            <img class = "w-10 h-10 hover:bg-gray-300 lg:hidden sm:block rounded-full" src="<?php echo $_SESSION['picture']?>" alt="logo profil">
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