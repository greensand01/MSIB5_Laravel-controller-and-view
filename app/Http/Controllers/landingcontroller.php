<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class landingcontroller extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function profilePembuat()
    {
        return view('profile');
    }

    public function informasiKampus()
    {
        return view('informasi'); 
    }
}