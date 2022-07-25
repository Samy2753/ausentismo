<?php

use App\Http\Controllers\Administrador\RoleController;
use Illuminate\Support\Facades\Route;
//USAR EL USERCONTROLLER
use App\Http\Controllers\Administrador\UserController;
//Rutas para la funcionalidad de la gestion de usuarios
Route::resource('users' ,Usercontroller::class)->names('administrador.users');

//Rutas para la funcionalidad de la gestion de Roles
Route::resource('roles' ,RoleController::class)->names('administrador.roles');
