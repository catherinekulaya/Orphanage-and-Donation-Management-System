@extends('layouts.app')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/momentjs/2.14.1/moment.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">


<script>
    $(function () {
      $('#datetimepicker').datetimepicker();
   });
  </script>

    <div class="home-container">
        <div class="card">
            <div class="card-body">
                <h3 class="center">Add Appointment Details</h3>
                <form>
                    <div class="form-group">
                      <label>First Name</label>
                      <input type="text" class="form-control">
                      <label>Last Name</label>
                      <input type="text" class="form-control">
                    </div>
                    <div class='col-md-6'>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                        <label>Phone Number</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class='col-md-6'>
                        <div class="form-group">
                           <label class="control-label">Appointment Date and Time</label>
                           <div class='input-group date' id='datetimepicker'>
                              <input type='text' class="form-control" />
                              <span class="input-group-addon">
                              <span class="glyphicon glyphicon-calendar"></span>
                              </span>
                           </div>
                        </div>
                        <a> </a>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
          </div>


    </div>


@endsection
