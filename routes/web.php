<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\TellyController;
use App\Http\Controllers\PuchaseController;


Route::get('/', [UserController::class,'Index'])->name("login");

Route::post('/singIn', [UserController::class,'singIn']);
Route::get('/singOut', [UserController::class,'singOut']);


Route::post('/employeeAdd', [UserController::class,'addEmployee']);

Route::post('/sales', [SalesController::class,'salesAdd']);
Route::get('/sales', [SalesController::class,'salesPage']);
Route::get('/crPay/{saleId}', [SalesController::class,'payment']);
Route::get('/expendsale/{saleId}', [SalesController::class,'expendSale']);


Route::get('/purchase', [PuchaseController::class,'purchasePage']);
Route::get('/expendpur/{purchaseId}', [PuchaseController::class,'expendPur']);
Route::post('/purchase', [PuchaseController::class,'purchaseAdd']);

Route::get('/inventory', [TellyController::class,'inventoryPage']);
Route::post('/addMenu', [TellyController::class,'menuAdd']);
Route::post('/addCash', [TellyController::class,'cashAdd']);


Route::get('/tally', [TellyController::class,'tally']);



Route::get('/dataEmployee', [DataController::class,'employeeData']);
Route::get('/salesData', [DataController::class,'dataSale']);
Route::get('/inventoryData', [DataController::class,'inventoryData']);
Route::get('/cashData', [DataController::class,'dataCash']);
Route::get('/purchaseData', [DataController::class,'purchaseData']);
Route::get('/salesItem', [DataController::class,'salesItems']);
