<?php
require_once __DIR__ . "/vendor/autoload.php";

use Telegram\Telegram;

const TOKEN = "BOT_TOKEN";

$bot = new Telegram(TOKEN);
$offset = 0;
while (true) {
    $updates = $bot->getUpdates($offset, $timeout = 0);
    if ($updates->ok == true) {
        foreach ($updates->result as $update) {
            $offset = $update->update_id + 1;
            $easy = new \Telegram\EasyVars($update);
            $bot->sendMessage("5731290281", json_encode($update), reply_to_message_id: 59);
        }
    }
}
