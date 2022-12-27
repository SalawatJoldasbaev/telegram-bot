<?php
require_once __DIR__ . "/vendor/autoload.php";

use Telegram\Telegram;

const TOKEN = "BOT_TOKEN";

$bot = new Telegram(TOKEN);

$update = $bot->getUpdate();

if (!isset($update)) {
    exit('json error');
}

if (isset($update->message) or isset($update->edited_message)) {
    $chat_id = $bot->easy->chat_id;
    $text = $bot->easy->text;
    $bot->sendMessage(5731290281, $text);
}
