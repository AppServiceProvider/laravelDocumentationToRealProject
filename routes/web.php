<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api;


// Route::get('/','Profile@list');
Route::get('/api-data-fatch', [App\Http\Controllers\Api::class, 'list']);
