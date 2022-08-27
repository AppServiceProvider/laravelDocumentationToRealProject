<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{AuthorController, AuthorpostController, IndexController};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/add_author',[AuthorController::class, 'add_author']);
Route::get('/add-post/{id}',[AuthorpostController::class, 'add_post']);


Route::get('/show-post/{id}',[AuthorpostController::class, 'show_post']);

// Show Author all data 
Route::get('/show-all-data/{id}',[IndexController::class, 'index']);
