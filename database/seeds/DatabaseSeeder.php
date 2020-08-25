<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(InvoicesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        // $this->call(SettingsTableSeeder::class);
    }
}
