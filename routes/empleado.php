<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Empleado\EmployeeController;

//Rutas para la funcionalidad de la gestion de empleados


Route::resource('employees', EmployeeController::class)->names('empleado.employees');
