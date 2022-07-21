<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Employee;
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
        'status' => '1'])->assignRole('Administrador');

        User::create
        ([
         'name' => 'Camilo',
         'email' => 'camilo@admin.com',
         'password' => bcrypt('123'),
         'status' => '1'])->assignRole('Administrador');

         Employee::create
         ([
         'FirstName' => 'Camilo',
         'LastName' => '38',
         'DocumentType'=>'CC',
         'DocumentNumber'=>'12345678',
         'BaseSalary'=>'3000000',
         'SalaryDay'=>'35000',
         'Position'=>'Soporte',
         'Department'=>'Soporte',
         'EPS'=>'Sura',
         'AFD'=>'Comfama',
         'ARL'=>'Sura',
         'Status' => '1',


         ]);

    }
}
