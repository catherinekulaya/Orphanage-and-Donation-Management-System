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
                <table class="table table-bordered tabla-hover">
                   <thead>
                    <tr>
                         <th>#</th>
                        <th>Name</th>
                        <th>Item</th>
                        <th>Money</th>
                    </tr>
                   </thead>
                   <tbody>
                   @foreach($donations as $donation)
                     <tr>
                       <th>{{$loop->index+1}}</th>
                        <td>{{$donation->name}}</td>
                        <td>{{$donation->item}}</td>
                        <td>{{$donation->money}}</td>
                     </tr>
                     
                    @endforeach
                   </tbody>
                </table>
            </div>
          </div>


    </div>


@endsection
