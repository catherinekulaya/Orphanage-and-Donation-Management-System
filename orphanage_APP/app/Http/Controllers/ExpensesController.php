<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExpensesController extends Controller
{
    public function index()
    {
        $expenses = [
            ['supervisedBy' => 'John Alex', 'expenseName' => 'Fixed Expense', 'amount' => '24,000', 'description' => '1 kg of Rice', 'date' => '26 Jan 2021'],
            ['supervisedBy' => 'Catherine Stones', 'expenseName' => 'Variable Expense', 'amount' => '55,000', 'description' => '4 liters of oil', 'date' => '2 Feb 2021'],
            ['supervisedBy' => 'Alan Smith', 'expenseName' => 'Periodic Expense', 'amount' => '240,000', 'description' => '12 dozen of books', 'date' => '31 Jan 2021'],
            ['supervisedBy' => 'John Alex', 'expenseName' => 'Fixed Expense', 'amount' => '24,000', 'description' => '1 kg of Rice', 'date' => '26 Jan 2021'],
            ['supervisedBy' => 'Catherine Stones', 'expenseName' => 'Variable Expense', 'amount' => '55,000', 'description' => '4 liters of oil', 'date' => '2 Feb 2021'],
            ['supervisedBy' => 'Alan Smith', 'expenseName' => 'Periodic Expense', 'amount' => '240,000', 'description' => '12 dozen of books', 'date' => '31 Jan 2021'],
            ['supervisedBy' => 'John Alex', 'expenseName' => 'Fixed Expense', 'amount' => '24,000', 'description' => '1 kg of Rice', 'date' => '26 Jan 2021'],
            ['supervisedBy' => 'Catherine Stones', 'expenseName' => 'Variable Expense', 'amount' => '55,000', 'description' => '4 liters of oil', 'date' => '2 Feb 2021'],
            ['supervisedBy' => 'Alan Smith', 'expenseName' => 'Periodic Expense', 'amount' => '240,000', 'description' => '12 dozen of books', 'date' => '31 Jan 2021'],
            ['supervisedBy' => 'John Alex', 'expenseName' => 'Fixed Expense', 'amount' => '24,000', 'description' => '1 kg of Rice', 'date' => '26 Jan 2021'],
            ['supervisedBy' => 'Catherine Stones', 'expenseName' => 'Variable Expense', 'amount' => '55,000', 'description' => '4 liters of oil', 'date' => '2 Feb 2021'],
            ['supervisedBy' => 'Alan Smith', 'expenseName' => 'Periodic Expense', 'amount' => '240,000', 'description' => '12 dozen of books', 'date' => '31 Jan 2021'],
            ['supervisedBy' => 'John Alex', 'expenseName' => 'Fixed Expense', 'amount' => '24,000', 'description' => '1 kg of Rice', 'date' => '26 Jan 2021'],
            ['supervisedBy' => 'Catherine Stones', 'expenseName' => 'Variable Expense', 'amount' => '55,000', 'description' => '4 liters of oil', 'date' => '2 Feb 2021'],
            ['supervisedBy' => 'Alan Smith', 'expenseName' => 'Periodic Expense', 'amount' => '240,000', 'description' => '12 dozen of books', 'date' => '31 Jan 2021'],
            ['supervisedBy' => 'John Alex', 'expenseName' => 'Fixed Expense', 'amount' => '24,000', 'description' => '1 kg of Rice', 'date' => '26 Jan 2021'],
            ['supervisedBy' => 'Catherine Stones', 'expenseName' => 'Variable Expense', 'amount' => '55,000', 'description' => '4 liters of oil', 'date' => '2 Feb 2021'],
            ['supervisedBy' => 'Alan Smith', 'expenseName' => 'Periodic Expense', 'amount' => '240,000', 'description' => '12 dozen of books', 'date' => '31 Jan 2021'],


        ];
        return view('expenses', ['expenses' => $expenses]);
    }

    public function create()
    {
      
        return view('operations.create-expense');
    }

    public function update()
    {
      
        return view('operations.edit-expense');
    }
}
