<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function list()
    {
        $customers = Customer::all();

        $activeCustomer = Customer::active()->get();

        $inactiveCustomer = Customer::inactive()->get() ;


        return view('demo.customers',
        compact('activeCustomer','inactiveCustomer'));
    }

    public function storeCustomers()
    {
        $data = request() -> validate([
            'name' =>'required|min:4',
            'email' => 'email|required|min:5'
        ]);

        $customer = new Customer();
        $customer->name = request('name');
        $customer->email = request('email');
        $customer->save();

        return back();
    }
}
