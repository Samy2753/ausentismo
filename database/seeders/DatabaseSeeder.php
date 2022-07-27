<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //Metodo para llamar al seeder y ejecutarlo
        $this->call(RoleSeeder::class);
        $this->call(EmployeeSeeder::class);
        $this->call(UserSeeder::class);


    }
}
