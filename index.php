<?php


$botToken = "187017178:AAGoFLdogQKn0mkvchTeuHVpHBsDpnHKrLY";
$website = "https://api.telegram.org/bot".$botToken;

$update = file_get_contents($website."getupdates");

print_r($update);

?>
