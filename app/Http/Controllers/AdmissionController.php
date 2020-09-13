<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admission;

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
            'qualification' => 'required'
        ]);

        $admissionApplicant = new Admission();
        $admissionApplicant->surname = request('surname');
        $admissionApplicant->other_name = request('other_name');
        $admissionApplicant->email = request('email');
        $admissionApplicant->phone_number = request('phone_number');
        $admissionApplicant->date_of_birth = request('date_of_birth');
        $admissionApplicant->home_address = request('home_address');
        $admissionApplicant->city = request('city');
        $admissionApplicant->name_of_school = request('name_of_school');
        $admissionApplicant->qualification = request('qualification');

        $admissionApplicant->save();

        return back();
    }
}

