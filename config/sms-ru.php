<?php

return [
    // Подробнее тут https://sms.ru/api/send
    'api_key' => env('SMS_RU_API_KEY'),
    'login' => env('SMS_RU_LOGIN'),
    'password' => env('SMS_RU_PASSWORD'),
    'from' => env('SMS_RU_FROM'),
    'ttl' => env('SMS_RU_TLL', 60),
    'translit' => env('SMS_RU_TRANSLIT', 1),
    'test' => env('SMS_RU_TEST', 1),
    'partner_id' => env('SMS_RU_PARTNER_ID'),
];
