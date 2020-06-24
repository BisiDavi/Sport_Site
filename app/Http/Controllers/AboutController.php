<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //about controller
    public function index()
    {
        // $missionStatementPost = App\Post::where('slug', '=', $slug)->firstOrFail();
        return view('about');
    }
}
