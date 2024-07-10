<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SponsorshipController extends Controller
{
    public function index()
    {
        
        return view('sponsorship/sponsorship');
    }
}