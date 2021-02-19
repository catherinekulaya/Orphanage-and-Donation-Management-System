<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class item123Controller extends Controller
{

  function index()
    {
        $item123 = [
            ['orphanagecenter' => 'Watoto Wetu', 'itemname' => 'Soap'],
            ['orphanagecenter' => 'Sisi Sote', 'itemname' => 'Clothes'],
            ['orphanagecenter' => 'Babu na Bibi', 'itemname' => 'Exercise Books'],
            ['orphanagecenter' => 'Mimi na Wewe', 'itemname' => 'Pen'],
            ['orphanagecenter' => 'Wazee Wetu', 'itemname' => 'Net'],
            ['orphanagecenter' => 'Wote Sote', 'itemname' => 'Food'],
            ['orphanagecenter' => 'Wao Pekee', 'itemname' => 'Soap, Food,Net'],
            ['orphanagecenter' => 'Smile Charity', 'itemname' => 'Clothes,Food, Soap'],
            ['orphanagecenter' => 'Azim heritage', 'itemname' => 'Exercise Books, Clothes'],
            ['orphanagecenter' => 'Imani Yetu', 'itemname' => 'Pen, Pencils,Clothes'],
            ['orphanagecenter' => 'ABC', 'itemname' => 'Net, Soap'],
            ['orphanagecenter' => 'Yeye Aweza', 'itemname' => 'Food'],
        ];

        return view('item123', ['item123' => $item123]);
    }
}


