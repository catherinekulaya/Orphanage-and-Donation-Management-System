@extends('user.main')

@section('content')


    <div class="container">
        <h4 class="center">Items Required</h4>
        <div class="row">
            @foreach($items as $item)
            <div class="col-sm">
                <a href="/donaterequired/{{ $item['name'] }}">
                <div class="card" style="height: 150px; width: 300px;" >
                    <div class="card-body">
                        <h5 class="card-title">{{ $item['name'] }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Quantity {{ $item['quantity'] }} </h6>
                        <h6 class="card-subtitle mb-2 text-muted">Date Requested {{ $item['date'] }} </h6>
                    </div>
                </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>

@endsection
