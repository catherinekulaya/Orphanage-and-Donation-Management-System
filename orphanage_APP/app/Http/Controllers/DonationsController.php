<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonationController extends Controller
{
    public function index()
    {
        $donations = [
            [Email => 'Ben Jackson', 'First Name' => 'Fixed Expense', 'amount' => '24,000', 'description' => '1 kg of Rice', 'date' => '26 Jan 2021'],
            [Email => 'Irine Peter', 'First Name' => 'Variable Expense', 'amount' => '55,000', 'description' => '4 liters of oil', 'date' => '2 Feb 2021'],
            [Email => 'Alan Carlos', 'First Name' => 'Periodic Expense', 'amount' => '240,000', 'description' => '12 dozen of books', 'date' => '31 Jan 2021'],
            [Email => 'Ben Jackson', 'First Name' => 'Fixed Expense', 'amount' => '24,000', 'description' => '1 kg of Rice', 'date' => '26 Jan 2021'],
            [Email => 'Irine Peter', 'First Name' => 'Variable Expense', 'amount' => '55,000', 'description' => '4 liters of oil', 'date' => '2 Feb 2021'],
            [Email => 'Alan Carlos', 'First Name' => 'Periodic Expense', 'amount' => '240,000', 'description' => '12 dozen of books', 'date' => '31 Jan 2021'],
            [Email => 'Ben Jackson', 'First Name' => 'Fixed Expense', 'amount' => '24,000', 'description' => '1 kg of Rice', 'date' => '26 Jan 2021'],
            [Email => 'Irine Peter', 'First Name' => 'Variable Expense', 'amount' => '55,000', 'description' => '4 liters of oil', 'date' => '2 Feb 2021'],
            [Email => 'Alan Carlos', 'First Name' => 'Periodic Expense', 'amount' => '240,000', 'description' => '12 dozen of books', 'date' => '31 Jan 2021'],
            [Email => 'Ben Jackson', 'First Name' => 'Fixed Expense', 'amount' => '24,000', 'description' => '1 kg of Rice', 'date' => '26 Jan 2021'],
            [Email => 'Irine Peter', 'First Name' => 'Variable Expense', 'amount' => '55,000', 'description' => '4 liters of oil', 'date' => '2 Feb 2021'],
            [Email => 'Alan Carlos', 'First Name' => 'Periodic Expense', 'amount' => '240,000', 'description' => '12 dozen of books', 'date' => '31 Jan 2021'],
            [Email => 'Ben Jackson', 'First Name' => 'Fixed Expense', 'amount' => '24,000', 'description' => '1 kg of Rice', 'date' => '26 Jan 2021'],
            [Email => 'Irine Peter', 'First Name' => 'Variable Expense', 'amount' => '55,000', 'description' => '4 liters of oil', 'date' => '2 Feb 2021'],
            [Email => 'Alan Carlos', 'First Name' => 'Periodic Expense', 'amount' => '240,000', 'description' => '12 dozen of books', 'date' => '31 Jan 2021'],
            [Email => 'Ben Jackson', 'First Name' => 'Fixed Expense', 'amount' => '24,000', 'description' => '1 kg of Rice', 'date' => '26 Jan 2021'],
            [Email => 'Irine Peter', 'First Name' => 'Variable Expense', 'amount' => '55,000', 'description' => '4 liters of oil', 'date' => '2 Feb 2021'],
            [Email => 'Alan Carlos', 'First Name' => 'Periodic Expense', 'amount' => '240,000', 'description' => '12 dozen of books', 'date' => '31 Jan 2021'],


        ];
        return view('expenses', ['expenses' => $expenses]);
    }
}
