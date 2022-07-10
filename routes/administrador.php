<?php

use App\Http\Controllers\Administrador\userController;
use Illuminate\Support\Facades\Route;

//Rutas para la gestion de usuarios
Route::resource('users',UserController::class)->names('administrador.users');

