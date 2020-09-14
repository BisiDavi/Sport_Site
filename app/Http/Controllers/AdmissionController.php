<?php

namespace App\Http\Controllers;

use App\Admission;
use Illuminate\Http\Request;

class AdmissionController extends Controller
{
    //
    public function index()
    {
        return view('admission');
    }

    public function admissionform()
    {
        $data = request()->validate([
            'surname' => 'required',
            'other_name' => 'required',
            'email' => 'email|min:7',
            'phone_number' => 'required',
            'city' => 'required',
            'date_of_birth' => 'required',
            'home_address' => 'required',
            'name_of_school' => 'required',
            'qualification' => 'required',
        ]);
        

        Admission::create($data);

        return redirect('admission')->with('message', 'Thanks for your application, We will be in touch.');
    }
}
