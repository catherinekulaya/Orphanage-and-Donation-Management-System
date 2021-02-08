@extends('layouts.app')

@section('content')
    <div class="home-container">
        <div class="card">
            <div class="card-body">
                <h3 class="center">Edit Donations</h3>
                <form>
                    <div class="form-group">
                      <label>First Name</label>
                      <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" class="form-control">
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
