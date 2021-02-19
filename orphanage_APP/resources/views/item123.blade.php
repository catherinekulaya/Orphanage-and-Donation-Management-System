@extends('user.main')

@section('content')

<div class="home-container table-responsive-sm">
    <div class="row">
        <div class="col-sm-10">
    <h4>Items Required</h4>
        </div>
    </div>
    <br>
<table class="table table-hover table-bordered table-responsive-sm">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Orphanage Center</th>
            <th scope="col">Item Name</th>
        </tr>
        <thead>
            <tbody>
                @foreach($item123 as $item)
                <tr>
                    <th scope="row"> {{$loop->index+1 }}</th>
                    <td> {{$item['orphanagecenter']}}</td>
                    <td> {{$item['itemname']}}</td>
          </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endsection

