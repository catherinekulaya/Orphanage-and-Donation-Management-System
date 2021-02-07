<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonationsController extends Controller
{
    public function index()
    {
        $donations = [
            ['FirstName' => 'Ben', 'LastName' => 'Jackson', 'Amount' => '24,000', 'Email' => 'benjackson@gmail.com'],
            ['FirstName' => 'Irine', 'LastName' => 'Peter', 'Amount' => '55,000', 'Email' => 'irene14234@gmail.com'],
            ['First Name' => 'Adam', 'Last Name' => 'Benson', 'Amount' => '240,000', 'Email' => 'gdft12345@gmail.com'],



        ];
        return view('donations', ['donations' => $donations]);
    }
}
