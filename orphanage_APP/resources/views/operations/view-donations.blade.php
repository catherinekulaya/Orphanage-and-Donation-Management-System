@extends('layouts.app')

@section('content')

  @if(\Session::has('msg'))
  <div class="alert alert-success">
    {{Session('msg')}}
   </div>
  @endif
    <div class="home-container">
        <div class="card">
            <div class="card-body">
                <h3 class="center">View Donations</h3>
                <table class="table table-bordered table-hover">
                   <thead>
                    <tr>
                         <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Item</th>
                        <th scope="col">Money</th>
                        <th scope="col">Date</th>
                        <th scope="col">Options</th>
                    </tr>
                   </thead>
                   <tbody>
                   @foreach($donations as $donation)
                     <tr>
                       <th scope="row">{{$loop->index+1}}</th>
                        <td>{{$donation->name}}</td>
                        <td>{{$donation->item}}</td>
                        <td>{{$donation->money}}</td>
                        <td>{{$donation->donationDate}}</td>
                        <td>
                          <a class="btn btn-primary btn-sm" href="/donations/edit/98">Edit</a>
                          <a class="btn btn-danger btn-sm">Delete</a>
                        </td>
                     </tr>
                     
                    @endforeach
                   </tbody>
                </table>
            </div>
          </div>


    </div>


@endsection
