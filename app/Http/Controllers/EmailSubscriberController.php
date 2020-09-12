<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailSubscriberController extends Controller
{
    //
    public function myMailList(){

        $currentMailSubscriber = [
            "Olubisi David",
            "Olaloluwa Adisa",
            "Donald Odogwu",
            "Samson Osijo",
            "Oba King",
            "Samuel Oluwakayode"
        ];

        return view('demo.emailsubscriber', [
            'emailSubscriber' => $currentMailSubscriber
        ]);
    }
}
