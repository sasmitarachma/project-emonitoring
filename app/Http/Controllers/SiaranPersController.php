<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiaranPersController extends Controller
{
    public function index()
    {
        
        return view('siaranpers/siaranpers');
    }
}