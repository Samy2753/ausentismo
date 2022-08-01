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
        $basico = Role::Create(['name' => 'BASICO']);
         //$basico = Role::Create(['name' => 'BASICO']);
         //Permisos para el Rol Administrativo

        Permission::Create(['name' => 'administrador.users.index', 'description' => 'Ver Usuarios']) ->syncRoles([$admin, $basico]);
        Permission::Create(['name' => 'administrador.users.create', 'description' => 'Crear Usuarios']) ->syncRoles([$admin]);
        Permission::Create(['name' => 'administrador.users.edit', 'description' => 'Editar Usuarios']) ->syncRoles([$admin]);
        Permission::Create(['name' => 'administrador.users.destroy', 'description' => 'Eliminar Usuarios']) ->syncRoles([$admin]);

        Permission::Create(['name' => 'administrador.roles.index', 'description' => 'Ver Roles']) ->syncRoles([$admin, $basico]);
        Permission::Create(['name' => 'administrador.roles.create', 'description' => 'Crear Roles']) ->syncRoles([$admin]);
        Permission::Create(['name' => 'administrador.roles.edit', 'description' => 'Editar Roles']) ->syncRoles([$admin]);
        Permission::Create(['name' => 'administrador.roles.destroy', 'description' => 'Eliminar Roles']) ->syncRoles([$admin]);


         //Permisos para Rol Basico
        Permission::Create(['name' => 'empleado.employees.index', 'description' => 'Ver empleados']) ->syncRoles([$admin, $basico]);
        Permission::Create(['name' => 'empleado.employees.create', 'description' => 'Crear empleados']) ->syncRoles($admin,$basico);
        Permission::Create(['name' => 'empleado.employees.edit', 'description' => 'Editar empleados']) ->syncRoles($admin,$basico);
        Permission::Create(['name' => 'empleado.employees.destroy', 'description' => 'Eliminar empleados']) ->syncRoles($admin);

    
    }
}
