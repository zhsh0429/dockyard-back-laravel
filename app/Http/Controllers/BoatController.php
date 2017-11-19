<?php

namespace App\Http\Controllers;

use App\Boat;
use Illuminate\Http\Request;

class BoatController extends Controller
{
    public function getBoats(){
        $boats = Boat::all();
        return response()->json($boats, 200);
    }
}
