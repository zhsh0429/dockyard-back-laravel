<?php

namespace App\Http\Controllers;

use App\Boat;

class BoatController extends Controller
{
    public function getBoats(){
        $boats = Boat::all();
        return response()->json($boats, 200);
    }

    public function getBoatById($id){
        $boat = Boat::find($id);
        $workers = Boat::find($id)->workers()->orderBy('id')->get();
        return response()->json(["boat_information" => $boat, "worker_information" => $workers], 200);
    }
}
