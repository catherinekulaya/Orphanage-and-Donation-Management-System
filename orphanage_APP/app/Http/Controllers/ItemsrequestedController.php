<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemsrequestedController extends Controller
{
<<<<<<< HEAD
    public function index()
    {
        $itemsrequested = [
            ['itemsrequested' => 'Drinking water', 'orphanagecenter' => 'Azim',],
            ['itemsrequested' => 'Soap', 'orphanagecenter' => 'Babu na Bibi',],
            ['itemsrequested' => 'Food', 'orphanagecenter' => 'Watoto wetu',],
            ['itemsrequested' => 'Soap', 'orphanagecenter' => 'Yetu sote',],
            ['itemsrequested' => 'Tshirt', 'orphanagecenter' => 'Smile charity',],
            ['itemsrequested' => 'Exercise books', 'orphanagecenter' => 'Azim charity',],
            ['itemsrequested' => 'Pens', 'orphanagecenter' => 'Nchi yetu sote',],
            ['itemsrequested' => 'Matrex', 'orphanagecenter' => 'Mimi na wewe',],



        ];

        return view('itemsrequested', ['itemsrequested' => $itemsrequested]);
    }
=======
>>>>>>> 812ad35a6b8b4b27f305fede468fa59343fbf664

    public function create()
    {

        return view('operations.create-itemsrequested');
    }

    public function update()
    {

        return view('operations.edit-itemsrequested');
    }
}
