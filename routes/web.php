<?php

use App\Http\Controllers\DivisionController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PayrollController;
use App\Http\Controllers\PositionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.dashboard');
});

Route::get('/employee', [EmployeeController::class, 'index']);
Route::get('/employee/create', [EmployeeController::class, 'create']);
Route::get('/employee/{id}', [EmployeeController::class, 'edit']);
Route::post('/employee', [EmployeeController::class, 'store']);
Route::put('/employee/{id}', [EmployeeController::class, 'update']);
Route::delete('/employee/{id}', [EmployeeController::class, 'destroy']);

Route::get('/division', [DivisionController::class, 'index']);
Route::get('/division/create', [DivisionController::class, 'create']);
Route::get('/division/{id}', [DivisionController::class, 'edit']);
Route::post('/division', [DivisionController::class, 'store']);
Route::put('/division/{id}', [DivisionController::class, 'update']);
Route::delete('/division/{id}', [DivisionController::class, 'destroy']);

Route::get('/position', [PositionController::class, 'index']);
Route::get('/position/create', [PositionController::class, 'create']);
Route::get('/position/{id}', [PositionController::class, 'edit']);
Route::post('/position', [PositionController::class, 'store']);
Route::put('/position/{id}', [PositionController::class, 'update']);
Route::delete('/position/{id}', [PositionController::class, 'destroy']);

Route::get('/payroll', [PayrollController::class, 'index']);
Route::get('/payroll/create', [PayrollController::class, 'create']);
Route::get('/payroll/{id}', [PayrollController::class, 'show']);
Route::post('/payroll', [PayrollController::class, 'store']);
