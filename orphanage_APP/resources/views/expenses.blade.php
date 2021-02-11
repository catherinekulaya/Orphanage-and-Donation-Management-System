@extends('layouts.app')

@section('content')
<div class="home-container table-responsive-sm">
  <div class="row">
    <div class="col-sm-10">
      <h4>Expenses</h4>
    </div>
    <div class="col-sm-2">
      <a class="btn btn-primary btn-sm" href="/expenses/create">Add Expense</a>
    </div>
  </div>
<br>
  <table class="table table-hover table-bordered table-responsive-sm">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Expense Name</th>
        <th scope="col">Description</th>
        <th scope="col">Amount</th>
        <th scope="col">Date of payment</th>
        <th scope="col">supervised By</th>
        <th scope="col">Options</th>
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
        <td> 
          <a class="btn btn-primary btn-sm" href="/expenses/edit/34">Edit</a>
          <a class="btn btn-danger btn-sm">Delete</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection