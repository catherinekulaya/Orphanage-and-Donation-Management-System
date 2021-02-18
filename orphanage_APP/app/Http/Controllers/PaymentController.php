<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{

    public function index()
    {
        $transactions = [
            ['name' => 'John Alex', 'id' => '74298453953', 'status' => 'Pending', 'date' => '26 Jan 2021'],
            ['name' => 'Catherine Stones', 'id' => '5398359853', 'status' => 'Success', 'date' => '2 Feb 2021'],
            ['name' => 'Alan Smith', 'id' => '375987983', 'status' => 'Failed', 'date' => '31 Jan 2021'],
            ['name' => 'John Alex', 'id' => '74298453953', 'status' => 'Pending', 'date' => '26 Jan 2021'],
            ['name' => 'Catherine Stones', 'id' => '5398359853', 'status' => 'Success', 'date' => '2 Feb 2021'],
            ['name' => 'Alan Smith', 'id' => '375987983', 'status' => 'Failed', 'date' => '31 Jan 2021'],
            ['name' => 'John Alex', 'id' => '74298453953', 'status' => 'Pending', 'date' => '26 Jan 2021'],
            ['name' => 'Catherine Stones', 'id' => '5398359853', 'status' => 'Success', 'date' => '2 Feb 2021'],
            ['name' => 'Alan Smith', 'id' => '375987983', 'status' => 'Failed', 'date' => '31 Jan 2021'],
            ['name' => 'John Alex', 'id' => '74298453953', 'status' => 'Pending', 'date' => '26 Jan 2021'],
            ['name' => 'Catherine Stones', 'id' => '5398359853', 'status' => 'Success', 'date' => '2 Feb 2021'],
            ['name' => 'Alan Smith', 'id' => '375987983', 'status' => 'Failed', 'date' => '31 Jan 2021'],
            ['name' => 'John Alex', 'id' => '74298453953', 'status' => 'Pending', 'date' => '26 Jan 2021'],
            ['name' => 'Catherine Stones', 'id' => '5398359853', 'status' => 'Success', 'date' => '2 Feb 2021'],
            ['name' => 'Alan Smith', 'id' => '375987983', 'status' => 'Failed', 'date' => '31 Jan 2021'],
            ['name' => 'John Alex', 'id' => '74298453953', 'status' => 'Pending', 'date' => '26 Jan 2021'],
            ['name' => 'Catherine Stones', 'id' => '5398359853', 'status' => 'Success', 'date' => '2 Feb 2021'],
            ['name' => 'Alan Smith', 'id' => '375987983', 'status' => 'Failed', 'date' => '31 Jan 2021'],
          ];
        return view('payments', [ 'transactions' => $transactions]);
    }
}
