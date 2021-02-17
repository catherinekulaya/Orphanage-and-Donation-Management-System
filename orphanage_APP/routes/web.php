<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DonateController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('donationform/', function () {
    return view('donationform');
});




Route::get('/about-us', function () {
    return view('about-us');
});


Route::get('/contact-us',function(){
    return view('contact-us');
});


Route::get('/service',function(){
    return view('service');
});

Route::get('/test', function () {
    return view('test');
});



Auth::routes();
Route::get('/', 'DonorController@index')->name('home');
Route::get('/donate', 'DonorController@donateForm')->name('Make Donations');
Route::get('/donaterequired/{items}', 'DonorController@donateRequiredForm')->name('Donate Required Item');
Route::get('/requiredItems', 'ItemsRequiredController@donorRequiredItems')->name('Items Required');
Route::delete('/remove-donation/{id}', 'DonateController@delete')->name('remove-donation');

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/admin', 'AdminController@index')->name('admin');

Route::get('/user', 'UserController@index')->name('user');
Auth::routes();
