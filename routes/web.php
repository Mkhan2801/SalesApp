<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\TellyController;
use App\Http\Controllers\PuchaseController;


Route::get('/', [UserController::class,'Index'])->name("login");

Route::post('/addUser', [UserController::class,'addUser']);
Route::post('/singIn', [UserController::class,'singIn']);
Route::get('/singOut', [UserController::class,'singOut']);


Route::get('/employee', [EmployeeController::class,'employee']);

Route::get('/sales', [SalesController::class,'salesPage']);
Route::get('/salesData', [SalesController::class,'salesData']);
Route::post('/sales', [SalesController::class,'salesAdd']);

Route::get('/purchase', [PuchaseController::class,'purchasePage']);
Route::post('/purchase', [PuchaseController::class,'purchaseAdd']);




Route::get('/tally', [TellyController::class,'tally']);
Route::get('/inventory', [TellyController::class,'inventoryPage']);
