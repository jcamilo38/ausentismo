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
        'FirstName' => 'Admin',
        'LastName' => 'Admin',
        'DocumentType'=>'CC',
        'DocumentNumber'=>'12345678',
        'BaseSalary'=>'9999',
        'SalaryDay'=>'0',
        'Position'=>'N/A',
        'Department'=>'N/A',
        'EPS'=>'N/A',
        'AFP'=>'N/A',
        'ARL'=>'N/A',
        'Status' => '0',

        ]);

        /* Employee::create
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

        ]); */
    }
}
