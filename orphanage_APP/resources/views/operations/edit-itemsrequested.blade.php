@extends('layouts.app')

@section('content')
    <div class="container donation-card">
        <div class="card">
            <div class="card-body">
                <h3 class="center">Edit item</h3>
                <form action="/itemsrequested/update/{{ $item->id }}"  method="POST">
                    @csrf
                    <div class="form-group">
                      <label>Item requested</label>
                      <input type="text" name="itemName" id="itemName" value="{{ $item->itemName }}" class="form-control">
                      <label>Quantity</label>
                      <input type="number" name="quantity" id="quantity" value="{{ $item->quantity }}" class="form-control">
                      <label>Donation Date</label>
                      <input type="date" name="date" id="date" value="{{ $item->date }}" class="form-control">
                    </div>
                    <div class="center">
                        <a href="/itemsrequested"  class="btn btn-primary">Cancel</a>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
          </div>


    </div>


@endsection
