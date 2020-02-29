@extends('layouts.app')

@section('content')

<div class="container-fluid">

          <!-- Content Row -->
          <div class="row">
            <!-- First Column -->
            <div class="col-lg-4">
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">{{ isset($position)  ? 'Edit Position' : 'Create Position' }}</h6>
                </div>
                <div class="card-body">
                @include('partials.errors')
    <form action="{{ isset($position) ? route('position.update', $position->id) : route('position.store') }}" method="POST" enctype="multipart/form-data">
     @csrf
      @if(isset($position))
        @method('PUT')
      @endif
      <div class="form-group">
        <label for="title">Position</label>
        <input type="text" class="form-control" name="position" id='position' value="{{ isset($position) ? $position->position : '' }}">
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-success">
                 {{ isset($position) ? 'Update': 'Add' }}
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

