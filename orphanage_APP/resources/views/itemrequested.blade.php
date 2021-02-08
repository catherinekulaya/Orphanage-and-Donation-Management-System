@extends('layouts.app')

@section()

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Items requested</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</head>
<body>

<div class="container">
<div class="jumbtron">
<div class="card text-center">
  <div class="card-header">
  </div>
  <div class="card-body">
  <table class="table table-dark">
  <head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}
td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}
tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>
<h2>Item requesting table</h2>
<table>
  <tr>
    <th>Items requested</th>
    <th>Orphanage center</th>
    <th>action</th>
  </tr>
  <tr>
    <td>Drinking water</td>
    <td>    </td>
    <td> <button type="button" class="btn btn-primary">create</button>
    <button type="button" class="btn btn-danger">update</button></td>
  </tr>
  <tr>
    <td>Soaps</td>
    <td></td>
     <td> <button type="button" class="btn btn-primary">create</button>
    <button type="button" class="btn btn-danger">update</button>   </td>
  </tr>
  <tr>
    <td>Tshirts</td>
    <td></td>
     <td> <button type="button" class="btn btn-primary">create</button>
    <button type="button" class="btn btn-danger">update </button>  </td>
  </tr>
  <tr>
    <td>Fruits</td>
    <td></td>
     <td>  <button type="button" class="btn btn-primary">create</button>
    <button type="button" class="btn btn-danger">update</button>  </td>
  </tr>
  <tr>
    <td>food</td>
    <td></td>
     <td>  <button type="button" class="btn btn-primary">create</button>
    <button type="button" class="btn btn-danger">update </button> </td>
  </tr>
</table>
</body>

  </div>
</div>
</div>
</div>
</body>
</html>
@endsection
