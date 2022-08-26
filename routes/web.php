<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{UserController, CustomerController, MobileController};



Route::get('/', function () {
    return view('welcome');
});
Route::get('/user', [UserController::class, 'index']);

Route::get('/add-customer', [CustomerController::class, 'add_customer']);



Route::get('/show-customer/{id}', [CustomerController::class, 'show_mobile']);

Route::get('/show-mobile/{id}', [MobileController::class, 'show_customer']);
