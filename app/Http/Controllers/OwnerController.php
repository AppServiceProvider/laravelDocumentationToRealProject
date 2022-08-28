<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Owner;
use App\Models\Car;
use App\Models\Machanic;

class OwnerController extends Controller
{
    //
    public function add_owner($id){
        $car=Car::find($id);
        $owner= new Owner();
        $owner->name= 'salman';
        $owner->email= 'salman@gmail.com';
        $car->owner()->save($owner);
    }



    
    public function show_owner($id){
        // $owner= Machanic::find($id)->car->owner; 
        $owner= Machanic::find($id)->owner; //hasOneThrough
        return $owner;
    }
}
