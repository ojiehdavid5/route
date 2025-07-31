<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function greet()
    {
        $name = "Ojieh"; // or any dynamic data
        return view('greet', compact('name'));
    }
}