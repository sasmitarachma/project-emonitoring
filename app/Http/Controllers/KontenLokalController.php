<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KontenLokalController extends Controller
{
    public function index()
    {
        
        return view('kontenlokal/kontenlokal');
    }
}