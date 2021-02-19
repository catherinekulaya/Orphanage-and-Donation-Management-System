@extends('layouts.app')

@section('content')

<div class="home-container table-responsive-sm">
    <div class="row">
        <div class="col-sm-10">
    <h4>Schedule</h4>
        </div>
        <div class="col-sm-2">
            <a class="btn btn-primary btn-sm" href="/schedule/create">Add Schedule</a>
        </div>
    </div>
    <br>
<table class="table table-hover table-bordered table-responsive-sm">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Phone Number</th>
            <th scope="col">Date</th>
            <th scope="col">Time</th>
            <th scope="col">Options</th>
        </tr>
        <thead>
            <tbody>
                @foreach($schedule as $sched)
                <tr>
                    <th scope="row"> {{$loop->index+1 }}</th>
                    <td> {{$sched['firstname']}}</td>
                    <td> {{$sched['lastname']}}</td>
                    <td> {{$sched['phonenumber']}}</td>
                    <td> {{$sched['date']}}
                    <td> {{$sched['time']}}</td>
                    <td>
                <a class="btn btn-primary btn-sm" href="/schedule/edit/987">Edit</a>
           <a class="btn btn-danger btn-sm">Delete</a>
            </td>
          </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endsection

