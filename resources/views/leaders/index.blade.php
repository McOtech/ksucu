@extends('layouts.app')

@section('content')

<div class="container-fluid">

          <!-- Content Row -->
          <div class="row">
            <!-- First Column -->
            <div class="col-lg-4">
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Add A Leader</h6>
                </div>
                <div class="card-body">
    <form action="{{ route('leader.store') }}" method="POST"  enctype="multipart/form-data">
    @csrf

      <div class="form-group">
        <label for="title">Name</label>
        <input type="text" class="form-control" name="name" id='name' value="">
      </div>

      <div class="form-group">
        <label for="title">Course</label>
        <input type="text" class="form-control" name="course" id='course' value="">
      </div>

      <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" id="description" cols="5" rows="5" class="form-control"></textarea>
      </div>

     <div class="form-group">
        <label for="message">Message</label>
        <textarea name="message" id="message" cols="5" rows="5" class="form-control"></textarea>
      </div>

      <div class="form-group">
        <label for="image">Image</label>
        <input type="file" class="form-control" name="image" id='image'>
      </div>

      {{--  <div class="form-group">
        <label for="category">Category</label>
        <select name="category" id="category" class="form-control">
        </select>
      </div>  --}}

      <div class="form-group">
        <button type="submit" class="btn btn-success">
     Add
        </button>
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

