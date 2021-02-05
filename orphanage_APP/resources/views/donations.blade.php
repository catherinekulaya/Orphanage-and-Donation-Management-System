@extends('layouts.app')

@section('content')
<div class="home-container table-responsive-sm">
<h4>Donations</h4>
<table class="table table-hover table-bordered">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Amount</th>
        <th scope="col">Email</th>

      </tr>
    </thead>
    <tbody>
        @foreach($donations as $donation)
        <tr>
            <th scope="row"> {{ $loop->index+1 }}</th>
            <td> {{ $donation['FirstName']}}</td>
            <td> {{ $donation['LastName']}}</td>
            <td> {{ $donation['Amount']}}</td>
            <td> {{ $donation['Email']}}</td>



          </tr>
        @endforeach
    </tbody>
  </table>
</div>
@endsection
