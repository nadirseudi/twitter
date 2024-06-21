<?php
include_once('../Controller/messenger.controleur.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name = "viewport" content="width=device-width, initial-scale=1.0">
    <script src = "https://code.jquery.com/jquery-3.7.1.min.js" defer></script>
    <link rel = "stylesheet" href = "../Style/tailwind.css">
    <script src = "../Script/messenger.js" defer></script>
    <title> Message </title>
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
            <div class="flex items-center gap-5 hover:border border-gray-300 h-20 right-4 justify-center">
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
        <div class="lg:w-4/5 w-full h-26">
            <div class="text-center sm:text-left w-full">
                <h1> <strong>Vos Messages</strong> </h1>
                <?php 
                foreach ($convs as $conv)
                {
                    ?>
                    <div class = "bg-gray-900 rounded-xl shadow-md overflow-hidden mb-4">
                        <h2> <?php echo $conv['name']?> </h2>
                        <div class = "flex justify-center">
                            <img src = "<?php echo '../'.$conv['picture']?>" alt = "Image du groupe <?php echo $conv['name']?>" class = "h-auto w-1/4 md:w-24 justify-center">
                        </div>
                        <p> <?php echo $conv['content']?> </p>
                    </div>
                    <?php
                }
                ?>
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
                <img class="w-10 h-auto hover:bg-gray-300 lg:hidden sm:block rounded-full" src="<?php echo $_SESSION['picture']?>" alt="logo profil">
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