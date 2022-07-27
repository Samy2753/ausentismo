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
        'Name' => 'Samy',
        'LastName' => '40',
        'DocumentType'=>'CC',
        'DocumentNumber'=>'43254605',
        'PhoneNumber'=>'3147963817',
        'BaseSalary'=>'3000000',
        'SalaryDay'=>'35000',
        'Position'=>'Asistente',
        'Department'=>'Desarrollo web',
        'EPS'=>'Sura',
        'AFP'=>'Comfama',
        'ARL'=>'Sura',
        'Status' => '1',

        ]);

        Employee::create
        ([
        'Name' => 'Sebastian',
        'LastName' => 'Florez',
        'DocumentType'=>'CC',
        'DocumentNumber'=>'1020495446',
        'PhoneNumber'=>'3012553067',
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
