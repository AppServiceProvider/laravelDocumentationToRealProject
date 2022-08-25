<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{UserController, CustomerController};



Route::get('/', function () {
    return view('welcome');
});
Route::get('/user', [UserController::class, 'index']);

Route::get('/add-customer', [CustomerController::class, 'add_customer']);
