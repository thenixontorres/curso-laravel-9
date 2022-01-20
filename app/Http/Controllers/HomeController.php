<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        /*
        bloque de logic */

        $text = '.';

        return view('welcome', compact('text'));
    }
}
