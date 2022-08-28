<?php

namespace App\Http\Controllers;
use App\Models\Machanic;
use Illuminate\Http\Request;

class MachanicController extends Controller
{
    //
    function add_machanic(){
        $mechanic = new Machanic();
        $mechanic ->name ='toothless';
        $mechanic ->save();
    }
}
