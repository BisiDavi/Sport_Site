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
            'email' => 'email|min:7',
            'phone_number' => 'required',
            'message' => 'required'
        ]);

        $userContactUs = new Contact();
        $userContactUs->fullname = request('fullname');
        $userContactUs->email = request('email');
        $userContactUs->phone_number = request('phone_number');
        $userContactUs->message = request('message');
 
        $userContactUs->save();

        return back();
    }
}
