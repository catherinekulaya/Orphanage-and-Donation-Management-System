<?php

namespace App\Http\Controllers;

use App\Expenses;
use Illuminate\Http\Request;

class ExpensesController extends Controller
{
    public function index()
    {
        $expenses = Expenses::latest()->get();      
        return view('expenses', ['expenses' => $expenses]);
    }

    public function store() {
        $expenses = new Expenses();
        $expenses->expenseName = request('expenseName');
        $expenses->expenseType = request('expenseType');
        $expenses->desc = request('desc');
        $expenses->amount = request('amount');
        $expenses->date = request('date');
        $expenses->save();

        return redirect('/expenses')->with('response', 'Expense Added Successfully');
    }

    // public function show($id) {
    //     $expense = Expenses::findOrFail($id);
    //     return view('operations.edit-expense', ['expense' => $expense]);
    // }



    public function create()
    {
      
        return view('operations.create-expense');
    }

    public function update($id)
    {
        $expense = Expenses::findOrFail($id);
        return view('operations.edit-expense', ['expense' => $expense]);
        return view('operations.edit-expense');
    }

    public function edit(Request $request, $id) {
        $expenses = Expenses::find($id);
        $expenses->expenseName = request('expenseName');
        $expenses->expenseType = request('expenseType');
        $expenses->desc = request('desc');
        $expenses->amount = request('amount');
        $expenses->date = request('date');
        $expenses->save();

        return redirect('/expenses')->with('response', 'Expenses Edited Successfully');

      }

      public function destroy($id) {
        $expense = Expenses::findOrFail($id);
        $expense->delete();
        return redirect('/expenses')->with('response', 'Expense Deleted');;
      }

    
}
