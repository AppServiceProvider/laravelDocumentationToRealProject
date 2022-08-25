<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Mobile,Customer};

class CustomerController extends Controller
{
    //
    function add_customer(){
        $mobile= new Mobile();
        $mobile->model= "samsung";

        $customer = new Customer();
        $customer->name="sunjid";
        $customer->email="sunjid@gmailc.com";
        $customer->save();
        $customer->mobile()->save($mobile);
    }
    function show_mobile($id){
        $mobile= Customer::find($id)->mobile;
        return $mobile;
    }
}
