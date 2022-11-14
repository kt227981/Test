<?php

use App\Models\User;
use App\Models\admin\Notification;


if (!function_exists('notification_count')) {
    function notification_count()
    {
        $notifications = Notification::where('read_at',null)->where('id','!=',1)->count();
        if ($notifications) {
            return $notifications;
        }
    }
}
