<?php
use App\Http\Controllers\Administrador\EmployeeController;
use App\Http\Controllers\Administrador\RoleController;
use App\Http\Controllers\Administrador\UserController;
use App\Http\Controllers\Administrador\IncapacityController;
use Illuminate\Support\Facades\Route;

//Rutas para la funcionalidad de la gestion de usuarios
Route::resource('users' ,Usercontroller::class)->names('administrador.users');

//Rutas para la funcionalidad de la gestion de Roles
Route::resource('roles' ,RoleController::class)->names('administrador.roles');
//Rutas para la funcionalidad de la gestion de Empleados
Route::resource('employees' ,EmployeeController::class)->names('administrador.employees');
//Rutas para la funcionalidad de la gestion de incapacidades
Route::resource('incapacities' ,IncapacityController::class)->names('administrador.incapacities');
