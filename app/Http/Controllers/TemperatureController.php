<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemperatureController extends Controller
{
    public function index(){
        return view('temperature', ["temp" => 0, "finalTemp" => 0]);
    }

    public function show(Request $request){
        $temp = $request->input('temp');
        $final = ((int)$temp - 32) * 5/9;
        $final = number_format((float)$final, 2, '.', '');  
        return view("temperature", ["temp" => $temp, "finalTemp" => $final]);
    }
}
