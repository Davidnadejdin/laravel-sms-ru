<?php
namespace DavidNadejdin\SmsRu\Channels;
use DavidNadejdin\SmsRu\Facades\SmsRu;
use Illuminate\Notifications\Notification;

class SmsRuChannel
{

    public function send($notifiable, Notification $notification)
    {
        $data = $notification->toSms($notifiable);

        SmsRu::send([$data['phone']], $data['message']);
    }
}
