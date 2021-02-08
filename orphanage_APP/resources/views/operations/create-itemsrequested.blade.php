@extends('layouts.app')

@section('content')
    <div class="home-container">
        <div class="card">
            <div class="card-body">
                <h3 class="center">Add Item</h3>
                <form>
                    <div class="form-group">
                      <label>Item requested</label>
                      <input type="text" class="form-control">
                      <label>Orphanage center</label>
                      <input type="text" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
          </div>


    </div>


@endsection
