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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/about-us',function(){
    return view('about-us');
});


Route::get('/contact-us',function(){
    return view('contact-us');
});


Route::get('/service',function(){
    return view('service');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/admin', 'AdminController@index')->name('admin');

Route::get('/user', 'UserController@index')->name('user');
Auth::routes();
