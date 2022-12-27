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

    public function setWebhook(
        string $url,
        \CURLFile $certificate = null,
        string $ip_address = null,
        int $max_connections = null,
        array $allowed_updates = null,
        bool $drop_pending_updates = null,
        string $secret_token = null
    ) {
        $data = [
            'url' => $url
        ];

        if ($certificate !== null) {
            $data['certificate'] = $certificate;
        }

        if ($ip_address !== null) {
            $data['ip_address'] = $ip_address;
        }

        if ($max_connections !== null) {
            $data['max_connections'] = $max_connections;
        }

        if ($allowed_updates !== null) {
            $data['allowed_updates'] = json_encode($allowed_updates);
        }

        if ($drop_pending_updates !== null) {
            $data['drop_pending_updates'] = $drop_pending_updates;
        }

        if ($secret_token !== null) {
            $data['secret_token'] = $secret_token;
        }

        return $this->Request('setWebhook', $data);
    }

    public function deleteWebhook(
        bool $drop_pending_updates = null
    ) {
        $data = [];

        if ($drop_pending_updates !== null) {
            $data['drop_pending_updates'] = $drop_pending_updates;
        }

        return $this->Request('deleteWebhook', $data);
    }

    public function getWebhookInfo()
    {
        return $this->Request('getWebhookInfo', []);
    }

    public function getMe()
    {
        return $this->Request('getMe', []);
    }

    public function logOut()
    {
        return $this->Request('logOut', []);
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

    public function forwardMessage(
        $chat_id,
        $from_chat_id,
        bool $disable_notification = null,
        bool $protect_content = null,
        int $message_id = null,
        int $message_thread_id = null
    ) {
        $data = [
            'chat_id'      => $chat_id,
            'from_chat_id' => $from_chat_id
        ];

        if ($disable_notification !== null) {
            $data['disable_notification'] = $disable_notification;
        }

        if ($protect_content !== null) {
            $data['protect_content'] = $protect_content;
        }

        if ($message_id !== null) {
            $data['message_id'] = $message_id;
        }

        if ($message_thread_id !== null) {
            $data['message_thread_id'] = $message_thread_id;
        }

        return $this->Request('forwardMessage', $data);
    }

    public function copyMessage(
        $chat_id,
        $from_chat_id,
        int $message_id,
        string $caption = null,
        string $parse_mode = null,
        array $caption_entities = null,
        bool $disable_notification = null,
        bool $protect_content = null,
        int $reply_to_message_id = null,
        bool $allow_sending_without_reply = null,
        array $reply_markup = null,
        int $message_thread_id = null
    ) {
        $data = [
            'chat_id'      => $chat_id,
            'from_chat_id' => $from_chat_id,
            'message_id'   => $message_id
        ];

        if ($caption !== null) {
            $data['caption'] = $caption;
        }

        if ($parse_mode !== null) {
            $data['parse_mode'] = $parse_mode;
        }

        if ($caption_entities !== null) {
            $data['caption_entities'] = json_encode($caption_entities);
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

        return $this->Request('copyMessage', $data);
    }

    public function sendPhoto(
        $chat_id,
        $photo,
        string $caption = null,
        string $parse_mode = null,
        array $caption_entities = null,
        bool $disable_notification = null,
        bool $protect_content = null,
        int $reply_to_message_id = null,
        bool $allow_sending_without_reply = null,
        array $reply_markup = null,
        int $message_thread_id = null
    ) {
        $data = [
            'chat_id' => $chat_id,
            'photo'   => $photo
        ];

        if ($caption !== null) {
            $data['caption'] = $caption;
        }

        if ($parse_mode !== null) {
            $data['parse_mode'] = $parse_mode;
        }

        if ($caption_entities !== null) {
            $data['caption_entities'] = json_encode($caption_entities);
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

        return $this->Request('sendPhoto', $data);
    }

    public function sendAudio(
        $chat_id,
        $audio,
        string $caption = null,
        string $parse_mode = null,
        array $caption_entities = null,
        int $duration = null,
        string $performer = null,
        string $title = null,
        $thumb = null,
        bool $disable_notification = null,
        bool $protect_content = null,
        int $reply_to_message_id = null,
        bool $allow_sending_without_reply = null,
        array $reply_markup = null,
        int $message_thread_id = null
    ) {
        $data = [
            'chat_id' => $chat_id,
            'audio'   => $audio
        ];

        if ($caption !== null) {
            $data['caption'] = $caption;
        }

        if ($parse_mode !== null) {
            $data['parse_mode'] = $parse_mode;
        }

        if ($caption_entities !== null) {
            $data['caption_entities'] = json_encode($caption_entities);
        }

        if ($duration !== null) {
            $data['duration'] = $duration;
        }

        if ($performer !== null) {
            $data['performer'] = $performer;
        }

        if ($title !== null) {
            $data['title'] = $title;
        }

        if ($thumb !== null) {
            $data['thumb'] = $thumb;
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

        return $this->Request('sendAudio', $data);
    }

    public function sendDocument(
        $chat_id,
        $document,
        $thumb = null,
        string $caption = null,
        string $parse_mode = null,
        array $caption_entities = null,
        bool $disable_content_type_detection = null,
        bool $disable_notification = null,
        bool $protect_content = null,
        int $reply_to_message_id = null,
        bool $allow_sending_without_reply = null,
        array $reply_markup = null,
        int $message_thread_id = null
    ) {
        $data = [
            'chat_id'  => $chat_id,
            'document' => $document
        ];

        if ($thumb !== null) {
            $data['thumb'] = $thumb;
        }

        if ($caption !== null) {
            $data['caption'] = $caption;
        }

        if ($parse_mode !== null) {
            $data['parse_mode'] = $parse_mode;
        }

        if ($caption_entities !== null) {
            $data['caption_entities'] = json_encode($caption_entities);
        }

        if ($disable_content_type_detection !== null) {
            $data['disable_content_type_detection'] = $disable_content_type_detection;
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

        return $this->Request('sendDocument', $data);
    }

    public function sendVideo(
        $chat_id,
        $video,
        int $duration = null,
        int $width = null,
        int $height = null,
        $thumb = null,
        string $caption = null,
        string $parse_mode = null,
        array $caption_entities = null,
        bool $supports_streaming = null,
        bool $disable_notification = null,
        bool $protect_content = null,
        int $reply_to_message_id = null,
        bool $allow_sending_without_reply = null,
        array $reply_markup = null,
        int $message_thread_id = null
    ) {
        $data = [
            'chat_id' => $chat_id,
            'video'   => $video
        ];

        if ($duration !== null) {
            $data['duration'] = $duration;
        }

        if ($width !== null) {
            $data['width'] = $width;
        }

        if ($height !== null) {
            $data['height'] = $height;
        }

        if ($thumb !== null) {
            $data['thumb'] = $thumb;
        }

        if ($caption !== null) {
            $data['caption'] = $caption;
        }

        if ($parse_mode !== null) {
            $data['parse_mode'] = $parse_mode;
        }

        if ($caption_entities !== null) {
            $data['caption_entities'] = json_encode($caption_entities);
        }

        if ($supports_streaming !== null) {
            $data['supports_streaming'] = $supports_streaming;
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

        return $this->Request('sendVideo', $data);
    }

    public function sendAnimation(
        $chat_id,
        $animation,
        int $duration = null,
        int $width = null,
        int $height = null,
        $thumb = null,
        string $caption = null,
        string $parse_mode = null,
        array $caption_entities = null,
        bool $disable_notification = null,
        bool $protect_content = null,
        int $reply_to_message_id = null,
        bool $allow_sending_without_reply = null,
        array $reply_markup = null,
        int $message_thread_id = null
    ) {
        $data = [
            'chat_id'   => $chat_id,
            'animation' => $animation
        ];

        if ($duration !== null) {
            $data['duration'] = $duration;
        }

        if ($width !== null) {
            $data['width'] = $width;
        }

        if ($height !== null) {
            $data['height'] = $height;
        }

        if ($thumb !== null) {
            $data['thumb'] = $thumb;
        }

        if ($caption !== null) {
            $data['caption'] = $caption;
        }

        if ($parse_mode !== null) {
            $data['parse_mode'] = $parse_mode;
        }

        if ($caption_entities !== null) {
            $data['caption_entities'] = json_encode($caption_entities);
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

        return $this->Request('sendAnimation', $data);
    }

    public function sendVoice(
        $chat_id,
        $voice,
        string $caption = null,
        string $parse_mode = null,
        array $caption_entities = null,
        int $duration = null,
        bool $disable_notification = null,
        bool $protect_content = null,
        int $reply_to_message_id = null,
        bool $allow_sending_without_reply = null,
        array $reply_markup = null,
        int $message_thread_id = null
    ) {
        $data = [
            'chat_id' => $chat_id,
            'voice'   => $voice
        ];

        if ($caption !== null) {
            $data['caption'] = $caption;
        }

        if ($parse_mode !== null) {
            $data['parse_mode'] = $parse_mode;
        }

        if ($caption_entities !== null) {
            $data['caption_entities'] = json_encode($caption_entities);
        }

        if ($duration !== null) {
            $data['duration'] = $duration;
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

        return $this->Request('sendVoice', $data);
    }

    public function sendVideoNote(
        $chat_id,
        $video_note,
        int $duration = null,
        int $length = null,
        $thumb = null,
        bool $disable_notification = null,
        bool $protect_content = null,
        int $reply_to_message_id = null,
        bool $allow_sending_without_reply = null,
        array $reply_markup = null,
        int $message_thread_id = null
    ) {
        $data = [
            'chat_id'    => $chat_id,
            'video_note' => $video_note
        ];

        if ($duration !== null) {
            $data['duration'] = $duration;
        }

        if ($length !== null) {
            $data['length'] = $length;
        }

        if ($thumb !== null) {
            $data['thumb'] = $thumb;
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

        return $this->Request('sendVideoNote', $data);
    }

    public function sendMediaGroup(
        $chat_id,
        array $media,
        bool $disable_notification = null,
        bool $protect_content = null,
        int $reply_to_message_id = null,
        bool $allow_sending_without_reply = null,
        int $message_thread_id = null
    ) {
        $data = [
            'chat_id' => $chat_id,
        ];

        foreach ($media as $key => $value) {
            if (is_object($value['media'])) {
                $data['upload' . $key] = $value['media'];
                $media[$key]['media'] = 'attach://upload' . $key;
            }
        }
        $data['media'] = json_encode($media);

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

        if ($message_thread_id !== null) {
            $data['message_thread_id'] = $message_thread_id;
        }

        return $this->Request('sendMediaGroup', $data);
    }

    public function sendLocation(
        $chat_id,
        float $latitude,
        float $longitude,
        float $horizontal_accuracy = null,
        int $live_period = null,
        int $heading = null,
        int $proximity_alert_radius = null,
        bool $disable_notification = null,
        bool $protect_content = null,
        int $reply_to_message_id = null,
        bool $allow_sending_without_reply = null,
        array $reply_markup = null,
        int $message_thread_id = null
    ) {
        $data = [
            'chat_id'   => $chat_id,
            'latitude'  => $latitude,
            'longitude' => $longitude
        ];

        if ($horizontal_accuracy !== null) {
            $data['horizontal_accuracy'] = $horizontal_accuracy;
        }

        if ($live_period !== null) {
            $data['live_period'] = $live_period;
        }

        if ($heading !== null) {
            $data['heading'] = $heading;
        }

        if ($proximity_alert_radius !== null) {
            $data['proximity_alert_radius'] = $proximity_alert_radius;
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

        return $this->Request('sendLocation', $data);
    }

    public function editMessageLiveLocation(
        $chat_id = null,
        int $message_id = null,
        string $inline_message_id = null,
        float $latitude = null,
        float $longitude = null,
        float $horizontal_accuracy = null,
        int $heading = null,
        int $proximity_alert_radius = null,
        array $reply_markup = null
    ) {
        $data = [];

        if ($chat_id !== null) {
            $data['chat_id'] = $chat_id;
        }

        if ($message_id !== null) {
            $data['message_id'] = $message_id;
        }

        if ($inline_message_id !== null) {
            $data['inline_message_id'] = $inline_message_id;
        }

        if ($latitude !== null) {
            $data['latitude'] = $latitude;
        }

        if ($longitude !== null) {
            $data['longitude'] = $longitude;
        }

        if ($horizontal_accuracy !== null) {
            $data['horizontal_accuracy'] = $horizontal_accuracy;
        }

        if ($heading !== null) {
            $data['heading'] = $heading;
        }

        if ($proximity_alert_radius !== null) {
            $data['proximity_alert_radius'] = $proximity_alert_radius;
        }

        if ($reply_markup !== null) {
            $data['reply_markup'] = json_encode($reply_markup);
        }

        return $this->Request('editMessageLiveLocation', $data);
    }

    public function stopMessageLiveLocation(
        $chat_id = null,
        int $message_id = null,
        string $inline_message_id = null,
        array $reply_markup = null
    ) {
        $data = [];

        if ($chat_id !== null) {
            $data['chat_id'] = $chat_id;
        }

        if ($message_id !== null) {
            $data['message_id'] = $message_id;
        }

        if ($inline_message_id !== null) {
            $data['inline_message_id'] = $inline_message_id;
        }

        if ($reply_markup !== null) {
            $data['reply_markup'] = json_encode($reply_markup);
        }

        return $this->Request('stopMessageLiveLocation', $data);
    }

    public function sendVenue(
        $chat_id,
        float $latitude,
        float $longitude,
        string $title,
        string $address,
        string $foursquare_id = null,
        string $foursquare_type = null,
        string $google_place_id = null,
        string $google_place_type = null,
        bool $disable_notification = null,
        bool $protect_content = null,
        int $reply_to_message_id = null,
        bool $allow_sending_without_reply = null,
        array $reply_markup = null,
        int $message_thread_id = null
    ) {
        $data = [
            'chat_id'   => $chat_id,
            'latitude'  => $latitude,
            'longitude' => $longitude,
            'title'     => $title,
            'address'   => $address
        ];

        if ($foursquare_id !== null) {
            $data['foursquare_id'] = $foursquare_id;
        }

        if ($foursquare_type !== null) {
            $data['foursquare_type'] = $foursquare_type;
        }

        if ($google_place_id !== null) {
            $data['google_place_id'] = $google_place_id;
        }

        if ($google_place_type !== null) {
            $data['google_place_type'] = $google_place_type;
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

        return $this->Request('sendVenue', $data);
    }

    public function sendContact(
        $chat_id,
        string $phone_number,
        string $first_name,
        string $last_name = null,
        string $vcard = null,
        bool $disable_notification = null,
        bool $protect_content = null,
        int $reply_to_message_id = null,
        bool $allow_sending_without_reply = null,
        array $reply_markup = null,
        int $message_thread_id = null
    ) {
        $data = [
            'chat_id'      => $chat_id,
            'phone_number' => $phone_number,
            'first_name'   => $first_name
        ];

        if ($last_name !== null) {
            $data['last_name'] = $last_name;
        }

        if ($vcard !== null) {
            $data['vcard'] = $vcard;
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

        return $this->Request('sendContact', $data);
    }

    public function sendPoll(
        $chat_id,
        string $question,
        array $options,
        bool $is_anonymous = null,
        string $type = null,
        bool $allows_multiple_answers = null,
        int $correct_option_id = null,
        string $explanation = null,
        string $explanation_parse_mode = null,
        array $explanation_entities = null,
        int $open_period = null,
        int $close_date = null,
        bool $is_closed = null,
        bool $disable_notification = null,
        bool $protect_content = null,
        int $reply_to_message_id = null,
        bool $allow_sending_without_reply = null,
        array $reply_markup = null,
        int $message_thread_id = null
    ) {
        $data = [
            'chat_id'  => $chat_id,
            'question' => $question,
            'options'  => json_encode($options)
        ];

        if ($is_anonymous !== null) {
            $data['is_anonymous'] = $is_anonymous;
        }

        if ($type !== null) {
            $data['type'] = $type;
        }

        if ($allows_multiple_answers !== null) {
            $data['allows_multiple_answers'] = $allows_multiple_answers;
        }

        if ($correct_option_id !== null) {
            $data['correct_option_id'] = $correct_option_id;
        }

        if ($explanation !== null) {
            $data['explanation'] = $explanation;
        }

        if ($explanation_parse_mode !== null) {
            $data['explanation_parse_mode'] = $explanation_parse_mode;
        }

        if ($explanation_entities !== null) {
            $data['explanation_entities'] = json_encode($explanation_entities);
        }

        if ($open_period !== null) {
            $data['open_period'] = $open_period;
        }

        if ($close_date !== null) {
            $data['close_date'] = $close_date;
        }

        if ($is_closed !== null) {
            $data['is_closed'] = $is_closed;
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

        return $this->Request('sendPoll', $data);
    }

    public function sendDice(
        $chat_id,
        string $emoji = null,
        bool $disable_notification = null,
        bool $protect_content = null,
        int $reply_to_message_id = null,
        bool $allow_sending_without_reply = null,
        array $reply_markup = null,
        int $message_thread_id = null
    ) {
        $data = [
            'chat_id' => $chat_id
        ];

        if ($emoji !== null) {
            $data['emoji'] = $emoji;
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

        return $this->Request('sendDice', $data);
    }

    public function sendChatAction(
        $chat_id,
        string $action
    ) {
        $data = [
            'chat_id' => $chat_id,
            'action'  => $action
        ];

        return $this->Request('sendChatAction', $data);
    }

    public function getUserProfilePhotos(
        int $user_id,
        int $offset = null,
        int $limit = null
    ) {
        $data = [
            'user_id' => $user_id
        ];

        if ($offset !== null) {
            $data['offset'] = $offset;
        }

        if ($limit !== null) {
            $data['limit'] = $limit;
        }

        return $this->Request('getUserProfilePhotos', $data);
    }

    public function getFile(
        string $file_id
    ) {
        $data = [
            'file_id' => $file_id
        ];

        return $this->Request('getFile', $data);
    }

    public function banChatMember(
        $chat_id,
        int $user_id,
        int $until_date = null,
        bool $revoke_messages = null
    ) {
        $data = [
            'chat_id' => $chat_id,
            'user_id' => $user_id
        ];

        if ($until_date !== null) {
            $data['until_date'] = $until_date;
        }

        if ($revoke_messages !== null) {
            $data['revoke_messages'] = $revoke_messages;
        }

        return $this->Request('banChatMember', $data);
    }

    public function unbanChatMember(
        $chat_id,
        int $user_id,
        bool $only_if_banned = null
    ) {
        $data = [
            'chat_id' => $chat_id,
            'user_id' => $user_id
        ];

        if ($only_if_banned !== null) {
            $data['only_if_banned'] = $only_if_banned;
        }

        return $this->Request('unbanChatMember', $data);
    }

    public function restrictChatMember(
        $chat_id,
        int $user_id,
        array $permissions,
        int $until_date = null
    ) {
        $data = [
            'chat_id'     => $chat_id,
            'user_id'     => $user_id,
            'permissions' => json_encode($permissions)
        ];

        if ($until_date !== null) {
            $data['until_date'] = $until_date;
        }

        return $this->Request('restrictChatMember', $data);
    }

    public function promoteChatMember(
        $chat_id,
        int $user_id,
        bool $is_anonymous = null,
        bool $can_manage_chat = null,
        bool $can_post_messages = null,
        bool $can_edit_messages = null,
        bool $can_delete_messages = null,
        bool $can_manage_video_chats = null,
        bool $can_restrict_members = null,
        bool $can_promote_members = null,
        bool $can_change_info = null,
        bool $can_invite_users = null,
        bool $can_pin_messages = null,
        bool $can_manage_topics = null
    ) {
        $data = [
            'chat_id' => $chat_id,
            'user_id' => $user_id
        ];

        if ($is_anonymous !== null) {
            $data['is_anonymous'] = $is_anonymous;
        }

        if ($can_manage_chat !== null) {
            $data['can_manage_chat'] = $can_manage_chat;
        }

        if ($can_post_messages !== null) {
            $data['can_post_messages'] = $can_post_messages;
        }

        if ($can_edit_messages !== null) {
            $data['can_edit_messages'] = $can_edit_messages;
        }

        if ($can_delete_messages !== null) {
            $data['can_delete_messages'] = $can_delete_messages;
        }

        if ($can_manage_video_chats !== null) {
            $data['can_manage_video_chats'] = $can_manage_video_chats;
        }

        if ($can_restrict_members !== null) {
            $data['can_restrict_members'] = $can_restrict_members;
        }

        if ($can_promote_members !== null) {
            $data['can_promote_members'] = $can_promote_members;
        }

        if ($can_change_info !== null) {
            $data['can_change_info'] = $can_change_info;
        }

        if ($can_invite_users !== null) {
            $data['can_invite_users'] = $can_invite_users;
        }

        if ($can_pin_messages !== null) {
            $data['can_pin_messages'] = $can_pin_messages;
        }

        if ($can_manage_topics !== null) {
            $data['can_manage_topics'] = $can_manage_topics;
        }

        return $this->Request('promoteChatMember', $data);
    }

    public function setChatAdministratorCustomTitle(
        $chat_id,
        int $user_id,
        string $custom_title
    ) {
        $data = [
            'chat_id'      => $chat_id,
            'user_id'      => $user_id,
            'custom_title' => $custom_title
        ];

        return $this->Request('setChatAdministratorCustomTitle', $data);
    }

    public function banChatSenderChat(
        $chat_id,
        int $sender_chat_id
    ) {
        $data = [
            'chat_id'        => $chat_id,
            'sender_chat_id' => $sender_chat_id
        ];

        return $this->Request('banChatSenderChat', $data);
    }

    public function unbanChatSenderChat(
        $chat_id,
        int $sender_chat_id
    ) {
        $data = [
            'chat_id'        => $chat_id,
            'sender_chat_id' => $sender_chat_id
        ];

        return $this->Request('unbanChatSenderChat', $data);
    }

    public function setChatPermissions(
        $chat_id,
        array $permissions
    ) {
        $data = [
            'chat_id'     => $chat_id,
            'permissions' => json_encode($permissions)
        ];

        return $this->Request('setChatPermissions', $data);
    }

    public function exportChatInviteLink(
        $chat_id
    ) {
        $data = [
            'chat_id' => $chat_id
        ];

        return $this->Request('exportChatInviteLink', $data);
    }

    public function createChatInviteLink(
        $chat_id,
        string $name = null,
        int $expire_date = null,
        int $member_limit = null,
        bool $creates_join_request = null
    ) {
        $data = [
            'chat_id' => $chat_id
        ];

        if ($name !== null) {
            $data['name'] = $name;
        }

        if ($expire_date !== null) {
            $data['expire_date'] = $expire_date;
        }

        if ($member_limit !== null) {
            $data['member_limit'] = $member_limit;
        }

        if ($creates_join_request !== null) {
            $data['creates_join_request'] = $creates_join_request;
        }

        return $this->Request('createChatInviteLink', $data);
    }

    public function editChatInviteLink(
        $chat_id,
        string $invite_link,
        string $name = null,
        int $expire_date = null,
        int $member_limit = null,
        bool $creates_join_request = null
    ) {
        $data = [
            'chat_id'     => $chat_id,
            'invite_link' => $invite_link
        ];

        if ($name !== null) {
            $data['name'] = $name;
        }

        if ($expire_date !== null) {
            $data['expire_date'] = $expire_date;
        }

        if ($member_limit !== null) {
            $data['member_limit'] = $member_limit;
        }

        if ($creates_join_request !== null) {
            $data['creates_join_request'] = $creates_join_request;
        }

        return $this->Request('editChatInviteLink', $data);
    }

    public function revokeChatInviteLink(
        $chat_id,
        string $invite_link
    ) {
        $data = [
            'chat_id'     => $chat_id,
            'invite_link' => $invite_link
        ];

        return $this->Request('revokeChatInviteLink', $data);
    }

    public function approveChatJoinRequest(
        $chat_id,
        int $user_id
    ) {
        $data = [
            'chat_id' => $chat_id,
            'user_id' => $user_id
        ];

        return $this->Request('approveChatJoinRequest', $data);
    }

    public function declineChatJoinRequest(
        $chat_id,
        int $user_id
    ) {
        $data = [
            'chat_id' => $chat_id,
            'user_id' => $user_id
        ];

        return $this->Request('declineChatJoinRequest', $data);
    }

    public function setChatPhoto(
        $chat_id,
        \CURLFile $photo
    ) {
        $data = [
            'chat_id' => $chat_id,
            'photo'   => $photo
        ];

        return $this->Request('setChatPhoto', $data);
    }

    public function deleteChatPhoto(
        $chat_id
    ) {
        $data = [
            'chat_id' => $chat_id
        ];

        return $this->Request('deleteChatPhoto', $data);
    }

    public function setChatTitle(
        $chat_id,
        string $title
    ) {
        $data = [
            'chat_id' => $chat_id,
            'title'   => $title
        ];

        return $this->Request('setChatTitle', $data);
    }

    public function setChatDescription(
        $chat_id,
        string $description = null
    ) {
        $data = [
            'chat_id' => $chat_id
        ];

        if ($description !== null) {
            $data['description'] = $description;
        }

        return $this->Request('setChatDescription', $data);
    }

    public function pinChatMessage(
        $chat_id,
        int $message_id,
        bool $disable_notification = null
    ) {
        $data = [
            'chat_id'    => $chat_id,
            'message_id' => $message_id
        ];

        if ($disable_notification !== null) {
            $data['disable_notification'] = $disable_notification;
        }

        return $this->Request('pinChatMessage', $data);
    }

    public function unpinChatMessage(
        $chat_id,
        int $message_id = null
    ) {
        $data = [
            'chat_id' => $chat_id
        ];

        if ($message_id !== null) {
            $data['message_id'] = $message_id;
        }

        return $this->Request('unpinChatMessage', $data);
    }

    public function unpinAllChatMessages(
        $chat_id
    ) {
        $data = [
            'chat_id' => $chat_id
        ];

        return $this->Request('unpinAllChatMessages', $data);
    }

    public function leaveChat(
        $chat_id
    ) {
        $data = [
            'chat_id' => $chat_id
        ];

        return $this->Request('leaveChat', $data);
    }

    public function getChat(
        $chat_id
    ) {
        $data = [
            'chat_id' => $chat_id
        ];

        return $this->Request('getChat', $data);
    }

    public function getChatAdministrators(
        $chat_id
    ) {
        $data = [
            'chat_id' => $chat_id
        ];

        return $this->Request('getChatAdministrators', $data);
    }

    public function getChatMemberCount(
        $chat_id
    ) {
        $data = [
            'chat_id' => $chat_id
        ];

        return $this->Request('getChatMemberCount', $data);
    }

    public function getChatMember(
        $chat_id,
        int $user_id
    ) {
        $data = [
            'chat_id' => $chat_id,
            'user_id' => $user_id
        ];

        return $this->Request('getChatMember', $data);
    }

    public function setChatStickerSet(
        $chat_id,
        string $sticker_set_name
    ) {
        $data = [
            'chat_id'          => $chat_id,
            'sticker_set_name' => $sticker_set_name
        ];

        return $this->Request('setChatStickerSet', $data);
    }

    public function deleteChatStickerSet(
        $chat_id
    ) {
        $data = [
            'chat_id' => $chat_id
        ];

        return $this->Request('deleteChatStickerSet', $data);
    }

    public function getForumTopicIconStickers()
    {
        return $this->Request('getForumTopicIconStickers', []);
    }

    public function createForumTopic(
        $chat_id,
        string $name,
        int $icon_color = null,
        string $icon_custom_emoji_id = null
    ) {
        $data = [
            'chat_id' => $chat_id,
            'name'    => $name
        ];

        if ($icon_color !== null) {
            $data['icon_color'] = $icon_color;
        }

        if ($icon_custom_emoji_id !== null) {
            $data['icon_custom_emoji_id'] = $icon_custom_emoji_id;
        }

        return $this->Request('createForumTopic', $data);
    }

    public function editForumTopic(
        $chat_id,
        string $name,
        string $icon_custom_emoji_id,
        int $message_thread_id
    ) {
        $data = [
            'chat_id'              => $chat_id,
            'name'                 => $name,
            'icon_custom_emoji_id' => $icon_custom_emoji_id,
            'message_thread_id'    => $message_thread_id
        ];

        return $this->Request('editForumTopic', $data);
    }

    public function closeForumTopic(
        $chat_id,
        int $message_thread_id
    ) {
        $data = [
            'chat_id'           => $chat_id,
            'message_thread_id' => $message_thread_id
        ];

        return $this->Request('closeForumTopic', $data);
    }

    public function reopenForumTopic(
        $chat_id,
        int $message_thread_id
    ) {
        $data = [
            'chat_id'           => $chat_id,
            'message_thread_id' => $message_thread_id
        ];

        return $this->Request('reopenForumTopic', $data);
    }

    public function deleteForumTopic(
        $chat_id,
        int $message_thread_id
    ) {
        $data = [
            'chat_id'           => $chat_id,
            'message_thread_id' => $message_thread_id
        ];

        return $this->Request('deleteForumTopic', $data);
    }

    public function unpinAllForumTopicMessages(
        $chat_id,
        int $message_thread_id
    ) {
        $data = [
            'chat_id'           => $chat_id,
            'message_thread_id' => $message_thread_id
        ];

        return $this->Request('unpinAllForumTopicMessages', $data);
    }

    public function answerCallbackQuery(
        string $callback_query_id,
        string $text = null,
        bool $show_alert = null,
        string $url = null,
        int $cache_time = null
    ) {
        $data = [
            'callback_query_id' => $callback_query_id
        ];

        if ($text !== null) {
            $data['text'] = $text;
        }

        if ($show_alert !== null) {
            $data['show_alert'] = $show_alert;
        }

        if ($url !== null) {
            $data['url'] = $url;
        }

        if ($cache_time !== null) {
            $data['cache_time'] = $cache_time;
        }

        return $this->Request('answerCallbackQuery', $data);
    }

    public function setMyCommands(
        array $commands,
        array $scope = null,
        string $language_code = null
    ) {
        $data = [
            'commands' => json_encode($commands)
        ];

        if ($scope !== null) {
            $data['scope'] = json_encode($scope);
        }

        if ($language_code !== null) {
            $data['language_code'] = $language_code;
        }

        return $this->Request('setMyCommands', $data);
    }

    public function deleteMyCommands(
        array $scope = null,
        string $language_code = null
    ) {
        $data = [];

        if ($scope !== null) {
            $data['scope'] = json_encode($scope);
        }

        if ($language_code !== null) {
            $data['language_code'] = $language_code;
        }

        return $this->Request('deleteMyCommands', $data);
    }

    public function getMyCommands(
        array $scope = null,
        string $language_code = null
    ) {
        $data = [];

        if ($scope !== null) {
            $data['scope'] = json_encode($scope);
        }

        if ($language_code !== null) {
            $data['language_code'] = $language_code;
        }

        return $this->Request('getMyCommands', $data);
    }

    public function setChatMenuButton(
        int $chat_id = null,
        array $menu_button = null
    ) {
        $data = [];

        if ($chat_id !== null) {
            $data['chat_id'] = $chat_id;
        }

        if ($menu_button !== null) {
            $data['menu_button'] = json_encode($menu_button);
        }

        return $this->Request('setChatMenuButton', $data);
    }

    public function getChatMenuButton(
        int $chat_id = null
    ) {
        $data = [];

        if ($chat_id !== null) {
            $data['chat_id'] = $chat_id;
        }

        return $this->Request('getChatMenuButton', $data);
    }

    public function setMyDefaultAdministratorRights(
        array $rights = null,
        bool $for_channels = null
    ) {
        $data = [];

        if ($rights !== null) {
            $data['rights'] = json_encode($rights);
        }

        if ($for_channels !== null) {
            $data['for_channels'] = $for_channels;
        }

        return $this->Request('setMyDefaultAdministratorRights', $data);
    }

    public function getMyDefaultAdministratorRights(
        bool $for_channels = null
    ) {
        $data = [];

        if ($for_channels !== null) {
            $data['for_channels'] = $for_channels;
        }

        return $this->Request('getMyDefaultAdministratorRights', $data);
    }

    public function editMessageText(
        $chat_id = null,
        int $message_id = null,
        string $inline_message_id = null,
        string $text = null,
        string $parse_mode = null,
        array $entities = null,
        bool $disable_web_page_preview = null,
        array $reply_markup = null
    ) {
        $data = [];

        if ($chat_id !== null) {
            $data['chat_id'] = $chat_id;
        }

        if ($message_id !== null) {
            $data['message_id'] = $message_id;
        }

        if ($inline_message_id !== null) {
            $data['inline_message_id'] = $inline_message_id;
        }

        if ($text !== null) {
            $data['text'] = $text;
        }

        if ($parse_mode !== null) {
            $data['parse_mode'] = $parse_mode;
        }

        if ($entities !== null) {
            $data['entities'] = json_encode($entities);
        }

        if ($disable_web_page_preview !== null) {
            $data['disable_web_page_preview'] = $disable_web_page_preview;
        }

        if ($reply_markup !== null) {
            $data['reply_markup'] = json_encode($reply_markup);
        }

        return $this->Request('editMessageText', $data);
    }

    public function editMessageCaption(
        $chat_id = null,
        int $message_id = null,
        string $inline_message_id = null,
        string $caption = null,
        string $parse_mode = null,
        array $caption_entities = null,
        array $reply_markup = null
    ) {
        $data = [];

        if ($chat_id !== null) {
            $data['chat_id'] = $chat_id;
        }

        if ($message_id !== null) {
            $data['message_id'] = $message_id;
        }

        if ($inline_message_id !== null) {
            $data['inline_message_id'] = $inline_message_id;
        }

        if ($caption !== null) {
            $data['caption'] = $caption;
        }

        if ($parse_mode !== null) {
            $data['parse_mode'] = $parse_mode;
        }

        if ($caption_entities !== null) {
            $data['caption_entities'] = json_encode($caption_entities);
        }

        if ($reply_markup !== null) {
            $data['reply_markup'] = json_encode($reply_markup);
        }

        return $this->Request('editMessageCaption', $data);
    }

    public function editMessageMedia(
        $chat_id = null,
        int $message_id = null,
        string $inline_message_id = null,
        array $media = null,
        array $reply_markup = null
    ) {
        $data = [];

        if ($chat_id !== null) {
            $data['chat_id'] = $chat_id;
        }

        if ($message_id !== null) {
            $data['message_id'] = $message_id;
        }

        if ($inline_message_id !== null) {
            $data['inline_message_id'] = $inline_message_id;
        }

        if ($media !== null) {
            if (is_object($media['media'])) {
                $data['upload'] = $media['media'];
                $media['media'] = 'attach://upload';
            }
            $data['media'] = json_encode($media);
        }

        if ($reply_markup !== null) {
            $data['reply_markup'] = json_encode($reply_markup);
        }

        return $this->Request('editMessageMedia', $data);
    }

    public function editMessageReplyMarkup(
        $chat_id = null,
        int $message_id = null,
        string $inline_message_id = null,
        array $reply_markup = null
    ) {
        $data = [];

        if ($chat_id !== null) {
            $data['chat_id'] = $chat_id;
        }

        if ($message_id !== null) {
            $data['message_id'] = $message_id;
        }

        if ($inline_message_id !== null) {
            $data['inline_message_id'] = $inline_message_id;
        }

        if ($reply_markup !== null) {
            $data['reply_markup'] = json_encode($reply_markup);
        }

        return $this->Request('editMessageReplyMarkup', $data);
    }

    public function stopPoll(
        $chat_id,
        int $message_id,
        array $reply_markup = null
    ) {
        $data = [
            'chat_id'    => $chat_id,
            'message_id' => $message_id
        ];

        if ($reply_markup !== null) {
            $data['reply_markup'] = json_encode($reply_markup);
        }

        return $this->Request('stopPoll', $data);
    }

    public function deleteMessage(
        $chat_id,
        int $message_id
    ) {
        $data = [
            'chat_id'    => $chat_id,
            'message_id' => $message_id
        ];

        return $this->Request('deleteMessage', $data);
    }

    public function sendSticker(
        $chat_id,
        $sticker,
        bool $disable_notification = null,
        bool $protect_content = null,
        int $reply_to_message_id = null,
        bool $allow_sending_without_reply = null,
        array $reply_markup = null,
        int $message_thread_id = null
    ) {
        $data = [
            'chat_id' => $chat_id,
            'sticker' => $sticker
        ];

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

        return $this->Request('sendSticker', $data);
    }

    public function getStickerSet(
        string $name
    ) {
        $data = [
            'name' => $name
        ];

        return $this->Request('getStickerSet', $data);
    }

    public function getCustomEmojiStickers(
        array $custom_emoji_ids
    ) {
        $data = [
            'custom_emoji_ids' => json_encode($custom_emoji_ids)
        ];

        return $this->Request('getCustomEmojiStickers', $data);
    }

    public function uploadStickerFile(
        int $user_id,
        \CURLFile $png_sticker
    ) {
        $data = [
            'user_id'     => $user_id,
            'png_sticker' => $png_sticker
        ];

        return $this->Request('uploadStickerFile', $data);
    }

    public function createNewStickerSet(
        int $user_id,
        string $name,
        string $title,
        $png_sticker = null,
        \CURLFile $tgs_sticker = null,
        \CURLFile $webm_sticker = null,
        string $sticker_type = null,
        string $emojis = null,
        array $mask_position = null
    ) {
        $data = [
            'user_id' => $user_id,
            'name'    => $name,
            'title'   => $title
        ];

        if ($png_sticker !== null) {
            $data['png_sticker'] = $png_sticker;
        }

        if ($tgs_sticker !== null) {
            $data['tgs_sticker'] = $tgs_sticker;
        }

        if ($webm_sticker !== null) {
            $data['webm_sticker'] = $webm_sticker;
        }

        if ($sticker_type !== null) {
            $data['sticker_type'] = $sticker_type;
        }

        if ($emojis !== null) {
            $data['emojis'] = $emojis;
        }

        if ($mask_position !== null) {
            $data['mask_position'] = json_encode($mask_position);
        }

        return $this->Request('createNewStickerSet', $data);
    }

    public function addStickerToSet(
        int $user_id,
        string $name,
        $png_sticker = null,
        \CURLFile $tgs_sticker = null,
        \CURLFile $webm_sticker = null,
        string $emojis = null,
        array $mask_position = null
    ) {
        $data = [
            'user_id' => $user_id,
            'name'    => $name
        ];

        if ($png_sticker !== null) {
            $data['png_sticker'] = $png_sticker;
        }

        if ($tgs_sticker !== null) {
            $data['tgs_sticker'] = $tgs_sticker;
        }

        if ($webm_sticker !== null) {
            $data['webm_sticker'] = $webm_sticker;
        }

        if ($emojis !== null) {
            $data['emojis'] = $emojis;
        }

        if ($mask_position !== null) {
            $data['mask_position'] = json_encode($mask_position);
        }

        return $this->Request('addStickerToSet', $data);
    }

    public function setStickerPositionInSet(
        string $sticker,
        int $position
    ) {
        $data = [
            'sticker'  => $sticker,
            'position' => $position
        ];

        return $this->Request('setStickerPositionInSet', $data);
    }

    public function deleteStickerFromSet(
        string $sticker
    ) {
        $data = [
            'sticker' => $sticker
        ];

        return $this->Request('deleteStickerFromSet', $data);
    }

    public function setStickerSetThumb(
        string $name,
        int $user_id,
        $thumb = null
    ) {
        $data = [
            'name'    => $name,
            'user_id' => $user_id
        ];

        if ($thumb !== null) {
            $data['thumb'] = $thumb;
        }

        return $this->Request('setStickerSetThumb', $data);
    }

    public function answerInlineQuery(
        string $inline_query_id,
        array $results,
        int $cache_time = null,
        bool $is_personal = null,
        string $next_offset = null,
        string $switch_pm_text = null,
        string $switch_pm_parameter = null
    ) {
        $data = [
            'inline_query_id' => $inline_query_id,
            'results'         => json_encode($results)
        ];

        if ($cache_time !== null) {
            $data['cache_time'] = $cache_time;
        }

        if ($is_personal !== null) {
            $data['is_personal'] = $is_personal;
        }

        if ($next_offset !== null) {
            $data['next_offset'] = $next_offset;
        }

        if ($switch_pm_text !== null) {
            $data['switch_pm_text'] = $switch_pm_text;
        }

        if ($switch_pm_parameter !== null) {
            $data['switch_pm_parameter'] = $switch_pm_parameter;
        }

        return $this->Request('answerInlineQuery', $data);
    }

    public function answerWebAppQuery(
        string $web_app_query_id,
        array $result
    ) {
        $data = [
            'web_app_query_id' => $web_app_query_id,
            'result'           => json_encode($result)
        ];

        return $this->Request('answerWebAppQuery', $data);
    }

    public function sendInvoice(
        $chat_id,
        string $title,
        string $description,
        string $payload,
        string $provider_token,
        string $currency,
        array $prices,
        int $max_tip_amount = null,
        array $suggested_tip_amounts = null,
        string $start_parameter = null,
        string $provider_data = null,
        string $photo_url = null,
        int $photo_size = null,
        int $photo_width = null,
        int $photo_height = null,
        bool $need_name = null,
        bool $need_phone_number = null,
        bool $need_email = null,
        bool $need_shipping_address = null,
        bool $send_phone_number_to_provider = null,
        bool $send_email_to_provider = null,
        bool $is_flexible = null,
        bool $disable_notification = null,
        bool $protect_content = null,
        int $reply_to_message_id = null,
        bool $allow_sending_without_reply = null,
        array $reply_markup = null,
        int $message_thread_id = null
    ) {
        $data = [
            'chat_id'        => $chat_id,
            'title'          => $title,
            'description'    => $description,
            'payload'        => $payload,
            'provider_token' => $provider_token,
            'currency'       => $currency,
            'prices'         => json_encode($prices)
        ];

        if ($max_tip_amount !== null) {
            $data['max_tip_amount'] = $max_tip_amount;
        }

        if ($suggested_tip_amounts !== null) {
            $data['suggested_tip_amounts'] = json_encode($suggested_tip_amounts);
        }

        if ($start_parameter !== null) {
            $data['start_parameter'] = $start_parameter;
        }

        if ($provider_data !== null) {
            $data['provider_data'] = $provider_data;
        }

        if ($photo_url !== null) {
            $data['photo_url'] = $photo_url;
        }

        if ($photo_size !== null) {
            $data['photo_size'] = $photo_size;
        }

        if ($photo_width !== null) {
            $data['photo_width'] = $photo_width;
        }

        if ($photo_height !== null) {
            $data['photo_height'] = $photo_height;
        }

        if ($need_name !== null) {
            $data['need_name'] = $need_name;
        }

        if ($need_phone_number !== null) {
            $data['need_phone_number'] = $need_phone_number;
        }

        if ($need_email !== null) {
            $data['need_email'] = $need_email;
        }

        if ($need_shipping_address !== null) {
            $data['need_shipping_address'] = $need_shipping_address;
        }

        if ($send_phone_number_to_provider !== null) {
            $data['send_phone_number_to_provider'] = $send_phone_number_to_provider;
        }

        if ($send_email_to_provider !== null) {
            $data['send_email_to_provider'] = $send_email_to_provider;
        }

        if ($is_flexible !== null) {
            $data['is_flexible'] = $is_flexible;
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

        return $this->Request('sendInvoice', $data);
    }

    public function createInvoiceLink(
        string $title,
        string $description,
        string $payload,
        string $provider_token,
        string $currency,
        array $prices,
        int $max_tip_amount = null,
        array $suggested_tip_amounts = null,
        string $provider_data = null,
        string $photo_url = null,
        int $photo_size = null,
        int $photo_width = null,
        int $photo_height = null,
        bool $need_name = null,
        bool $need_phone_number = null,
        bool $need_email = null,
        bool $need_shipping_address = null,
        bool $send_phone_number_to_provider = null,
        bool $send_email_to_provider = null,
        bool $is_flexible = null
    ) {
        $data = [
            'title'          => $title,
            'description'    => $description,
            'payload'        => $payload,
            'provider_token' => $provider_token,
            'currency'       => $currency,
            'prices'         => json_encode($prices)
        ];

        if ($max_tip_amount !== null) {
            $data['max_tip_amount'] = $max_tip_amount;
        }

        if ($suggested_tip_amounts !== null) {
            $data['suggested_tip_amounts'] = json_encode($suggested_tip_amounts);
        }

        if ($provider_data !== null) {
            $data['provider_data'] = $provider_data;
        }

        if ($photo_url !== null) {
            $data['photo_url'] = $photo_url;
        }

        if ($photo_size !== null) {
            $data['photo_size'] = $photo_size;
        }

        if ($photo_width !== null) {
            $data['photo_width'] = $photo_width;
        }

        if ($photo_height !== null) {
            $data['photo_height'] = $photo_height;
        }

        if ($need_name !== null) {
            $data['need_name'] = $need_name;
        }

        if ($need_phone_number !== null) {
            $data['need_phone_number'] = $need_phone_number;
        }

        if ($need_email !== null) {
            $data['need_email'] = $need_email;
        }

        if ($need_shipping_address !== null) {
            $data['need_shipping_address'] = $need_shipping_address;
        }

        if ($send_phone_number_to_provider !== null) {
            $data['send_phone_number_to_provider'] = $send_phone_number_to_provider;
        }

        if ($send_email_to_provider !== null) {
            $data['send_email_to_provider'] = $send_email_to_provider;
        }

        if ($is_flexible !== null) {
            $data['is_flexible'] = $is_flexible;
        }

        return $this->Request('createInvoiceLink', $data);
    }

    public function answerShippingQuery(
        string $shipping_query_id,
        bool $ok,
        array $shipping_options = null,
        string $error_message = null
    ) {
        $data = [
            'shipping_query_id' => $shipping_query_id,
            'ok'                => $ok
        ];

        if ($shipping_options !== null) {
            $data['shipping_options'] = json_encode($shipping_options);
        }

        if ($error_message !== null) {
            $data['error_message'] = $error_message;
        }

        return $this->Request('answerShippingQuery', $data);
    }

    public function answerPreCheckoutQuery(
        string $pre_checkout_query_id,
        bool $ok,
        string $error_message = null
    ) {
        $data = [
            'pre_checkout_query_id' => $pre_checkout_query_id,
            'ok'                    => $ok
        ];

        if ($error_message !== null) {
            $data['error_message'] = $error_message;
        }

        return $this->Request('answerPreCheckoutQuery', $data);
    }

    public function setPassportDataErrors(
        int $user_id,
        array $errors
    ) {
        $data = [
            'user_id' => $user_id,
            'errors'  => json_encode($errors)
        ];

        return $this->Request('setPassportDataErrors', $data);
    }

    public function sendGame(
        int $chat_id,
        string $game_short_name,
        bool $disable_notification = null,
        bool $protect_content = null,
        int $reply_to_message_id = null,
        bool $allow_sending_without_reply = null,
        array $reply_markup = null,
        int $message_thread_id = null
    ) {
        $data = [
            'chat_id'         => $chat_id,
            'game_short_name' => $game_short_name
        ];

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

        return $this->Request('sendGame', $data);
    }

    public function setGameScore(
        int $user_id,
        int $score,
        bool $force = null,
        bool $disable_edit_message = null,
        int $chat_id = null,
        int $message_id = null,
        string $inline_message_id = null
    ) {
        $data = [
            'user_id' => $user_id,
            'score'   => $score
        ];

        if ($force !== null) {
            $data['force'] = $force;
        }

        if ($disable_edit_message !== null) {
            $data['disable_edit_message'] = $disable_edit_message;
        }

        if ($chat_id !== null) {
            $data['chat_id'] = $chat_id;
        }

        if ($message_id !== null) {
            $data['message_id'] = $message_id;
        }

        if ($inline_message_id !== null) {
            $data['inline_message_id'] = $inline_message_id;
        }

        return $this->Request('setGameScore', $data);
    }

    public function getGameHighScores(
        int $user_id,
        int $chat_id = null,
        int $message_id = null,
        string $inline_message_id = null
    ) {
        $data = [
            'user_id' => $user_id
        ];

        if ($chat_id !== null) {
            $data['chat_id'] = $chat_id;
        }

        if ($message_id !== null) {
            $data['message_id'] = $message_id;
        }

        if ($inline_message_id !== null) {
            $data['inline_message_id'] = $inline_message_id;
        }

        return $this->Request('getGameHighScores', $data);
    }
}
