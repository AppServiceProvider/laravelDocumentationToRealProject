<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Eloquentorm;
use Illuminate\Support\Facades\DB;

class EloquentormController extends Controller
{
    
    // function index(){
    //     $customer= Eloquentorm::all();
    //     return view('welcome',['customer'=>$customer]);
    // }




    // Cache Retrieve & Store Eloquentorm ORM
    // function index(){
    //     $customer=cache()->rememberForever('customer', 
    //     function () {
    //         return Eloquentorm::all();
    //     });
    //     return view('welcome',['customer'=>$customer]);
    // }



    // Cache Retrieve & Store Query Builder
    function index(){
        $customer=cache()->rememberForever('customer', 
        function () {
            return DB::table('eloquentorms')->get();
        });
        return view('welcome',['customer'=>$customer]);
    }
}
