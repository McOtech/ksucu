@extends('layouts.app')

@section('content')

<div class="container-fluid">

          <!-- Content Row -->
          <div class="row">
            <!-- First Column -->
            <div class="col-lg-4">
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Add Year</h6>
                </div>
                <div class="card-body">
    <form action="" method="POST" enctype="multipart/form-data">

      <div class="form-group">
        <label for="title">Year</label>
        <input type="text" class="form-control" name="title" id='title' value="">
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-success"> Add </button>
      </div>
    </form>
  </div>
</div>


                </div>
              </div>
              </div>
              </div>
              </div>
@endsection

