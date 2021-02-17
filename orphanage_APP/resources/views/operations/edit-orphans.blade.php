@extends('layouts.app')

@section('content')
    <div class="home-container">
        <div class="card">
            <div class="card-body">
                <h3 class="center">Edit orphans</h3>
                <form>
                    <div class="form-group">
                      <label>First Name</label>
                      <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" class="form-control">
                      </div>
                      <div class="form-group">
                            <label>Gender</label>
                            <select id="genderType" onclick="getType()" class="form-control">
                              <option></option>
                              <option name="male" value="male">Male</option>
                              <option  value="female">Female</option>
                            </select>
                        </div>
                    <div class="form-group">
                        <label>Age</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>status_id</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                            <label>Date of birth</label>
                            <input name="dateofBirth" type="date" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Register Date</label>
                            <input name="registerDate" type="date" class="form-control">
                        </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
          </div>


    </div>


@endsection
