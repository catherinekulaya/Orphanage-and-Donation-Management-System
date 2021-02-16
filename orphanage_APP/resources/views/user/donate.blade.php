@extends('user.main')

@section('content')
<div class="container donation-card">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h3 class="center">Make Donation</h3>
                    <form action = "/submit" method = "POST">
                    @csrf

                        <div class="form-group">
                            <label>Name</label>
                            <input name="name" type="text" class="form-control">
                            <small class="form-text text-muted">Optional</small>
                          </div>
                        <div class="form-group">
                            <label>Donation Type</label>
                            <select id="donationType" onclick="getType()" class="form-control">
                              <option></option>
                              <option name="money" value="Money">Money</option>
                              <option  value="Item">Item</option>
                            </select>
                        </div>
                        <div class="form-group" id="item_name">
                          <label>Item Name</label>
                          <input name="item" type="text" class="form-control">
                        </div>
                        <div class="form-group" id="amount">
                            <label>Amount</label>
                            <input name="money" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Donation Date</label>
                            <input name="donationDate" type="date" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea name="description" class="form-control"></textarea>
                        </div>
                        <div class="center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="/"  class="btn btn-primary">Cancel</a>
                        </div>

                        <script>
                        $('document').ready(function () {
                        $("#donationType").change(function () {
                        var data = $(this).val();
                        if (data == "Money") {
                        $('#item_name').hide();
                        } else {
                        $('#item_name').show();
                        }

                        if (data == "Item") {
                        $('#amount').hide();
                        } else {
                        $('#amount').show();
                        }

                        });
                        });
                        </script>
                      </form>
                </div>
              </div>

        </div>
    </div>

</div>

<script>

</script>

@endsection
