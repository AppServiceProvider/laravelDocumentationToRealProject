<?php

namespace App\Http\Controllers;
use App\Models\Machanic;
use App\Models\Car;
use App\Models\Woner;

use Illuminate\Http\Request;

class CarController extends Controller
{
    //
    function add_car($id){
        $mechanic = Machanic::find($id);
        $car= new Car();
        $car->carModel="farari";
        $mechanic->car()->save($car);
    }
}
