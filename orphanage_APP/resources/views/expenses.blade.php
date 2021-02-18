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
  @if (session('response'))
  <div class="row center">
      <div class="col-sm-3">
      </div>
      <div class="alert alert-success col-sm-5" id="success-alert" role="alert">
          {{ session('response') }}
      </div>
  </div>
@endif

<script>
  $("#success-alert").fadeTo(2000, 500).slideUp(500, function() {
      $("#success-alert").slideUp(500);
  });
</script>
<br>
  <table class="table table-hover table-bordered table-responsive-sm">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Expense Name</th>
<<<<<<< HEAD
        <th scope="col">Description</th>
        <th scope="col">Amount</th>
        <th scope="col">Description</th>
>>>>>>> 812ad35a6b8b4b27f305fede468fa59343fbf664
        <th scope="col">Options</th>
      </tr>
    <tbody>
      @foreach($expenses as $expense)
      <tr>
        <th scope="row"> {{ $loop->index+1 }}</th>
        <td> {{ $expense['expenseName']}}</td>
        <td> {{ $expense['expenseType']}}</td>
        <td> {{ $expense['amount']}}</td>
        <td> {{ $expense['date']}}</td>
        <td> {{ $expense['desc']}}</td>
        <td> 
          <div class="row">
            <a class="btn btn-primary btn-sm"
                href="/expenses/edit/{{ $expense->id }}">Edit</a> &nbsp;
            <form class="form-size" action="/expenses/delete/{{ $expense->id }}"
                method="POST">
                <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete?')">Delete</button>
                @csrf
                @method('DELETE')
            </form>
        </div>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection