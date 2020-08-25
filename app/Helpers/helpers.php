<?php

use \App\Models\Setting as setting;

if (!function_exists('getSettings')) {
    function getSettings($name = 'site_title')
    {
        $setting = setting::where('name', $name)->first();
        return $setting == null ? $name : $setting->real_value;
    }
}
