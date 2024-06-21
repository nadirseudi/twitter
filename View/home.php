<?php
include_once("../Controller/home_controller.php");
?>
<!DOCTYPE html>
<html lang = "fr">
<head>
    <meta charset = "UTF-8">
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "../Style/tailwind.css">
    <title> Page d'accueil </title>
</head>
<body class="bg-black">
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

    <main class="flex text-white">
    <nav class="w-1/5 p-4 h-screen hidden lg:flex md:flex-col md:gap-5 text-white">
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
            <a class = "flex items-center gap-5" href = "message.php">
                <img class="w-10 h-10 invert" src="../Image/logo.enveloppe.png" alt="logo message">
                Messages
            </a>
        </div>
    </nav>
    <div id="max" class = "w-full lg:w-3/5 text-center">
        <div class = "border-l border-r border-b">
            <form id = "form" method = "post" action = "#">
                <div class = "flex items-center">
                    <img src = "<?php echo $path?>" alt = "logo profile" class = "rounded-full w-10 h-10">
                    <textarea name = "tweet" id = "tweet" placeholder = "What's up" class = "bg-black w-full h-20"></textarea>
                    <span id = "char-count" class = "text-white"> 140 </span> caratères restant
                </div>
                <button type = "submit" name = "post" id = "post" class = "bg-blue-600 rounded-full border pr-2 pl-2 m-2"> Post </button>
            </form>
        </div>
        <div class = "border-l border-r pt-2 pb-2 bg-gray-900"></div>
        <div>
            <?php
            foreach ($tweets as $tweet) 
            {
                ?> 
                <div class = "border h-24">
                    <input type = "hidden" name = "id" value = "<?php echo $tweet['id']?>">
                    <div class = "flex gap-3"> 
                        <div>
                            <img src = "<?php echo '../'.$tweet['profile_picture']?>" alt = "Logo profil <?php echo $tweet['at_user_name']?>" class = "rounded-full w-10 h-10">
                        </div>
                        <p class = "text-blue-500 underline"> <strong><?php echo $tweet['at_user_name']?> </strong></p>
                        <p> <strong><?php echo $tweet['username']?></strong> </p>
                        <p> <?php echo $tweet['content']?> </p>
                        <p> <?php echo $tweet['time']?> </p>
                    </div>
                    <div class = "flex gap-4">
                        <div class = "flex">
                            <button type = "button" name = "like" id = "like"> &#9825; </button>
                        </div>
                        <button type = "button" name = "answer_<?php echo $tweet['id']; ?>" id = "answer_<?php echo $tweet['id']; ?>" class = "answer"> &#128488; Répondre </button>
                        <button type = "button" name = "retweet" id = "retweet"> &#128257; Retweet </button>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
    <div class = "w-1/5 text-center hidden lg:block h-screen">
        <p> test </p>
    </div>
    </main>
    <nav class="flex justify-between max-h-20 p-4 border-t lg:hidden">
    <div class = "hover:border border-gray-300 flex">
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
                <img class="w-10 h-10 hover:bg-gray-300 lg:hidden sm:block rounded-full" src="<?php echo $path?>" alt="logo profil">
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
    </nav>
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="../Script/home.js"></script>
</body>
</html>