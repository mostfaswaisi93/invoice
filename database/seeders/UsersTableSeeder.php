<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name'          => 'admin',
            'username'      => 'admin',
            'email'         => 'admin@admin.com',
            'password'      => bcrypt('password'),
            'created_at'    => date('Y-m-d'),
            'updated_at'    => date('Y-m-d')
        ]);
    }
}
