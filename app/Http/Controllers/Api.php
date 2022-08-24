<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Api extends Controller
{
    //
    // function apiGet(){
    //    $res= Http::get('https://jsonplaceholder.typicode.com/posts')->json();
    // //    dd($res->collect());
    // return view('welcome',['data'=>$res]);
    // }

    function list(){
        $data = Http::get('https://blog.donorbd.com/api/users')->json();
        return view('api-data-fatch',['data'=>$data]);
        // return response(view('profiles',array('data'=>$data)),200, ['Content-Type' => 'application/json']);
    }
}
