<?php

namespace Telegram;

interface ApiInterface
{
    function Request(string $method, array $data);
}
