<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Eloquentorm;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Notifications\EmailNotification;
use Illuminate\Support\Facades\Notification;
// use Illuminate\Support\Facades\Cache;
class EloquentormController extends Controller
{
    
    function index(){
        $customer= Eloquentorm::simplePaginate(15);
        return view('welcome',['customer'=>$customer]);
    }




    // Cache Retrieve & Store Eloquentorm ORM
    // function index(){
    //     $customer=Cache()->rememberForever('customer', 
    //     function () {
    //         return Eloquentorm::all();
    //     });
    //     return view('welcome',['customer'=>$customer]);
    // }



    // Cache Retrieve & Store Query Builder
    // function index(){
    //     $customer=cache()->rememberForever('customer', 
    //     function () {
    //         return DB::table('eloquentorms')->get();
    //     });
    //     return view('welcome',['customer'=>$customer]);
    // }

    // Using The Notifiable Trait
    //single mail notify 
    // function sendNotificationController(){
    //     $customer= Eloquentorm::find(4);
    //     $customer->notify(new EmailNotification());
    //     return redirect()->back();
    // }


    // single mail Notification facade
    // function sendNotificationController(){
    //     $customer= Eloquentorm::find(1);
    //      Notification::send($customer, new EmailNotification());
    //     return redirect()->back();
    // }


    // Multiple mail Notification facade/ 60 second time out mail notification
    // function sendNotificationController(){
    //     $customer = Eloquentorm::all();
    //     foreach($customer as $value){
    //        Notification::send($value, new EmailNotification()); 
    //     }
    //     return redirect()->back();
    // }


}

