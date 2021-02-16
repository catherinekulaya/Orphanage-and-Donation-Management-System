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
            <div class="row">
            <div class="col-sm-10">
                <h3 class="left">View Donations</h3>
                </div>
                <div class="col-sm-2">
            <a class="btn btn-primary btn-sm" href="/donate">Add Donations</a>
        </div>
                </div>
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
                          <a class="btn btn-primary btn-sm" href="/donate">Edit</a>
                          <a class="btn btn-danger btn-sm" href="#" onclick="
                            
                              if(confirm('Are you sure you want to delete this?')){
                              getElementById('delete-donation-{{$donation->id}}').submit();
                            }
                            
                            ">Delete</a>
                          <form id="delete-donation-{{$donation->id}}" action="{{route('remove-donation',$donation->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                          </form>
                        </td>
                     </tr>
                     
                    @endforeach
                   </tbody>
                </table>
            </div>
          </div>


    </div>


@endsection
