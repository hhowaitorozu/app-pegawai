<?php

use App\Http\Controllers\DepartmentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PositionController;

Route::resource('employees', EmployeeController::class);
Route::resource('departments', DepartmentController::class);
Route::resource('positions', PositionController::class);
// Route::resource('salaries', SalaryController::class);
// Route::resource('attendances', AttendanceController::class);
Route::get('/', function () {
    return redirect('/employees');
});
