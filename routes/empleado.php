<?php


use App\Http\Controllers\Empleado\EmployeeController;
use Illuminate\Support\Facades\Route;
//Rutas para la funcionalidad de la gestion de empleados

Route::resource('employees',EmployeeController::class);//->names|('empleado.employees');
