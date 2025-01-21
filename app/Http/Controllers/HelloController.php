<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

class HelloController extends Controller
{
    function Index(Request $request) : \Illuminate\View\View {
        return view('hello', ['name' => $request->input('name')]);
    }
}
