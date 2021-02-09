@extends('layouts.app')

@section('content')

<div class="home-container table-responsive-sm">
    <div class="row">
        <div class="col-sm-10">
    <h4>Items requested</h4>
        </div>
        <div class="col-sm-2">
            <a class="btn btn-primary btn-sm" href="/itemsrequested/create">Add Item</a>
        </div>
    </div>
    <br>
<table class="table table-hover table-bordered table-responsive-sm">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Items requested</th>
            <th scope="col">Orphanage center</th>
            <th scope="col">Options</th>

        </tr>
        <thead>
            <tbody>
                @foreach($itemsrequested as $itemrequest)
                <tr>
                    <th scope="row"> {{$loop->index+1 }}</th>
                    <td> {{$itemrequest['itemsrequested']}}</td>
                    <td> {{$itemrequest['orphanagecenter']}}</td>
                    <td>
                <a class="btn btn-primary btn-sm" href="/itemsrequested/edit/77">Edit</a>
           <a class="btn btn-danger btn-sm">Delete</a>
            </td>
          </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endsection

