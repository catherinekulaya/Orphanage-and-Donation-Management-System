@extends('user.main')

@section('content')

<!DOCTYPE html>
<html lang="en">
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
    <th>Quantity</th>
    <th>Orphanage center</th>
    
  </tr>
  <tr>
    <td>Drinking water</td>
    <td>124 </td>
    <td>Don Bosco Oc  </td>
  </tr>
  <tr>
    <td>Soaps</td>
    <td>123</td>
    <td> St. Monicah hope Oc </td>
  </tr>
  <tr>
    <td>Tshirts</td>
    <td>100</td>
    <td> Joy of hope  Oc </td>
  </tr>
  <tr>
    <td>slippers</td>
    <td>32</td>
    <td>Mount Everest memorial Oc    </td>
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