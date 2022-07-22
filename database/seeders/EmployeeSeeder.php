<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Employee;

class EmployeeSeeder extends Seeder
{

    public function run()
    {
        Employee::create
        ([
        'FirstName' => 'Camilo',
        'LastName' => '38',
        'DocumentType'=>'CC',
        'DocumentNumber'=>'12345678',
        'BaseSalary'=>'3000000',
        'SalaryDay'=>'35000',
        'Position'=>'Desarrollador',
        'Department'=>'Desarrollo web',
        'EPS'=>'Sura',
        'AFP'=>'Comfama',
        'ARL'=>'Sura',
        'Status' => '1',

        ]);

        Employee::create
        ([
        'FirstName' => 'Federico',
        'LastName' => 'Luna',
        'DocumentType'=>'CC',
        'DocumentNumber'=>'12345678',
        'BaseSalary'=>'1000000',
        'SalaryDay'=>'30000',
        'Position'=>'Cargue',
        'Department'=>'Logistica',
        'EPS'=>'Sura',
        'AFP'=>'Porvenir',
        'ARL'=>'Sura',
        'Status' => '1',

        ]);
    }
}
