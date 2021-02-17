@extends('layouts.app')

@section('content')
    <div class="container donation-card">
        <div class="card">
            <div class="card-body">
                <h3 class="center">Add Item</h3>
                <form action="/itemsrequested/create" method="POST">
                    @csrf
                    <div class="form-group">
                      <label>Item requested</label>
                      <input type="text" name="itemName" id="itemName" class="form-control">
                      <label>Quantity</label>
                      <input type="number" name="quantity" id="quantity" class="form-control">
                      <label>Donation Date</label>
                      <input type="date" name="date" id="date" class="form-control">
                    </div>
                    <div class="center">
                        <a href="/itemsrequested"  class="btn btn-primary">Cancel</a>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </form>
            </div>
          </div>
    </div>


@endsection
