<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', 'HomeController@index');

Route::get('about', 'AboutController@index');

Route::get('/contact', 'ContactController@index');

Route::get('/enroll', 'EnrollController@index');

Route::get('gallery', 'GalleryController@index');

// Route::get('/blog', 'BlogController@index');

Route::get('/admission', 'AdmissionController@index');

Route::get('/blog', function () {
    $posts = App\Post::all();
    return view('blogpost', compact('posts'));
});

Route::get('post/{slug}', function($slug){
	$post = App\Post::where('slug', '=', $slug)->firstOrFail();
	return view('post', compact('post'));
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

// demo projects

Route::get('/demo', 'CustomersController@list');

Route::get('/demo/emailsubscriber', 'EmailSubscriberController@myMailList');