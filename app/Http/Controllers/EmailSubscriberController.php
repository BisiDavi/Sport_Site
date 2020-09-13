<?php

namespace App\Http\Controllers;

use App\EmailSubscriber;
use Illuminate\Http\Request;

class EmailSubscriberController extends Controller
{
    //
    public function myMailList(){

        $currentMailSubscriber = EmailSubscriber::all();

        return view('demo.emailsubscriber', [
            'emailSubscriber' => $currentMailSubscriber
        ]);
    }

    public function storeSubscriber()
    {
        $data = request() -> validate([
            'name' => 'required|min:3',
            'email' => 'email|required|min:10'
        ]);

        $emailSubscriber = new EmailSubscriber();
        $emailSubscriber->name = request('name');
        $emailSubscriber->email = request('email');
        $emailSubscriber->save();

        return back();
    }
}
