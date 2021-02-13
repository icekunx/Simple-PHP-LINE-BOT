<?php
require_once __DIR__ . '/lineBot.php';
$bot = new Linebot();

$text = $bot->getMessageText(); //when user send text to bot	
$bot->reply($text); // bot reply to user
?>



