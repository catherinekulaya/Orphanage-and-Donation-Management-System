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
        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Items Requested</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Date Requested</th>
                    <th scope="col">Options</th>
                </tr>
                <thead>
                <tbody>
                    @foreach ($items as $item)
                        <tr>
                            <th scope="row"> {{ $loop->index + 1 }}</th>
                            <td> {{ $item['itemName'] }}</td>
                            <td> {{ $item['quantity'] }}</td>
                            <td> {{ $item['date'] }}</td>
                            <td>
                                <div class="row">
                                    <a class="btn btn-primary btn-sm"
                                        href="/itemsrequested/edit/{{ $item->id }}">Edit</a> &nbsp;
                                    <form class="form-size" action="/itemsrequested/delete/{{ $item->id }}"
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
