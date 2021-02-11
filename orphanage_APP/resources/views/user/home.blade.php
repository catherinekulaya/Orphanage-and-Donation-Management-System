@extends('user.main')

@section('content')



<div class="content">

    <div class="row align-items-center">
        <div class="col">
            <p class="h2" style="text-align: center">Orphanage Donation Management System</p>

        </div>
    </div>
    <br>

    <div class="row align-items-center">
        <div class="col">
            <blockquote class="blockquote text-center">
                <p class="mb-0">We must give more in order to get more. It is the generous giving of ourselves that
                    produces the generous harvest.</p>
                <footer class="blockquote-footer"><cite title="Source Title">Orison Swett Marden</cite></footer>
            </blockquote>
        </div>
    </div>
    <br><br>
    <div class="row align-items-center center">
        <div class="col">
            <a href="/donate" class="btn btn-primary  donation-btn  btn-sm">Donate</a>
        </div>
    </div>
    <br><br>
    <p class="center">Or You can view what items we need and donate them</p>
    <br>
    <div class="row align-items-center center">
        <div class="col">
            <a href="/requiredItems" class="btn btn-primary  donation-btn btn-sm">View Items Required</a>
        </div>
    </div>
</div>

@endsection
