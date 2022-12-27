<?php

namespace Telegram;

abstract class Api implements ApiInterface
{
    public function getUpdates(
        int $offset = null,
        int $limit = null,
        int $timeout = null,
        array $allowed_updates = null
    ) {
        $data = [];

        if ($offset !== null) {
            $data['offset'] = $offset;
        }

        if ($limit !== null) {
            $data['limit'] = $limit;
        }

        if ($timeout !== null) {
            $data['timeout'] = $timeout;
        }

        if ($allowed_updates !== null) {
            $data['allowed_updates'] = json_encode($allowed_updates);
        }

        return $this->Request('getUpdates', $data);
    }

    public function sendMessage(
        $chat_id,
        string $text,
        string $parse_mode = null,
        array $entities = null,
        bool $disable_web_page_preview = null,
        bool $disable_notification = null,
        bool $protect_content = null,
        int $reply_to_message_id = null,
        bool $allow_sending_without_reply = null,
        array $reply_markup = null,
        int $message_thread_id = null
    ) {
        $data = [
            'chat_id' => $chat_id,
            'text'    => $text
        ];

        if ($parse_mode !== null) {
            $data['parse_mode'] = $parse_mode;
        }

        if ($entities !== null) {
            $data['entities'] = json_encode($entities);
        }

        if ($disable_web_page_preview !== null) {
            $data['disable_web_page_preview'] = $disable_web_page_preview;
        }

        if ($disable_notification !== null) {
            $data['disable_notification'] = $disable_notification;
        }

        if ($protect_content !== null) {
            $data['protect_content'] = $protect_content;
        }

        if ($reply_to_message_id !== null) {
            $data['reply_to_message_id'] = $reply_to_message_id;
        }

        if ($allow_sending_without_reply !== null) {
            $data['allow_sending_without_reply'] = $allow_sending_without_reply;
        }

        if ($reply_markup !== null) {
            $data['reply_markup'] = json_encode($reply_markup);
        }

        if ($message_thread_id !== null) {
            $data['message_thread_id'] = $message_thread_id;
        }
        return $this->Request('sendMessage', $data);
    }
}
