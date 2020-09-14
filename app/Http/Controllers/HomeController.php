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
        $threePost =collect($posts);
        $threePost->random(3)->all();
        return view('home', compact('threePost'));
    }

    public function footercontactform()
    {

        $data = request()->validate([
            'fullname' => 'required',
            'contact_email' => 'required|email',
            'message' => 'required'
        ]);

        FooterContactform::create($data);

        return redirect('gallery')->with('message', 'Thanks for contacting us.We shall get back to you shortly' );
    }

}
 