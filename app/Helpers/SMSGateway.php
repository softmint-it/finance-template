<?php

namespace App\Helpers;

class SMSGateway
{
    public static function send($mobilenumber, $msg)
    {
        $msg = "Hello! ";

                    $url = "https://dashboard.smsapi.lk/api/v3/sms/send";
                    $header = [
                        "Authorization: Bearer 143|YRfx0Q4Eb7Q4UTLnfiWhi19uxIgJMMhN8JZuuchT",
                        "Content-Type: application/json",
                        "Accept: application/json"
                    ];
                    $params = json_encode([
                        "recipient" => $mobilenumber,
                        "sender_id" => "Easy Lease",
                        "type" => "plain",
                        "message" => strip_tags($msg)
                    ]);

                    $ch = curl_init();
                    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
                    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
                    curl_setopt($ch, CURLOPT_URL, $url);
                    curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

                    $result = curl_exec($ch);
                    curl_close($ch);

                    return response()->json(["status"=>1 ,"message"=>"Resent Successfully" , "result"=>$result ],201);
    }
}