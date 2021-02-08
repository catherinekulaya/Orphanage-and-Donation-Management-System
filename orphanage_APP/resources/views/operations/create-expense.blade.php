@extends('layouts.app')

@section('content')
    <div class="home-container">
        <div class="card">
            <div class="card-body">
                <h3 class="center">Add Expense</h3>
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


    </div>


@endsection
