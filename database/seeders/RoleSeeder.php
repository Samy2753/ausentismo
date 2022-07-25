<?php

namespace Database\Seeders;

use CreatePermissionTables;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //CREAR ROL
    $admin = Role::Create(['name' => 'ADMINISTRADOR']);

       //$basico = Role::Create(['name' => 'BASICO']);
       //Permisos para el Rol Administrativo

    Permission::Create(['name' => 'administrador.users.index', 'description' => 'Ver Usuarios']) ->syncRoles([$admin]);
    Permission::Create(['name' => 'administrador.users.create', 'description' => 'Crear Usuarios']) ->syncRoles([$admin]);
    }
}
