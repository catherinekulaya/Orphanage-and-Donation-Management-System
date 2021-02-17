@extends('layouts.app')

@section('content')

<div class="home-container table-responsive-sm">
    <div class="row">
        <div class="col-sm-10">
    <h4>Orphans</h4>
        </div>
        <div class="col-sm-2">
            <a class="btn btn-primary btn-sm" href="/orphans/create">Add Orphans</a>
        </div>
    </div>
    <br>
<table class="table table-hover table-bordered table-responsive-sm">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Gender</th>
            <th scope="col">Age</th>
            <th scope="col">Status_id</th>
            <th scope="col">Date of birth</th>
            <th scope="col">Register Date</th>
        </tr>
        <thead>
            <tbody>
                @foreach($orphans as $orphan)
                <tr>
                    <th scope="row"> {{$loop->index+1 }}</th>
                    <td> {{$orphan['firstname']}}</td>
                    <td> {{$orphan['lastname']}}</td>
                    <td> {{$orphan['gender']}}</td>
                    <td> {{$orphan['age']}}</td>
                    <td> {{$orphan['status_id']}}</td>
                    <td> {{$orphan['date of birth']}}</td>
                    <td> {{$orphan['register date']}}</td>
                    <td>
                <a class="btn btn-primary btn-sm" href="/orphans/edit/98">Edit</a>
           <a class="btn btn-danger btn-sm">Delete</a>
            </td>
          </tr>
                @endforeach
            </tbody>
        </table>
    </div>




@endsection