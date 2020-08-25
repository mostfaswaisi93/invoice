<?php

use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingsTableSeeder extends Seeder
{
    public function run()
    {
        Setting::create([
            'name'              => '',
            'title'             => '',
            'value'             => '',
            'type'              => '',
            'sorting_number'    => '',
        ]);
    }
}
