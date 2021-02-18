@extends('layouts.app')

@section('content')
<<<<<<< HEAD
    <div class="home-container">
        <div class="card">
            <div class="card-body">
                <h3 class="center">Edit Expense</h3>
                <form>
                    <div class="form-group">
                      <label>Expense Name</label>
                      <input type="text" class="form-control">
                    </div>
                     <div class="form-group">
                        <label>Expense Type</label>
                        <select class="form-control">
                          <option>Fixed Expenses</option>
                          <option>Variable Expenses</option>
                          <option>Periodic Expense</option>
                        </select>
                     </div>
                    <div class="form-group">
                        <label>Amount</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Incurred on</label>
                        <input type="date" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
          </div>
        
       
=======
    <div class="container donation-card">
        <div class="card">
            <div class="card-body">
                <h3 class="center">Edit Expense</h3>
                <form action="/expenses/edit/{{ $expense->id }}" method="POST">
                    @csrf
                    <div class="form-group">
                      <label>Expense Name</label>
                      <input type="text" name="expenseName" id="expenseName" value="{{ $expense->expenseName }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Expense Type</label>
                        <select class="form-control" name="expenseType">
                          <option value="Fixed Expenses">Fixed Expenses</option>
                          <option value="Variable Expenses">Variable Expenses</option>
                          <option value="Periodic Expenses">Periodic Expenses</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Amount</label>
                        <input type="number" name="amount" id="amount" value="{{ $expense->amount }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Incurred on</label>
                        <input type="date" name="date" id="date" value="{{ $expense->date }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" name="desc" id="desc">{{ $expense->desc }}</textarea>
                    </div>            
                    <div class="center">
                    <a class="btn btn-primary" href="/expenses">Cancel</a>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </form>
            </div>
          </div>


>>>>>>> 812ad35a6b8b4b27f305fede468fa59343fbf664
    </div>


@endsection
