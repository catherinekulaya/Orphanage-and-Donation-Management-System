@extends('layouts.app')

@section('content')
<div class="home-container table-responsive-sm">
<h4>Payments Transactions</h4>
<table class="table table-hover table-bordered">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Transaction ID</th>
        <th scope="col">Name</th>
        <th scope="col">Date of payment</th>
        <th scope="col">Transaction Status</th>
      </tr>
    </thead>
    <tbody>
        @foreach($transactions as $transaction)
        <tr>
            <th scope="row"> {{ $loop->index+1 }}</th>
            <td> {{ $transaction['id']}}</td>
            <td> {{ $transaction['name']}}</td>
            <td> {{ $transaction['date']}}</td>
            @if($transaction['status'] === 'Failed')
            <td> <span class="btn-danger">{{ $transaction['status']}}</span></td>
            @elseif($transaction['status'] === 'Pending')
            <td> <span class="btn-warning">{{ $transaction['status']}}</span></td>
            @else
            <td> <span class="btn-success">{{ $transaction['status']}}</span></td>
            @endif
          </tr>
        @endforeach
    </tbody>
  </table>
</div>
@endsection
