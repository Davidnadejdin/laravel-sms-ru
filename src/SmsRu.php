<?php

namespace DavidNadejdin\SmsRu;

use Illuminate\Support\Facades\Http;

class SmsRu
{

    public function send(array $phones, string $msg)
    {
        $baseUrl = "https://sms.ru/sms/send?";

        $params = [];

        if (config('sms-ru.api_key')) {
            $params[] = 'api_id=' . config('sms-ru.api_key');
        } elseif(config('sms-ru.login') && config('sms-ru.password')) {
            $params[] = 'login=' . config('sms-ru.login');
            $params[] = 'password=' . config('sms-ru.password');
        }

        $params[] = 'json=1';

        $params[] = 'to=' . implode(',', $phones);

        $params[] = 'msg=' . $msg;

        $params[] = 'from=' . config('sms-ru.from');

        if (config('sms-ru.ttl')) {
            $params[] = "ttl=" . config('sms-ru.ttl');
        }

        if (config('sms-ru.translit')) {
            $params[] = "translit=" . config('sms-ru.translit');
        }

        if (config('sms-ru.test')) {
            $params[] = "test=" . config('sms-ru.test');
        }

        if (config('sms-ru.partner_id')) {
            $params[] = "partner_id=" . config('sms-ru.partner_id');
        }

        $url = $baseUrl . implode('&', $params);

        return Http::post($url)->json();
    }
}
