@extends('layouts.app')

@section('content')
    <div class="home-container">
        <div class="card">
            <div class="card-body">
                <h3 class="center">Add Donations</h3>
                <form>
                    <div class="form-group">
                      <label>First Name</label>
                      <input type="text" class="form-control">
                      <label>Last Name</label>
                      <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Choose Amount</label>
                        <select class="form-control">
                          <option>Tsh. 25,000</option>
                          <option>Tsh. 500,000</option>
                          <option>Tsh. 100,000</option>
                          <option>Tsh. 250,000</option>
                          <option>Tsh. 500,000</option>
                          <option>Tsh. 750,000</option>
                          <option>Tsh. 1,000,000</option>
                          <option>Not In List</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Enter Amount</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
          </div>


    </div>


@endsection
