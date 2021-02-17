@extends('user.main')

@section('content')
<div class="container donation-card">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h3 class="center">Donation Required Items</h3>
                    <form>
                        <div class="form-group">
                          <label>Item Name</label>
                          <input type="text" value="{{ $item }}" class="form-control">
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
                            <a href="/requiredItems"  class="btn btn-primary">Cancel</a>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                      </form>
                </div>
              </div>

        </div>
    </div>

</div>

<script>

</script>

@endsection
