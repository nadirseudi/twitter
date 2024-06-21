<?php
include_once('../Controller/follower_following_controller.php');
?>
<!DOCTYPE html>
<html lang = "fr">
<head>
    <meta charset = "UTF-8">
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
    <link href = "../Style/tailwind.css" rel = "stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src = "../Script/follower_following.js"></script>
    <title> Followers and following </title>
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
                    <img class = "w-10 h-10 invert" src = "../Image/logo.maison.png" alt = "logo maison">
                    Home
                </a>
            </div>
            <div class = "flex items-center gap-5 hover:border border-gray-300 h-20 right-4 justify-center">
                <a href = "recherche.php" class = "flex items-center gap-5">
                    <img class = "w-10 h-10 invert" src = "../Image/logo.loupe.png" alt = "logo loupe">
                    Rechercher
                </a>
            </div>
            <div class = "flex items-center gap-5 hover:border border-gray-300 h-20 right-4 justify-center">
                <a href = "profile.php" class = "flex items-center gap-5">
                    <img class="rounded-full w-10 h-10" src="<?php echo $_SESSION['picture']?>" alt="photo de profil">
                    Profil
                </a>
            </div>
            <div class = "flex items-center gap-5 hover:border border-gray-300 h-20 right-4 justify-center">
                <a href = "notification.php" class = "flex items-center gap-5">
                    <img class = "w-10 h-10 invert" src = "../Image/logo.notifications.png" alt = "logo notifications">
                    Notifications
                </a>
            </div>
            <div class = "flex items-center gap-5 hover:border border-gray-300 h-20 right-4 justify-center">
                <a href = "message.php" class = "flex items-center gap-5">
                    <img class = "w-10 h-10 invert" src = "../Image/logo.enveloppe.png" alt = "logo message">
                    Messages
                </a>
            </div>
        </div>
        <div class = "w-4/5">
            <div class = "flex justify-evenly mb-5">
                <button type = "button" name = "follower" class = "focus:border-b-4 border-blue-500 invert-0" id = "follower"> Followers </button>    
                <button type = "button" name = "following" class = "focus:border-b-4 border-blue-500 invert-0" id = "following"> Following </button>
            </div>
            <div class = "w-full text-center">
                <?php
                if ($followers)
                {
                    foreach ($followers as $follower)
                    {
                        ?>
                        <div class = 'flex gap-2 justify-center follower m-5'>
                        <img src = "<?php echo '../'.$follower['profile_picture']?>" alt = "Logo profil <?php echo $follower['at_user_name']?>" class = "rounded-full w-10 h-10">
                            <p class = 'text-blue-500 underline'> <strong><?php echo $follower['at_user_name'] ?></strong> </p>
                            <p> <?php echo $follower['username'] ?></p> 
                        </div>
                        <?php
                    }
                }
                else
                {
                    ?>
                    <div class = "w-full follower justify-center">
                        <p> Vous n'avez pas de followers </p>
                    </div>
                    <?php
                } 
                
                if ($followings)
                {
                    ?>
                    <?php
                    foreach ($followings as $following)
                    {
                        ?>
                        <div class = 'flex gap-2 justify-center following m-5'>
                        <img src = "<?php echo '../'.$following['profile_picture']?>" alt = "Logo profil <?php echo $following['at_user_name']?>" class = "rounded-full w-10 h-10">
                            <p class = 'text-blue-500 underline'> <strong><?php echo $following['at_user_name'] ?></strong> </p>
                            <p> <?php echo $following['username'] ?></p> 
                        </div>
                        <?php
                    }
                }
                else
                {
                    ?>
                    <div class = "w-full following justify-center">
                        <p> Vous n'avez pas de followings </p>
                    </div>
                    <?php
                } 
                ?>
            </div>
        </div>
    </div>
    <footer class = "flex justify-between max-h-20 p-4 border-t lg:hidden">
        <div class = "hover:border border-gray-300">
            <a href = "home.php">
                <img class = "invert w-10 h-auto hover:bg-gray-300 lg:hidden sm:block" src = "../Image/logo.maison.png" alt = "logo maison">
            </a>
        </div>
        <div class = "hover:border border-gray-300">
            <a href = "recherche.php">
                <img class = "invert w-10 h-auto hover:bg-gray-300 lg:hidden sm:block" src = "../Image/logo.loupe.png" alt = "logo loupe">
            </a>
        </div>
        <div class = "hover:border border-gray-300">
            <a href = "profile.php">
                <img class = "w-10 h-10 hover:bg-gray-300 lg:hidden sm:block rounded-full" src = "<?php echo $_SESSION['picture']?>" alt = "logo profil">
            </a>
        </div>
        <div class = "hover:border border-gray-300">
            <a href = "notification.php">
                <img class = "invert w-10 h-auto hover:bg-gray-300 lg:hidden sm:block" src = "../Image/logo.notifications.png" alt = "logo notifications">
            </a>
        </div>
        <div class = "hover:border border-gray-300">
            <a href = "message.php">
                <img class = "invert w-10 h-auto hover:bg-gray-300 lg:hidden sm:block" src = "../Image/logo.enveloppe.png" alt = "logo message">
            </a>
        </div>
    </footer>
</body>
</html>