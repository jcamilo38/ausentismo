<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use PharIo\Manifest\Email;

class UserSeeder extends Seeder
{

    public function run()
    {
       User::create
       ([
        'name' => 'Admin',
        'email' => 'admin@admin.com',
        'password' => bcrypt('123'),
        'status' => '1']);

        User::create
        ([
         'name' => 'Camilo',
         'email' => 'camilo@admin.com',
         'password' => bcrypt('123'),
         'status' => '1']);

    }
}
