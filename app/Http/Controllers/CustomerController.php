<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Mobile,Customer};

class CustomerController extends Controller
{
    //
    function add_customer(){
        $mobile= new Mobile();
        $mobile->model= "iphone10";

        $customer = new Customer();
        $customer->name="roman";
        $customer->email="roman.shaon@gmailc.com";
        $customer->save();
        $customer->mobile()->save($mobile);
    }
}
