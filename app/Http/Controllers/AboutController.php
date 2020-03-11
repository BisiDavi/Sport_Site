<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //about controller
    public function index()
    {
        return view('about');
    }
}
