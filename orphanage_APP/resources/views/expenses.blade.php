@extends('layouts.app')

@section('content')
<div class="home-container table-responsive-sm">
<h4>Expenses</h4>
<table class="table table-hover table-bordered">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Expense Name</th>
        <th scope="col">Description</th>
        <th scope="col">Amount</th>
        <th scope="col">Date of payment</th>
        <th scope="col">supervised By</th>
      </tr>
    </thead>
    <tbody>
        @foreach($expenses as $expense)
        <tr>
            <th scope="row"> {{ $loop->index+1 }}</th>
            <td> {{ $expense['expenseName']}}</td>
            <td> {{ $expense['description']}}</td>
            <td> {{ $expense['amount']}}</td>
            <td> {{ $expense['date']}}</td>
            <td> {{ $expense['supervisedBy']}}</td>


          </tr>
        @endforeach
    </tbody>
  </table>
</div>
@endsection
