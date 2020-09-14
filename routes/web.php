<?php

use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;

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

Route::post('/gallery', 'HomeController@footercontactform');

Route::get('about', 'AboutController@index');

Route::get('/contact', 'ContactController@index');

Route::post('/contact', 'ContactController@contactform');

Route::get('/enroll', 'EnrollController@index');

Route::post('/enroll', 'EnrollController@subscribe');

Route::get('gallery', 'GalleryController@index');

// Route::get('/blog', 'BlogController@index');

Route::get('/admission', 'AdmissionController@index');

Route::post('/admission', 'AdmissionController@admissionform');

Route::group(['prefix' => 'admin'], function(){
    Voyager::routes();
});

Route::get('/blog', function(){
    $posts = App\Post::all();
    return view('blogpost', compact('posts'));
});

// demo

Route::get('/customers', 'CustomersController@list');

Route::post('/customers', 'CustomersController@storeCustomers');

Route::get('/emailsubscriber', 'EmailSubscriberController@myMailList');

Route::post('/emailsubscriber', 'EmailSubscriberController@storeSubscriber');
// end of demo


Route::get('/pages', function(){
    $pages = App\Page::all();
    return view('pages', compact('pages'));
});

Route::get('/{slug}', function($slug){
	$post = App\Post::where('slug', '=', $slug)->firstOrFail();
	return view('post', compact('post'));
});



// demo projects

