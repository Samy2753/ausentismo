<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Administrador\AbsenteeismController;

Route::resource('absenteeism' ,AbsenteeismController::class);
