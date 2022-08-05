<?php

namespace Database\Seeders;

use App\Models\Absenteeism;
use Illuminate\Database\Seeder;

class AbsenteeismSeeder extends Seeder
{

    public function run()
    {
    Absenteeism::create
    ([
        'name' => 'Sebastian Florez',
        'start_date' => '2022-06-08',
        'start_date' => '2022-06-20',
        'clasificacion' => 'Inicial',
        'Employee_id' => '2',

        ]);




    }
}

