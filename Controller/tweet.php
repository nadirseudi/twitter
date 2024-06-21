<?php

include ('../Model/tweet.php');
$pseudo = $_GET['pseudo'];

$newtweet = new Tweet;

header('content-type: application/json');

$tweet = $newtweet->publication($pseudo);

echo json_encode($tweet);

