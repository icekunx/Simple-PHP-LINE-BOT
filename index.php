<?php
require_once __DIR__ . '/lineBot.php';

$bot = new Linebot();
if $bot->getMessageText() {
$text = "ทดสอบ";
}
$bot->reply($text);



