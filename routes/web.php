<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{MachanicController, CarController, OwnerController};
 

Route::get('/', function () {
    return view('welcome');
});
Route::get('/add-machanic', [MachanicController::class, 'add_machanic']);

Route::get('/add-car/{id}', [CarController::class, 'add_car']);

Route::get('/add-owner/{id}', [OwnerController::class, 'add_owner']);


Route::get('/show-owner/{id}', [OwnerController::class, 'show_owner']);
