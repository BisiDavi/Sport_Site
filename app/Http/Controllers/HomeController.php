<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\FooterContactform;

class HomeController extends Controller
{
    //
    public function index()
    {
        $posts = Post::all();
        return view('home', compact('posts'));
    }

    public function footercontactform()
    {

        $data = request()->validate([
            'full_name' => 'required',
            'user_email' => 'required|email',
            'user_message' => 'required'
        ]);

        $footerContactform = new FooterContactform();
        $footerContactform->fullname = request('full_name');
        $footerContactform->email = request('user_email');
        $footerContactform->message = request('user_message');

        $footerContactform->save();

        return back();
    }

}
