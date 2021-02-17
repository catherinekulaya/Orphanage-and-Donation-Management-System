<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemsrequestedController extends Controller
{

    public function create()
    {

        return view('operations.create-itemsrequested');
    }

    public function update()
    {

        return view('operations.edit-itemsrequested');
    }
}
