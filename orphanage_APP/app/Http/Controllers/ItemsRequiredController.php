<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemsRequiredController extends Controller
{
    public function index()
    {
        $items = [
            ['name' => 'Soap', 'quantity' => '74', 'date' => '26 Jan 2021'],
            ['name' => 'Washing Powder', 'quantity' => '53', 'date' => '2 Feb 2021'],
            ['name' => 'Flour', 'quantity' => '33', 'date' => '31 Jan 2021'],
            ['name' => 'Soap', 'quantity' => '74', 'date' => '26 Jan 2021'],
            ['name' => 'Washing Powder', 'quantity' => '53', 'date' => '2 Feb 2021'],
            ['name' => 'Flour', 'quantity' => '33', 'date' => '31 Jan 2021'], ['name' => 'Soap', 'quantity' => '74', 'date' => '26 Jan 2021'],
            ['name' => 'Washing Powder', 'quantity' => '53', 'date' => '2 Feb 2021'],
            ['name' => 'Flour', 'quantity' => '33', 'date' => '31 Jan 2021'], ['name' => 'Soap', 'quantity' => '74', 'date' => '26 Jan 2021'],
            ['name' => 'Washing Powder', 'quantity' => '53', 'date' => '2 Feb 2021'],
            ['name' => 'Flour', 'quantity' => '33', 'date' => '31 Jan 2021'], ['name' => 'Soap', 'quantity' => '74', 'date' => '26 Jan 2021'],
            ['name' => 'Washing Powder', 'quantity' => '53', 'date' => '2 Feb 2021'],
            ['name' => 'Flour', 'quantity' => '33', 'date' => '31 Jan 2021'], ['name' => 'Soap', 'quantity' => '74', 'date' => '26 Jan 2021'],
            ['name' => 'Washing Powder', 'quantity' => '53', 'date' => '2 Feb 2021'],
            ['name' => 'Flour', 'quantity' => '33', 'date' => '31 Jan 2021'],

          ];
        return view('user.items-required',  [ 'items' => $items]);
    }
}
