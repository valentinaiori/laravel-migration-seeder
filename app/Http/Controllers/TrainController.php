<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Train;
class TrainController extends Controller
{
    //
    public function getTrains(){
        $trains = Train::where('data_di_partenza', '>=', '2020-12-07')->get();
        return view('home-trains', compact('trains'));
    }
}
