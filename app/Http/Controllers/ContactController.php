<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    //
    public function index()
    {
       return view('contact');
    }
    public function contactform()
    {
    $data = request()->validate([
            'fullname' => 'required',
            'your_email' => 'email|min:7',
            'phone_number' => 'required',
            'message' => 'required'
        ]);

        Contact::create($data);
        
        return redirect('contact')->with('message', 
        'Thanks for making enquires, we will reach you shortly');
    }
}
