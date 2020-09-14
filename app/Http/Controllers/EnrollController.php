<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Newsletter;


class EnrollController extends Controller
{
    public function index()
    {
        //
        return view('enroll');
    }

     public function subscribe()
    {   
        $data = request()->validate([
            'newsletter_email' => 'required|email|min:8'
        ]);

        Newsletter::create($data);
        
        return redirect('enroll')->with('message', 'Thanks for subscribing to our newsletter. Welcome on Board' );
    }
     
}
