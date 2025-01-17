<?php

namespace App\Helpers;

class NotifyHelper
{
    public static function addNotification($type, $message)
    {
        $notify[] = [$type, $message];
        return $notify;
    }
}