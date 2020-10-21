<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

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
