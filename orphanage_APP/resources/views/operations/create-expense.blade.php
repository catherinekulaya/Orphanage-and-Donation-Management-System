@extends('layouts.app')

@section('content')
    <div class="container donation-card">
        <div class="card">
            <div class="card-body">
                <h3 class="center">Add Expense</h3>
                <form action="/expenses/create" method="POST">
                    @csrf
                    <div class="form-group">
                      <label>Expense Name</label>
                      <input type="text" name="expenseName" id="expenseName" class="form-control">
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
                        <input type="number" name="amount" id="amount" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Incurred on</label>
                        <input type="date" name="date" id="date" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" name="desc" id="desc"></textarea>
                    </div>            
                    <div class="center">
                    <a class="btn btn-primary" href="/expenses">Cancel</a>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </form>
            </div>
          </div>


    </div>


@endsection
