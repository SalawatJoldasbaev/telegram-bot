<?php

namespace Telegram;

class Telegram extends Api
{
    public $easy;
    private $endpoint;
    private $curl;

    public function __construct(
        string $token = null,
        string $endpoint = "https://api.telegram.org/bot",
    ) {
        $this->endpoint = $endpoint . $token . "/";
        $this->curl = curl_init();
        curl_setopt_array($this->curl, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST           => true,
            CURLOPT_FORBID_REUSE   => true,
            CURLOPT_HEADER         => false,
            CURLOPT_TIMEOUT        => 120,
            CURLOPT_CONNECTTIMEOUT => 2,
            CURLOPT_HTTPHEADER     => ["Connection: Keep-Alive", "Keep-Alive: 120"],
        ]);
    }

    public function Request(string $method, $data = []): \stdClass
    {
        curl_setopt_array($this->curl, [
            CURLOPT_URL        => $this->endpoint . $method,
            CURLOPT_POSTFIELDS => empty($data) ? null : $data,
        ]);

        $resultCurl = curl_exec($this->curl);
        if ($resultCurl === false) {
            $arr = [
                "ok"          => false,
                "error_code"  => curl_errno($this->curl),
                "description" => curl_error($this->curl),
                "curl_error"  => true
            ];
            $resultCurl = json_encode($arr);
        }
        $resultJson = json_decode($resultCurl);
        if ($resultJson === null) {
            $arr = [
                "ok"          => false,
                "error_code"  => json_last_error(),
                "description" => json_last_error_msg(),
                "json_error"  => true
            ];
            $resultJson = json_decode(json_encode($arr));
        }
        return $resultJson;
    }

    public function getWebhook()
    {
        return $this->Request('getWebhookInfo');
    }

    public function getUpdate(): ?\stdClass
    {
        $update = json_decode(file_get_contents("php://input"));
        $this->easy = new EasyVars($update);
        return $update;
    }
}
