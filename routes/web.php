<?php

use Illuminate\Support\Facades\Route;
use App\Notifications\EmailNotification;
use App\Models\User;
use Illuminate\Support\Facades\Notification;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\EloquentormController::class, 'index']);

Route::get('/send-notification', [App\Http\Controllers\EloquentormController::class, 'sendNotificationController'])->name('sendNotification');

// Route::get('/send-notification', function(){
//     $customer= User::find(1);
//     $customer->notify(new EmailNotification());
//     return redirect()->back();
// });
