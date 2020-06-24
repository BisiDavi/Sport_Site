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

Route::get('/blog', 'BlogController@index');

Route::get('/admission', 'AdmissionController@index');

Route::get('/home', function () {
    $posts = App\Post::all();
    return view('welcome', compact('posts'));
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
