<?php

use App\Models\ApplicationSetting;
use App\Models\User;

if (!function_exists('generalSettings')) {
    function generalSettings()
    {
        $application = ApplicationSetting::latest()->first();
        return $application;
    }
}

if (!function_exists('user')) {
    function user($id)
    {
        $users = User::auth()->user();
        return $users;
    }
}
