@extends('layouts.app')

@section('content')
    <div class="home-container">
        <div class="row">
            <div class="col-sm">
                <div class="card" >
                    <div class="card-body">
                        <h5 class="card-title">Orphans</h5>
                        <h6 class="card-subtitle mb-2 text-muted">203</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card" >
                    <div class="card-body">
                        <h5 class="card-title">Donations</a></h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $donations }}</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card" >
                    <div class="card-body">
                        <h5 class="card-title" href="{{url(/itemsrequired)}}">Items Required</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $requiredItems }}</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card" >
                    <div class="card-body">
                        <h5 class="card-title">Funds Acquired</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $funds }}</h6>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg">
                <div class="card" style="height: 250px;">
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2 text-muted">Donations Trends in 2021</h6>
                        {{ $janDonations }}
                        @include('graphs.donation-graph')
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="card" style="height: 250px;">
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2 text-muted">Visitation Trend in 2021</h6>
                        @include('graphs.visitation-graph')
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card" style="height: 250px;">
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2 text-muted">Orphans Acquired in 2021</h6>
                        @include('graphs.orphans-graph')
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
