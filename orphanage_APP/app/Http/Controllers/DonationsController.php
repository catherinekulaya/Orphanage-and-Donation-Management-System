
<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class Controller extends BaseController

{

public function contact(Request $request) {

DB::insert(“INSERT INTO donations(`FirstName`, `LastName`, `Amount`, `Email`) VALUES(?, ?, ?, ?)”, [

$request->input(‘FirstName’),

$request->input(‘LastName’),

$request->input(‘Amount’),

$request->input(‘Email’),

]);

return redirect()->action(‘Controller@donations’)->with(‘status’, ‘Your Message Sent Successfully !’);

}

use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

}
