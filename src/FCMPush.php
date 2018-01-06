<?php

namespace Sab94\FCMPush;

class FCMPush
{
    public static function sendPush($tokens,$message)
    {
        $url = config('push.url');
        $fields = array(
            'registration_ids' => $tokens,
            'data' => $message
        );
        $headers = array(
            'Authorization:key = '.config('push.authorization:key'),
            'Content-Type: '.config('push.content-type')
        );
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
        $result = curl_exec($ch);
        //Print error if any
        if (curl_errno($ch)) {
            curl_close($ch);
            return  "Send Push Failed";

        } else {
            curl_close($ch);
            return $result;
        }


    }

}
