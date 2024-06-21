<?php
include_once("../Controller/recherche_controller.php")
?>
<!DOCTYPE html>
<html lang = "fr">
<head>
    <meta charset = "UTF-8">
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src = "../Script/recherche.js"></script>
    <link rel = "stylesheet" href = "../Style/tailwind.css">
    <title> Recherche </title>
</head>
<body class = "bg-black"> 
    <nav class="flex justify-between max-h-20 p-4 border-b">
        <img src = "../Image/previous.png" alt = "Retour en arrière" class = "w-10 h-10 hover:bg-gray-300 invert">
        <form id = "recherche" name = "recherche">
            <input type = "text" name = "search" id = "search">
            <button type = "submit" name = "submit" class = "invert"> Rechercher </button>
        </form>
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
        <div class = "w-4/5 text-white user hidden"></div>
    </div>
    <footer class="flex justify-between max-h-20 p-4 lg:hidden border-t">
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
                <img class = "invert w-10 h-auto hover:bg-gray-300 lg:hidden sm:block" src="../Image/logo.notifications.png" alt="logo notifications">
            </a>
        </div>
        <div class = "hover:border border-gray-300">
            <a href = "message.php">
                <img class = "invert w-10 h-auto hover:bg-gray-300 lg:hidden sm:block" src="../Image/logo.enveloppe.png" alt="logo message">
            </a>
        </div>
    </footer>
</body>
</html>