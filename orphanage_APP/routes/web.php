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

Route::get('donationform/', function () {
    return view('donationform');
});




Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/service', function () {
    return view('service');
});

Route::get('/test', function () {
    return view('test');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/payments', 'PaymentController@index')->name('payment');
Route::get('/expenses', 'ExpensesController@index')->name('expenses');
Route::get('/donations', 'Donor123Controller@index')->name('donations');
Route::get('/itemsrequested', 'ItemsrequestedController@index')->name('itemsrequested');

Route::get('/expenses/create', 'ExpensesController@create')->name('create-expenses');
Route::get('/expenses/edit/{id}', 'ExpensesController@update')->name('edit-expenses');

Route::get('/donations/create', 'Donor123Controller@create')->name('create-donations');
Route::get('/donations/edit/{id}', 'Donor123Controller@update')->name('edit-donations');


Route::get('/itemsrequested/create', 'ItemsrequestedController@create')->name('create-itemsrequested');
Route::get('/itemsrequested/edit/{id}', 'ItemsrequestedController@update')->name('edit-itemsrequested');

Route::get('/donations', 'DonationController@index')->name('donations');

