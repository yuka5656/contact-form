<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactcontroller extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm()
    {
        return view('confirm');
    }

    public function store()
    {
        return view('store');
    }
}
