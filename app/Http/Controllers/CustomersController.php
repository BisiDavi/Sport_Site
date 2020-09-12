<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function list()
    {
        $customers = [
            'Olubisi David',
            'Kelvin Smith',
            'Taylor Cole',
            'Adam Smith',
            'Hendricks Berry',
        ];

        return view('demo.customers', [
            'myCustomers' => $customers
        ]);
    }
}
