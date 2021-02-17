
@extends('layouts.app')

@section('content')

<div class="home-container table-responsive-sm">
    <div class="row">
        <div class="col-sm-10">
    <h4>Donations</h4>
        </div>
        <div class="col-sm-2">
            <a class="btn btn-primary btn-sm" href="/donations/create">Add Donations</a>
        </div>
    </div>
    <br>
<table class="table table-hover table-bordered table-responsive-sm">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Name</th>
            <th scope="col">Item</th>
            <th scope="col">Amount</th>
            <th scope="col">Email</th>
            <th scope="col">Options</th>
        </tr>
        <thead>
            <tbody>
                @foreach($donations as $donation)
                <tr>
                    <th scope="row"> {{$loop->index+1 }}</th>
                    <td> {{$donation['firstname']}}</td>
                    <td> {{$donation['lastname']}}</td>
                    <td> {{$donation['amount']}}</td>
                    <td> {{$donation['email']}}</td>
                    <td>
                <a class="btn btn-primary btn-sm" href="/donations/edit/98">Edit</a>
           <a class="btn btn-danger btn-sm">Delete</a>
            </td>
          </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endsection


