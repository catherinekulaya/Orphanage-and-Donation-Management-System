@extends('user.main')

@section('content')
<div class="container donation-card">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h3 class="center">Make Donation</h3>
                    <form>
                        <div class="form-group">
                            <label>Donation Type</label>
                            <select id="donationType" onclick="getType()" class="form-control">
                              <option></option>
                              <option value="Money">Money</option>
                              <option value="Item">Item</option>
                            </select>
                        </div>
                        <div class="form-group">
                          <label>Item Name</label>
                          <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Amount</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Donation Date</label>
                            <input type="date" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control"></textarea>
                        </div>
                        <div class="center">
                            <a href="/"  class="btn btn-primary">Cancel</a>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                      </form>
                </div>
              </div>

        </div>
    </div>

</div>

<script>
    function getType() {
        const donationType = document.getElementById('donationType').innerHTML
    console.log(donationType);
    }

</script>

@endsection
