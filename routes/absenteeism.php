<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Administrador\AbsenteeismController;
use App\Models\absenteeism;

Route::get('administrador/absenteeism/pdf',[App\Http\Controllers\Administrador\AbsenteeismController::class, 'pdf'] )->name('administrador.absenteeism.pdf');



Route::resource('absenteeism',AbsenteeismController::class);
