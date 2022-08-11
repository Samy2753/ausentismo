<?php
use App\Http\Controllers\Administrador\AbsenteeismController;
use App\Http\Controllers\Administrador\EmployeeController;
use App\Http\Controllers\Administrador\RoleController;
use App\Http\Controllers\Administrador\UserController;

use Illuminate\Support\Facades\Route;

//Rutas para la funcionalidad de la gestion de usuarios
Route::resource('users' ,Usercontroller::class)->names('administrador.users');

//Rutas para la funcionalidad de la gestion de Roles
Route::resource('roles' ,RoleController::class)->names('administrador.roles');
//Rutas para la funcionalidad de la gestion de Empleados
Route::resource('employees' ,EmployeeController::class)->names('administrador.employees');
//Rutas para la funcionalidad de la gestion de incapacidades
Route::resource('absenteeism' ,AbsenteeismController::class)->names('administrador.absenteeism');

//Rutas para la funcionalidad del pdf
Route::get('administrador/users/pdf',[App\Http\Controllers\Administrador\UserController::class, 'pdf'] )->name('administrador.users.pdf');
Route::get('empleado/employees/pdf',[App\Http\Controllers\Empleado\EmployeeController::class, 'pdf'] )->name('empleado.employees.pdf');
